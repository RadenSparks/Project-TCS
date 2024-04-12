<?php
require_once './static/model/product_edit.php';
require_once './static/model/connectdb.php';
$target_dir = "./static/img/";
$image_edit = [];
// Lấy giá trị gameid từ URL nếu nó tồn tại
if (isset($_GET['gameid'])) {
    $gameid = $_GET['gameid'];
    $product_edit = getProductInfoById($gameid);
    $image_edit = editImg($gameid);
}
?>


<div class="main-content">
    <div>

    <form method="post" action="?act=dashboard&pg=product_edit" enctype="multipart/form-data">
            <h2>Edit Product</h2>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <label class="form-label" for="productName">Name product</label>
                        <input class="form-control" type="text" name="gamename" id="productName"
                            value="<?php echo isset($product_edit['gamename']) ? $product_edit['gamename'] : ''; ?>">
                    </div>
                    <div>
                        <label class="form-label" for="productName">Id product</label>
                        <input class="form-control" type="text" name="gameid" id="gameid"
                            value="<?php echo isset($product_edit['gameid']) ? $product_edit['gameid'] : ''; ?>">
                    </div>
                    <div>
                        <label class="form-label" for="developer">developer</label>
                        <input class="form-control" type="text" name="developer" id="developer"
                            value="<?php echo isset($product_edit['developer']) ? $product_edit['developer'] : ''; ?>">
                    </div>
                    <div>
                        <label class="form-label" for="publisher">publisher</label>
                        <input class="form-control" type="text" name="publisher" id="publisher"
                            value="<?php echo isset($product_edit['publisher']) ? $product_edit['publisher'] : ''; ?>">
                    </div>
                    <div>
                            <label class="form-label" for="category">Genre</label>
                            <select class="form-select" name="genre" id="genre">
                            <?php
                            $query = findAllGenre();
                            if ($query) {
                                foreach ($query as $row) {
                                    $selected = ($row['genreid'] == $product_edit['genreid']) ? 'selected' : '';
                                    // Sử dụng dữ liệu từ $row để tạo các tùy chọn <option>
                                    echo "<option value='" . $row['genreid'] . "' " . $selected . ">" . $row['genrename'] . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div>
                        <label class="form-label" for="price">Price</label>
                        <input class="form-control" type="number" name="price" id="price"
                            value="<?php echo isset($product_edit['price']) ? $product_edit['price'] : ''; ?>">
                    </div>
                    <div>
                        <label class="form-label" for="salePrice">Sale</label>
                        <input class="form-control" type="number" name="sale" id="salePrice" step="0.01"
                            value="<?php echo isset($product_edit['sale']) ? $product_edit['sale'] : ''; ?>">
                    </div>

                    <div>
                        <label class="form-label" for="description">Summary</label>
                        <textarea class="form-control" name="summary" id="description" cols="30" rows="10">
                                <?php echo isset($product_edit['summary']) ? $product_edit['summary'] : ''; ?></textarea>
                    </div>

                    <div>
                        <label class="form-label" for="icon">Icon</label>
                        <input class="form-control" type="file" name="icon" id="icon">
                        <img style="width: 200px; height:250px;" src="<?php echo "./static/img/icon/" . $image_edit['icon'] . "" ?>"
                            alt="">

                    </div>


                </div>
                <div class="col-md-6">
                    <div>
                        <label class="form-label" for="image1">Image1</label>
                        <input class="form-control" type="file" name="image1" id="image1">
                        <img style="width: 200px; height:100px;"
                            src="<?php echo "./static/img/first-img/" . $image_edit['first-img'] . "" ?>" alt="">
                    </div>

                    <div>
                        <label class="form-label" for="image1">Image2</label>
                        <input class="form-control" type="file" name="image2" id="image2">
                        <img style="width: 200px; height:100px;"
                            src="<?php echo "./static/img/second-img/" . $image_edit['second-img'] . "" ?>" alt="">
                    </div>

                    <div>
                        <label class="form-label" for="image1">Image3</label>
                        <input class="form-control" type="file" name="image3" id="image3">
                        <img style="width: 200px; height:100px;"
                            src="<?php echo "./static/img/third-img/" . $image_edit['third-img'] . "" ?>" alt="">

                    </div>

                    <div>
                        <label class="form-label" for="image4">Image4</label>
                        <input class="form-control" type="file" name="image4" id="image4">
                        <img style="width: 200px; height:100px;"
                            src="<?php echo "./static/img/fourth-img/" . $image_edit['fourth-img'] . "" ?>" alt="">

                    </div>

                    <div>
                        <label class="form-label" for="image5">Image5</label>
                        <input class="form-control" type="file" name="image5" id="image5">
                        <img style="width: 200px; height:100px;"
                            src="<?php echo "./static/img/fifth-img/" . $image_edit['fifth-img'] . "" ?>" alt="">


                    </div>

                    <div>
                        <label class="form-label" for="logo">logo</label>
                        <input class="form-control" type="file" name="logo" id="logo">
                        <img style="width: 200px; height:100px;"
                            src="<?php echo "./static/img/logo/" . $image_edit['logo'] ?? ''; ?>" alt="">
                    </div>


                </div>
            </div>
            <div class="text-right">
                <input type="submit" name="editProduct_submit" value="Edit" class="btn-danger m-5">
            </div>
        </form>
    </div>
</div>


<?php
$conn = connectDb();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editProduct_submit'])) {
    // Lấy dữ liệu từ form
    $gamename = $_POST['gamename'];
    $gameid = $_POST['gameid'];
    $developer = $_POST['developer'];
    $publisher = $_POST['publisher'];
    $genreid = isset($_POST['genreid']) ? $_POST['genreid'] : '';
    $price = $_POST['price'];
    $sale = $_POST['sale'];
    $summary = $_POST['summary'];

    // Thiết lập đường dẫn lưu trữ
    $target_dir = "./img/";
    $image_edit = editImg($_POST['gameid']);

    // Thiết lập các biến ảnh mặc định từ cơ sở dữ liệu
    $productImg1 = $image_edit['first-img'];
    $productImg2 = $image_edit['second-img'];
    $productImg3 = $image_edit['third-img'];
    $productImg4 = $image_edit['fourth-img'];
    $productImg5 = $image_edit['fifth-img'];
    $productIcon = $image_edit['icon'];
    $productLogo = $image_edit['logo'];

    // Xử lý tải lên ảnh mới chỉ khi người dùng tải lên
    if (!empty($_FILES['image1']['name'])) {
        $productImg1 = $_FILES['image1']['name'];
        move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . "first-img/" . $productImg1);
    }

    if (!empty($_FILES['image2']['name'])) {
        $productImg2 = $_FILES['image2']['name'];
        move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . "second-img/" . $productImg2);
    }

    if (!empty($_FILES['image3']['name'])) {
        $productImg3 = $_FILES['image3']['name'];
        move_uploaded_file($_FILES["image3"]["tmp_name"], $target_dir . "third-img/" . $productImg3);
    }

    if (!empty($_FILES['image4']['name'])) {
        $productImg4 = $_FILES['image4']['name'];
        move_uploaded_file($_FILES["image4"]["tmp_name"], $target_dir . "fourth-img/" . $productImg4);
    }

    if (!empty($_FILES['image5']['name'])) {
        $productImg5 = $_FILES['image5']['name'];
        move_uploaded_file($_FILES["image5"]["tmp_name"], $target_dir . "fifth-img/" . $productImg5);
    }

    if (!empty($_FILES['icon']['name'])) {
        $productIcon = $_FILES['icon']['name'];
        move_uploaded_file($_FILES["icon"]["tmp_name"], $target_dir . "icon/" . $productIcon);
    }

    if (!empty($_FILES['logo']['name'])) {
        $productLogo = $_FILES['logo']['name'];
        move_uploaded_file($_FILES["logo"]["tmp_name"], $target_dir . "logo/" . $productLogo);
    }

    // Nếu người dùng không tải lên ảnh mới, giữ nguyên đường dẫn ảnh từ cơ sở dữ liệu
    if (empty($_FILES['image1']['name'])) {
        $productImg1 = $image_edit['first-img'];
    }

    if (empty($_FILES['image2']['name'])) {
        $productImg2 = $image_edit['second-img'];
    }

    if (empty($_FILES['image3']['name'])) {
        $productImg3 = $image_edit['third-img'];
    }

    if (empty($_FILES['image4']['name'])) {
        $productImg4 = $image_edit['fourth-img'];
    }

    if (empty($_FILES['image5']['name'])) {
        $productImg5 = $image_edit['fifth-img'];
    }

    if (empty($_FILES['icon']['name'])) {
        $productIcon = $image_edit['icon'];
    }

    if (empty($_FILES['logo']['name'])) {
        $productLogo = $image_edit['logo'];
    }
    // Xử lý và cập nhật thông tin sản phẩm trong cơ sở dữ liệu
    $sql = "UPDATE game 
    SET gamename = :gamename, 
        developer = :developer, 
        publisher = :publisher, 
        genreid = :genreid, 
        price = :price, 
        sale = :sale, 
        summary = :summary,
        `first-img` = :firstimg,
        `second-img` = :secondimg,
        `third-img` = :thirdimg,
        `fourth-img` = :fourthimg,
        `fifth-img` = :fifthimg,
        `icon` = :icon,
        `logo` = :logo
    WHERE gameid = :gameid";

    // Chuẩn bị và thực thi câu lệnh SQL
    $stmt = $conn->prepare($sql);
    $stmt->execute(
        array(
            ':gamename' => $gamename,
            ':developer' => $developer,
            ':publisher' => $publisher,
            ':genreid' => $genreid,
            ':price' => $price,
            ':sale' => $sale,
            ':summary' => $summary,
            ':firstimg' => $productImg1,
            ':secondimg' => $productImg2,
            ':thirdimg' => $productImg3,
            ':fourthimg' => $productImg4,
            ':fifthimg' => $productImg5,
            ':icon' => $productIcon,
            ':logo' => $productLogo,
            ':gameid' => $gameid
        )
    );

    // Kiểm tra kết quả và thông báo cho người dùng
    if ($stmt) {
        echo "<script>alert('Thông tin sản phẩm đã được cập nhật thành công!'); window.location.href = '?act=dashboard&pg=product_list';</script>";
    } else {
        echo "<script>alert('Có lỗi xảy ra khi cập nhật thông tin sản phẩm.');</script>";
    }
    
}
?>