<?php
include_once "./connectdb.php";

function product()
{
    // Gọi hàm 
    $conn = connectDb();
    $sql = "SELECT * FROM game";
    $stmt = $conn->prepare($sql);
    
}
?>