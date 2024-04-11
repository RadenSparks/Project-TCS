<?php
include_once "../../model/query.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $conn = openConnection();

    try {
        $result = new stdClass();
        $result->status = false;
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dname = $lname." ".$fname;

        $conn->begin_transaction();
        $update_query = "UPDATE `accounts` SET 
        `password`='".$password."',
        `firstname`='".$fname."',
        `lastname`='".$lname."',
        `displayname`='".$dname."',
        `email`='".$email."'
         WHERE `accountid` = ".$id;        
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