<?php
include_once "./connectdb.php";

function product()
{
    $conn = connectDb();
    $sql = "SELECT * FROM game";
    $stmt = $conn->prepare($sql);
}
