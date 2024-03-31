<?php
include_once "./connectdb.php";

function product()
{
    // Gọi hàm connectDb để tiến hành kết nối đến CSDL và lấy đối tượng PDO, 
    $conn = connectDb();
    $sql = "SELECT * FROM game";
    $stmt = $conn->prepare($sql);
    
}
?>