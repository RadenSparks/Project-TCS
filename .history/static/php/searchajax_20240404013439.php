<?php
// Lấy dữ liệu nhập từ Input
$data = '';
$search = $_POST['search'];
if ($search != '') {
    $result = search($search);
    if(count($result))
    // Nối chuỗi để hiển thị View More
    $data .= '  <li>
<div>
    <a href="./index.php">
        <div class="games-search">

            <div class="name-searchs">
                <span class="name-search-product" style="text-decoration: underline; opacity: 0.5">View More</span>

            </div>
        </div>
    </a>
</div>
</li>';
} else {
    $data = '';
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
