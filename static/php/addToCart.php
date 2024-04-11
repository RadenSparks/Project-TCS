<?php
include_once "../model/query.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $conn = openConnection();


    try {
        $result = new stdClass();
        $result->status = true;
        if (!isset($_SESSION['email'])) {
            $result->status = false;            
        }
        

        
        if(isset($_POST['id'])){
            
            $conn->begin_transaction();

            $accountResult = getAccountResultByEmail($conn, $_SESSION['email']);
            $account = $accountResult->fetch_assoc();
            $accountId = $account["accountid"];

            $cartResult = queryResult($conn, 'SELECT * FROM cart c join accounts a on c.accountid = a.accountid WHERE status = 1 and a.accountid = ? LIMIT 1', 'i', $accountId);
            $cart = $cartResult->fetch_assoc();

            if ($cartResult->num_rows > 0) {
                $stmt = queryResult($conn, 'INSERT INTO `cartitem`(`cartid`, `quantity`, `gameid`) VALUES (?, 1, ?)', 'ii', $cart['cartid'], $_POST['id']);               
            } else {                
                $date = date('Y-m-d H:i:s');                
                $stmt = queryResult($conn, 'INSERT INTO `cart`(`accountid`, `purchasedate`, `status`) VALUES (?, ?, 1)', 'is', $accountId, $date);
                $cartId = $conn->insert_id;
                $stmt = queryResult($conn, 'INSERT INTO `cartitem`(`cartid`, `quantity`, `gameid`) VALUES (?, 1, ?)', 'ii', $cartId, $_POST['id']);
            }
            $conn->commit();            
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