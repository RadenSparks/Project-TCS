<?php
    function connectDb() {
        $severname = "localhost";
        $username = "root";
        $password = "";

        try {
            // Tạo một đối tượng PDO, là một lớp cung cấp giao diện để tương tác với CSDL
            // mysql là tên driver
            // dbname = tên CSDL
            $conn = new PDO("mysql:host=$severname; dbname=db_epicgames", $username, $password);
             // Thiết lập chế độ lỗi để PDO sẽ ném một ngoại lệ nếu có lỗi xảy ra trong quá trình thực hiện truy vấn
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {

        }
    }
?>