<?php 
    function openConnection(){
        $conn = new mysqli('localhost', 'root', '', 'db_epicgamers');
        $conn->set_charset('utf8mb4');
        return $conn;
    }

    function queryResult($conn, $query, $types, $var, ...$vars){
        $stmt = $conn->prepare($query);
        $stmt->bind_param($types, $var, ...$vars);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }


    function query($conn, $query){
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
?>