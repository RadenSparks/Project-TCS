<?php
include_once "../../model/query.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $conn = openConnection();

    try {
        $result = new stdClass();
        $result->status = false;
               
        $ids = $_POST['ids'];
        
        $conn->begin_transaction();
        $query = "UPDATE `genre` SET `retired` = 1 WHERE `genre`.`genreid` in ".$ids;
        
        $result->query = $query;
        query($conn, $query);
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