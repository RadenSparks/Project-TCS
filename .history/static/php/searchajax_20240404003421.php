<?php
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $result = search($search);
    foreach ($result as $item) {
        echo '';
    }
   
}

function search($search)
{
    $conn = connectDb(); // Hàm kết nối đến cơ sở dữ liệu
    $sql = "SELECT * FROM game WHERE gamename LIKE '%$search%'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data = $stmt->fetchAll();
    $conn = null;
    return $data;
}
