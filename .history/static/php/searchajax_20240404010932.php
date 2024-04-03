<?php
$search = $_POST['search'];
echo $search;
$result = search($search);
$data = '';
foreach ($result as $index => $item) {
    if($index >= 0  && $index <= 3) {
        
    }
}
echo $data;

function search($search)
{
    include("../model/connectdb.php");
    $conn = connectDb();
    $sql = "SELECT * FROM game WHERE gamename LIKE '%$search%'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data = $stmt->fetchAll();
    $conn = null;
    return $data;
}
