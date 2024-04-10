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
            $wishId = $_POST['id'];
            $conn->begin_transaction();

            $wishResult = queryResult($conn, 'SELECT * FROM wishlist w WHERE w.wishid = ?', 'i', $wishId);

            if($wishResult->num_rows > 0){
                queryResult($conn, 'DELETE FROM wishlist WHERE wishid = ?', 'i', $wishId);  
                $conn->commit();          
                $newWishResult = queryResult($conn, 'SELECT * FROM wishlist w join accounts a on w.accountid = a.accountid WHERE a.email  = ?', 's', $_SESSION['email']);
                $result->amount = $newWishResult->num_rows;
                if($newWishResult->num_rows == 0){
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