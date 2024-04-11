<?php
include_once "../model/query.php";
include_once "./generateUUID.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $conn = openConnection();

    try {
        $result = new stdClass();
        $result->status = false;
        if (!isset($_SESSION['email'])) {
            $result->message = "No email !";
        }
        if (isset($_POST['cartid'])) {
            $cartId = $_POST['cartid'];
            $conn->begin_transaction();

            $accountResult = getAccountResultByEmail($conn, $_SESSION['email']);
            $account = $accountResult->fetch_assoc();
            $accountId = $account["accountid"];

            $cartResult = queryResult($conn, 'SELECT * FROM cart c join accounts a on c.accountid = a.accountid WHERE status = 1 and a.accountid = ? and c.cartid = ? LIMIT 1', 'ii', $accountId, $cartId);

            if ($cartResult->num_rows > 0) {
                $cartItemResult = queryResult($conn, 'SELECT * FROM cartitem ci join game g on ci.gameid = g.gameid WHERE ci.cartid = ?', 'i', $cartId);
                if ($cartItemResult->num_rows > 0) {
                    $totalCart = 0;
                    while ($cartItem = $cartItemResult->fetch_assoc()) {
                        $sale = $cartItem['sale'];
                        $gamePrice = $cartItem['price'];
                        if ($sale != 0) {
                            $newPrice = $sale * $gamePrice;
                            $salePercent = 100 - $sale * 100;
                            $totalCart += $newPrice;
                        } else {
                            $totalCart += $gamePrice;
                        }
                    }

                    $totalCart = $totalCart * 1.1;
                    $result->total = $totalCart;
                    $currentDate = date('Y-m-d H:i:s');
                    $query = "UPDATE cart SET purchasedate = '" . $currentDate . "', status = 0, totalprice = " . $totalCart . " WHERE cart.cartid = " . $cartId;
                    $result->query = $query;
                    // queryResult($conn, 'UPDATE cart SET purchasedate = ?, status = 0, totalprice = ? WHERE cartid = ?', 'sfi', $currentDate, $totalCart, $cartId);
                    query($conn, $query);
                    $result->status = true;
                } else {
                    $result->status = false;
                    $result->message = "No cart Item !";
                }
                $result->status = true;
            } else {
                $result->status = false;
                $result->message = "No cart!";
            }
            $conn->commit();
        } else {
            $result->status = false;
            $result->message = "Wrong method!";
        }


        echo json_encode($result);
    } catch (Exception $e) {
        $error = new stdClass();
        $error->status = false;
        $error->message = $e->getMessage();
        $error->stack = $e->getTraceAsString();
        echo json_encode($error);
    }
} else {
    $result = new stdClass();
    $result->status = false;
    echo json_encode($result);
}

