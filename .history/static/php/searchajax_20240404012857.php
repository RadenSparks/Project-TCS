<?php
// Lấy dữ liệu nhập từ Input
$data = '';
$search = $_POST['search'];
if($search != '') {

}
// echo $search;
// Gọi hàm và truyền vào để dùng đó ta làm câu truy vấn


// echo ra. This libary chỉ chỗ tới file này và lấy dữ liệu
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
