<?php 
include_once "../model/query.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $conn = openConnection();

    try {
        $result = new stdClass();
        $result->status = true;
        $result->showNoResult = false;
        if (!isset($_SESSION['email'])) {
            $result->status = false;            
        }
                
        if(isset($_POST['id'])){
            $cartItemId = $_POST['id'];
            $result->id = $cartItemId;
            $conn->begin_transaction();

            $cartItemResult = queryResult($conn, 'SELECT * FROM cartitem ci WHERE ci.cartitemid = ?', 'i', $cartItemId);

            if($cartItemResult->num_rows > 0){
                $cartId = $cartItemResult->fetch_assoc()['cartid'];
                queryResult($conn, 'DELETE FROM cartitem WHERE cartitemid = ?', 'i', $cartItemId);  
                $conn->commit();       
                $newCartItemResult = queryResult($conn, 'SELECT * FROM cartitem ci WHERE ci.cartId = ?', 'i', $cartId);
                $result->amount = $newCartItemResult->num_rows;
                if($newCartItemResult->num_rows == 0){
                    $result->showNoResult = true;
                }
            }
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