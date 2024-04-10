<?php
include_once "../../model/query.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $conn = openConnection();

    try {
        $result = new stdClass();
        $result->status = false;
               
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $sale = $_POST['sale'];
        $developer = $_POST['developer'];
        $publisher = $_POST['publisher'];
        $genre = $_POST['genre'];
        $summary = $_POST['summary'];

        $conn->begin_transaction();
        $update_query = "UPDATE `game` SET 
        `gamename`='".$name."',
        `sale`=".$sale.",
        `price`=".$price.", 
        `genreid`=".$genre.",
        `developer`='".$developer."',
        `publisher`='".$publisher."',
        `summary`='".$summary."' 
        WHERE `gameid` = ".$id;        
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