<?php
include_once "../../model/query.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $conn = openConnection();

    try {
        $result = new stdClass();
        $result->status = false;
               
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dname = $lname." ".$fname;

        $conn->begin_transaction();
        $insert_query = "INSERT INTO `accounts`(`password`, `firstname`, `lastname`, `displayname`, `email`, `isadmin`, `active`) 
            VALUES ('".$password."', '".$fname."', '".$lname."', '".$dname."', '".$email."', 0, 1)";
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