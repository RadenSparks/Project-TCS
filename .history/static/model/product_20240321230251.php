<?php
include_once "./connectdb.php";

function product()
{
    // Gọi hàm connectDb để tiến hành kết nối đến CSDL và lấy đối tượng PDO, sau đó gán vào biến $conn;
    $conn = connectDb();
      // Khai báo câu truy vấn SQL để lấy tất cả các dữ liệu từ bảng game
      
    $sql = "SELECT * FROM game";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
?>