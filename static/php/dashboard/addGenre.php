<?php
include_once "../../model/query.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $conn = openConnection();

    try {
        $result = new stdClass();
        $result->status = false;
               
        $genrename = $_POST['genrename'];

        $conn->begin_transaction();
        $insert_query = "INSERT INTO `genre`(`genrename`, `retired`) VALUES ('".$genrename."', 0)";
        $result->query = $insert_query;
        query($conn, $insert_query);
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