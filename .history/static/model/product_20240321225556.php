<?php
    include_once "./connectdb.php";

    function product() {
        $conn = 
        $sql = "SELECT * FROM game";
        $stmt = $conn->prepare($sql);
    }
?>