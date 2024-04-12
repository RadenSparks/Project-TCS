<!-- Thêm sản phẩm -->

<div class="main-content">
    <form method="post" action="?act=dashboard&pg=product_add" enctype="multipart/form-data">
            <h2>Add Product</h2>
            <div class="row">

                <div class="col-md-6">
                    <div>
                        <label class="form-label" for="productName">Name product</label>
                        <input class="form-control" type="text" name="gamename" id="productName">
                    </div>
                    <div>
                        <label class="form-label" for="productName">Id product</label>
                        <input class="form-control" type="text" name="gameid" id="gameid">
                    </div>
                    <div>
                        <label class="form-label" for="developer">developer</label>
                        <input class="form-control" type="text" name="developer" id="developer">
                    </div>
                    <div>
                        <label class="form-label" for="publisher">publisher</label>
                        <input class="form-control" type="text" name="publisher" id="publisher">
                    </div>
                    <div>
                        <label class="form-label" for="category">Genre</label>
                        <select class="form-select" name="genre" id="genre">
                            <option value="">Chọn thể loại</option>
                            <?php
                            $query = findAllGenre();
                            if ($query) {
                                foreach ($query as $row) {
                                    // Sử dụng dữ liệu từ $row để tạo các tùy chọn <option>
                            ?>
                                <option value="<?php echo $row['genreid']; ?>"><?php echo $row['genrename']; ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div>
                        <label class="form-label" for="price">Price</label>
                        <input class="form-control" type="number" name="price" id="price">
                    </div>
                    <div>
                        <label class="form-label" for="salePrice">Sale</label>
                        <input class="form-control" type="number" name="sale" id="salePrice" step="0.01">
                     </div>

                    <div>
                        <label class="form-label" for="description">Summary</label>
                        <textarea class="form-control" name="summary" id="description" cols="30" rows="10"></textarea>
                    </div>

                    
                </div>
                <div class="col-md-6">
                     <div>
                        <label class="form-label" for="image1">Image1</label>
                        <input class="form-control" type="file" name="image1" id="image1">
                    </div>
                    <div>
                        <label class="form-label" for="image2">Image2</label>
                        <input class="form-control" type="file" name="image2" id="image2">
                    </div>
                    <div>
                        <label class="form-label" for="image3">Image3</label>
                        <input class="form-control" type="file" name="image3" id="image3">
                    </div>
                    <div>
                        <label class="form-label" for="image4">Image4</label>
                        <input class="form-control" type="file" name="image4" id="image4">
                    </div>
                    <div>
                        <label class="form-label" for="image5">Image5</label>
                        <input class="form-control" type="file" name="image5" id="image5">
                    </div>

                    <div>
                        <label class="form-label" for="Icon">Icon</label>
                        <input class="form-control" type="file" name="icon" id="icon">
                    </div>
                    <div>
                        <label class="form-label" for="Logo">Logo</label>
                        <input class="form-control" type="file" name="logo" id="logo">
                    </div>

                </div>
                
            </div>
            <div class="text-right">
                <input type="submit" name="addProduct_submit" value="Add" class="btn-danger m-5">
            </div>
    </div>
</div>
</form> 
              



<?php
$conn = connectDb();

// Kiểm tra biểu mẫu đã được gửi chưa
if (isset($_POST['addProduct_submit'])) {
    // Kiểm tra xem các thông tin cần thiết đã được điền đầy đủ hay chưa
    if (!empty($_POST['gamename']) && !empty($_POST['gameid']) && !empty($_POST['genre']) && !empty($_POST['price']) && !empty($_POST['summary']) 
    && !empty($_POST['developer']) && !empty($_POST['publisher'])) {
        $productName = $_POST['gamename'];
        $productId = $_POST['gameid'];
        $productGenre = $_POST['genre'];
        $productPrice = $_POST['price'];
        $productSale = isset($_POST['sale']) ? $_POST['sale'] : null;
        $productSummary = $_POST['summary'];
        $productDeve = $_POST['developer'];
        $productPub = $_POST['publisher'];

        
        $uploadSuccess = true;  // Biến kiểm tra xem tất cả các ảnh đã được tải lên thành công hay chưa
        
        // Gán giá trị mặc định cho ảnh 4 và 5
        $productImg4Path = '';  
        $productImg5Path = '';  

        $productImg1Path = $_FILES['image1']['name'];
        $productImg2Path =  $_FILES['image2']['name'];
        $productImg3Path = $_FILES['image3']['name'];
        $productIconPath =  $_FILES['icon']['name'];
        $productLogoPath = $_FILES['logo']['name'];

        $target_dir = "./img/"; 

       // Di chuyển file tải lên vào thư mục lưu trữ và kiểm tra kết quả
        if (!empty($_FILES['image1']['name'])) {
        $productImg1 = $_FILES['image1']['name'];
        move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir  . "first-img/" . $productImg1);
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
        
        // Kiểm tra xem ảnh 4 và 5 đã được chọn hay chưa
        if ($_FILES['image4']['error'] === UPLOAD_ERR_OK && $_FILES['image5']['error'] === UPLOAD_ERR_OK) {
            // Nếu cả ảnh 4 và 5 đều được chọn, thêm vào cơ sở dữ liệu
            if ($uploadSuccess) {
                addProduct($productName, $productId, $productGenre, $productPrice, $productSale, 
                $productSummary, $productImg1Path, $productImg2Path, $productImg3Path, $productImg4Path, $productImg5Path, 
                $productIconPath, $productLogoPath, $productDeve, $productPub, $conn);
                echo "<script>alert('Thêm thành công'); window.location.href = '?act=dashboard&pg=product_list';</script>";
            } else {
                // Nếu có lỗi khi tải lên ảnh, thông báo cho người dùng
                echo "<script>alert('Có lỗi khi tải lên ảnh, vui lòng thử lại');</script>";
            }
        } else {
            // Nếu ảnh 4 và 5 không được chọn, thêm vào cơ sở dữ liệu (không có ảnh 4, 5)
            addProduct($productName, $productId, $productGenre, $productPrice, $productSale, 
            $productSummary, $productImg1Path, $productImg2Path, $productImg3Path, '', '', 
            $productIconPath, $productLogoPath, $productDeve, $productPub, $conn);
            echo "<script>alert('Thêm thành công (không có ảnh 4, 5)'); window.location.href = '?act=dashboard&pg=product_list';</script>";
        }
    } else {
        // Nếu thiếu thông tin cần thiết, thông báo cho người dùng
        echo "<script>alert('Vui lòng điền đầy đủ thông tin');</script>";
    }

    $conn = null;
}
?>
