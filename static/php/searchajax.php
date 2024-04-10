<?php
// Lấy dữ liệu nhập từ Input
$data = '';
$search = $_POST['search'];
if ($search != '') {
    $result = search($search);
    if (count($result) > 0) {
        foreach ($result as $index => $item) {
            // Chỉ hiện thị 4 sản phẩm có tên gần đúng nhất
            // Nếu muốn xem thêm các sản phẩm có tên liên quan thì vào View More
            if ($index >= 0  && $index <= 3) {
                $data .= '<li>
            <div>
                <a href="./index.php?act=detail&&id=' . $item['gameid'] . '">
                    <div class="games-search">
                        <div class="image-search">
                            <img src="./static/img/icon/' . $item['icon'] . '" alt="">
                        </div>
                        <div class="name-searchs">
                            <span class="name-search-product">' . $item['gamename'] . '</span>
                        </div>
                    </div>
                </a>
            </div>
        </li>';
            }
        }
        // Check nếu sản phẩm không có 
    } else {
        $data .= '<h3 style="color: red">There is nothing to match your search result<h3>';
    }
    // Nối chuỗi để hiển thị View More
    $data .= '  <li>
<div>
    <a href="./index.php?act=browse">
        <div class="games-search">

            <div class="name-searchs">
                <span class="name-search-product" style="text-decoration: underline; opacity: 0.5">View More</span>

            </div>
        </div>
    </a>
</div>
</li>';
// Check nếu không có dữ liệu nhập => Không query đỡ nặng => web chậm
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
