<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

include_once "../../model/query.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $conn = openConnection();

    try {
        $result = new stdClass();
        $result->status = false;
               
        $name = $_POST['name'];
        $price = $_POST['price'];
        $sale = $_POST['sale'];
        $developer = $_POST['developer'];
        $publisher = $_POST['publisher'];
        $genre = $_POST['genre'];
        $summary = $_POST['summary'];
        

        $conn->begin_transaction();
        $insert_query = "INSERT INTO `game`(`gamename`, `sale`, `price`, `genreid`, `developer`, `publisher`, `summary`) VALUES ('".$name."', ".$sale.", ".$price.", ".$genre.", '".$developer."', '".$publisher."', '".$summary."')";
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