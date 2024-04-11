    <?php
function findAllProduct($item_per_page, $current_page) {
    $conn = connectDb();
    $offset = ($current_page - 1) * $item_per_page;
    $sql = "SELECT * FROM game WHERE retired = 0 and gameid > :offset ORDER BY gameid ASC LIMIT :limit";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->bindParam(':limit', $item_per_page, PDO::PARAM_INT);
    $stmt->execute();
    $product_list = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Truy vấn để đếm tổng số bản ghi
    $sql_count = "SELECT COUNT(*) as total FROM game";
    $stmt_count = $conn->query($sql_count);
    $totalRecords = $stmt_count->fetchColumn();

    $conn = null;
    return array('products' => $product_list, 'totalRecords' => $totalRecords);
}

function addProduct($productName, $productId, $productGenre, $productPrice, $productSale, 
                    $productSummary, $productImg1, $productImg2, $productImg3, $productImg4, $productImg5, $productIcon,
                    $productLogo, $productDeve, $productPub, $conn) {

                        $sql = "INSERT INTO game (gamename, gameid, genreid, price, sale, summary, 
                        `first-img`, developer, publisher, `second-img`, `third-img`, `fourth-img`, `fifth-img`, icon, logo) 
                        VALUES (:productName, :productId, :productGenre, :productPrice, :productSale, :productSummary, 
                        :productImg1, :productDeve, :productPub, :productImg2, :productImg3, :productImg4, :productImg5, :productIcon, :productLogo)";
                

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':productName', $productName);
    $stmt->bindValue(':productId', $productId);
    $stmt->bindValue(':productGenre', $productGenre);
    $stmt->bindValue(':productPrice', $productPrice);
    $stmt->bindValue(':productSale', $productSale);
    $stmt->bindValue(':productSummary', $productSummary);
    $stmt->bindValue(':productImg1', $productImg1); 
    $stmt->bindValue(':productImg2', $productImg2);  
    $stmt->bindValue(':productImg3', $productImg3);
    $stmt->bindValue(':productImg4', $productImg4);
    $stmt->bindValue(':productImg5', $productImg5);
    $stmt->bindValue(':productIcon', $productIcon);
    $stmt->bindValue(':productLogo', $productLogo);
    $stmt->bindValue(':productDeve', $productDeve);
    $stmt->bindValue(':productPub', $productPub);

    $stmt->execute();
    $conn = null;
}


function findAllGenre(){
    $conn = connectDb();
    $sql = "SELECT * FROM genre where retired = 0";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $genre_list = $stmt->fetchAll();
    $conn = null;
    return $genre_list;

}
function product_delete($gameid) {
    $conn = connectDb();
    // Truy vấn để lấy tên các file ảnh từ cơ sở dữ liệu
    $sql = "SELECT `first-img`, `second-img`, `third-img`, `fourth-img`, `fifth-img`, `icon`, `logo` FROM game WHERE gameid = :gameid";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':gameid', $gameid);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Xóa sản phẩm từ cơ sở dữ liệu
    $sql_delete = "UPDATE game SET retired = 1 WHERE gameid = :gameid";
    $stmt_delete = $conn->prepare($sql_delete);
    $stmt_delete->bindParam(':gameid', $gameid);
    if ($stmt_delete->execute()) {
        // Xóa các file ảnh từ thư mục lưu trữ
        $uploadDirectory = 'first-img/';
        foreach ($row as $image) {
            if (!empty($image)) {
                $file_path = __DIR__ . '/' . $uploadDirectory . $image;
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }
        }
    }
}




function upLoadImgProduct($gameid){
    $conn = connectDb();
    $sql = "SELECT `first-img` FROM game WHERE gameid = :gameid";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':gameid', $gameid, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchColumn();
    return $result;
}

function gameIdCount($gameid){
    $conn = connectDb(); // Kết nối đến cơ sở dữ liệu, giả sử hàm conndb() đã được định nghĩa ở đâu đó trong mã của bạn

    // Sử dụng prepared statement để tránh SQL injection
    $sql = "SELECT COUNT(*) as count FROM game WHERE gameid = :gameid";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':gameid', $gameid, PDO::PARAM_INT);
    $stmt->execute();
    
    // Lấy kết quả từ cơ sở dữ liệu
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Đóng kết nối
    $conn = null;

    // Trả về số lượng game có gameid tương ứng
    return $result['count'];
}

?>
