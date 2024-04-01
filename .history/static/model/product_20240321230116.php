<?php
include_once "./connectdb.php";

function product()
{
    // Gọi hàm connectDb để tiến hành kết nối đến CSDL
    $conn = connectDb();
    $sql = "SELECT * FROM game";
    $stmt = $conn->prepare($sql);
    
}
?>