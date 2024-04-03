<?php
include("../model/connectdb.php");
function searchItem($search)
{

    $sql = "SELECT * FROM game WHERE gamename LIKE '%$search%'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data = $stmt->fetchAll();
    $conn = null;
    return $data;
}
