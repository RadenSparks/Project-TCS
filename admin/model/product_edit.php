<?php
    // Hàm để lấy thông tin sản phẩm từ cơ sở dữ liệu dựa trên gameid
    function getProductInfoById($gameid) {
        // Thực hiện kết nối đến cơ sở dữ liệu
        $conn = conndb();
        // Thiết lập chế độ lỗi để bắt lỗi một cách chính xác
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try {
            // Chuẩn bị truy vấn để lấy thông tin sản phẩm dựa trên gameid
            $stmt = $conn->prepare("SELECT * FROM game WHERE gameid = :gameid");
            $stmt->bindParam(':gameid', $gameid);
            $stmt->execute();

            // Lấy kết quả trả về dưới dạng mảng kết hợp (associative array)
            $product_info = $stmt->fetch(PDO::FETCH_ASSOC);

            // Trả về thông tin sản phẩm
            return $product_info;
        } catch(PDOException $e) {
            // Xử lý lỗi nếu có
            echo "Lỗi: " . $e->getMessage();
            return null;
        }
}

function editImg($gameid){
    $conn = conndb();
    $sql = "SELECT firstimg, secondimg, thirdimg, fourthimg, fifthimg, icon, logo FROM game WHERE gameid = :gameid";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':gameid' => $gameid)); // Truyền giá trị cho tham số :gameid
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $data;
}

function handleImage($inputName, $existingImage) {
    global $target_dir;
    if (!empty($_FILES[$inputName]['name'])) {
       
        $image = $_FILES[$inputName]['name'];
        move_uploaded_file($_FILES[$inputName]["tmp_name"], $target_dir . "first-img/" . $image);
        return $image;
    } else {
      
        return $existingImage;
    }
}
$productImg1 = handleImage('image1', isset($image_edit['firstimg']) ? $image_edit['firstimg'] : '');
$productImg2 = handleImage('image2', isset($image_edit['secondimg']) ? $image_edit['secondimg'] : '');
$productImg3 = handleImage('image3', isset($image_edit['thirdimg']) ? $image_edit['thirdimg'] : '');
$productImg4 = handleImage('image4', isset($image_edit['fourthimg']) ? $image_edit['fourthimg'] : '');
$productImg5 = handleImage('image5', isset($image_edit['fifthimg']) ? $image_edit['fifthimg'] : '');
$productIcon = handleImage('icon', isset($image_edit['icon']) ? $image_edit['icon'] : '');
$productLogo = handleImage('logo', isset($image_edit['logo']) ? $image_edit['logo'] : '');
?>
