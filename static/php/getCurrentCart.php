<?php
include_once "../model/query.php";
include_once "./generateUUID.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $conn = openConnection();


    try {
        $result = new stdClass();
        if (!isset($_SESSION['email'])) {            
            $result->status = false;
            $result->message = "No email !";
        }

        $conn->begin_transaction();

        $accountResult = getAccountResultByEmail($conn, $_SESSION['email']);
        $account = $accountResult->fetch_assoc();
        $accountId = $account["accountid"];

        $cartResult = queryResult($conn, 'SELECT * FROM cart c join accounts a on c.accountid = a.accountid WHERE status = 1 and a.accountid = ? LIMIT 1', 'i', $accountId);
        $cart = $cartResult->fetch_assoc();
        
        if ($cartResult->num_rows > 0) {
            $cartId = $cart['cartid'];
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
                $totalCart = $totalCart * 1.1 / 23000;
                $result = array(
                    "purchase_units" => array(
                        array(
                            "amount" => array(
                                "currency_code" => "USD",
                                "value" => number_format((float)$totalCart, 2, '.', '') 
                            ),
                            "reference_id" => generateUUID()."-".$cartId
                        )
                    ),
                    "intent" => "CAPTURE"
                );
            } else {
                $result->status = false;
                $result->message = "No cart Item !";
            }
        } else {
            $result->status = false;
            $result->message = "No cart!";
        }
        $conn->commit();
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

