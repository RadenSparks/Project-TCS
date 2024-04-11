<?php
include_once "../../model/query.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $conn = openConnection();

    try {
        $result = new stdClass();
        $result->status = false;
        $id = $_POST['id'];
        $genrename = $_POST['genrename'];
        
        $conn->begin_transaction();
        $update_query = "UPDATE `genre` SET 
        `genrename`='".$genrename."'      
         WHERE `genreid` = ".$id;        
        $result->query = $update_query;
        query($conn, $update_query);
        $result->status = true;
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