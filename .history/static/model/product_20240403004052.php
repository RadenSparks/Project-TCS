<?php
function product() {
    $conn = connectDb();
    $sql = "SELECT * FROM game";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data = $stmt->fetchAll();
    $conn = null;
    return $data;
}
fuction search()  {
    $conn = connectDb();
    
}
?>
