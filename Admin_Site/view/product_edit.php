<?php
// Xử lý yêu cầu chỉnh sửa sản phẩm
if (isset($_GET['gameid'])) {
    $gameid = $_GET['gameid'];
    // Lấy thông tin sản phẩm từ cơ sở dữ liệu dựa trên gameid
    $product_edit = getProductById($gameid);
}

// Kiểm tra xem có yêu cầu gửi dữ liệu chỉnh sửa sản phẩm không
if (isset($_POST['editProduct_submit'])) {
    // Bảo vệ dữ liệu đầu vào
    $productName = htmlspecialchars($_POST['gamename']);
    $productId = intval($_POST['gameid']); 
    $productGenre = htmlspecialchars($_POST['genre']);
    $productPrice = floatval($_POST['price']); 
    $productSale = isset($_POST['sale']) ? intval($_POST['sale']) : null; 
    $productDeve = htmlspecialchars($_POST['developer']);
    $productPub = htmlspecialchars($_POST['publisher']);
    $productSummary = htmlspecialchars($_POST['summary']);


    // Xử lý tập tin ảnh đính kèm
    $upImg1 = 'img/first-img/';
    $productImg1 = $_FILES['image1']['name'];
    // Xử lý tập tin ảnh ở đây...
    if ($productImg1) {
        move_uploaded_file($_FILES['image1']['tmp_name'], $upImg1 . $productImg1);
    }
    // Gọi hàm để cập nhật thông tin sản phẩm trong cơ sở dữ liệu
    $success = updateProduct($productName, $productId, $productGenre, $productPrice,
    $productSale, $productDeve, $productPub, $productSummary, $productImg1);

    // Kiểm tra kết quả cập nhật
    if ($success) {
        // Chuyển hướng về trang danh sách sản phẩm với các tham số phân trang tương ứng
        header('Location: ?pg=product_list&per_page=' . $item_per_page . '&page=' . $currentPage);
        exit;
    } else {
        // Hiển thị thông báo lỗi nếu cập nhật không thành công
        echo "Error: Unable to update product.";
    }

}
?>

<?php
// Hàm để lấy thông tin sản phẩm từ cơ sở dữ liệu dựa trên gameid
function getProductById($gameid)
{
    $conn = conndb();
    $sql = "SELECT * FROM game WHERE gameid = :gameid";
    $stmt = $conn->prepare($sql);
    // Chuyển đổi $gameid sang kiểu số nguyên
    $gameid = intval($gameid);
    $stmt->bindParam(':gameid', $gameid);
    $stmt->execute();
    $product_edit = $stmt->fetch(PDO::FETCH_ASSOC);
    return  $product_edit;
}

// Hàm để cập nhật thông tin sản phẩm trong cơ sở dữ liệu
function updateProduct($productName, $productId, $productGenre, 
$productPrice, $productSale, $productDeve, $productPub, $productSummary, $productImg1)
{
    $conn = conndb();
    $sql = "UPDATE game 
    SET gamename = :productName, 
        genreid = :productGenre, 
        price = :productPrice, 
        sale = :productSale, 
        developer = :productDeve, 
        publisher = :productPub, 
        summary = :productSummary,
        firstimg = :productImg1
    WHERE gameid = :productId";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':productName', $productName);
    $stmt->bindParam(':productId', $productId);
    $stmt->bindParam(':productGenre', $productGenre);
    $stmt->bindParam(':productPrice', $productPrice);
    $stmt->bindParam(':productSale', $productSale);
    $stmt->bindParam(':productDeve', $productDeve);
    $stmt->bindParam(':productPub', $productPub);
    $stmt->bindParam(':productSummary', $productSummary);
    $stmt->bindParam(':productImg1', $productImg1);
    return $stmt->execute();
}

// Bao gồm giao diện chỉnh sửa sản phẩm
include_once 'product_edit_main.php';
?>
