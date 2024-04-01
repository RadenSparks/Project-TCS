<?php
    function connectDb() {
        $severname = "localhost";
        $username = "root";
        $password = "";

        try {
            // Tạo một đối tượng PDO, là một lớp cung cấp giao diện để tương tác với CSDL
            // mysql là tên driver
            // dbname = tên CSDL
            $conn = new PDO("mysql:host=$severname; dbname=db_epicgamers", $username, $password);
            $conn->setAttribute(PDO::)
        }
    }
?>