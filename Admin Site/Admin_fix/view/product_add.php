<!-- Thêm sản phẩm -->

<div class="main-content">
    <form method="post" action="?pg=product_add" enctype="multipart/form-data">
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

                    <div>   
                        <label class="form-label" for="status">Status</label>
                        <select class="form-select" name="status" id="status">
                            <option value="Đang hoạt động">Active</option>
                            <option value="Tạm ngưng">Inactive</option>
                        </select>
                    </div>
                </div>
                
            </div>
            <div class="text-right">
                <input type="submit" name="addProduct_submit" value="Add" class="btn-danger m-5">
            </div>
    </div>
</div>

                <?php
                $conn = conndb();

                // Kiểm tra xem biểu mẫu đã được gửi chưa
                if (isset($_POST['addProduct_submit'])) {
                    $productName = $_POST['gamename'];
                    $productId = $_POST['gameid'];
                    $productGenre = $_POST['genre'];
                    $productPrice = $_POST['price'];
                    $productSale = isset($_POST['sale']) ? $_POST['sale'] : null;
                    $productSummary = $_POST['summary'];
                    $productDeve = $_POST['developer'];
                    $productPub = $_POST['publisher'];

                    // Xử lý tải lên ảnh
                    $uploadI1 = './img/first-img/';
                    $productImg1 = $_FILES['image1']['name'];
                    if($productImg1){
                        move_uploaded_file($_FILES['image1']['tmp_name'], $uploadI1 . $productImg1);
                    }
                    $productImg2 = isset($_FILES['image2']['name']) ? $_FILES['image2']['name'] : null;
                    $productImg3 = isset($_FILES['image3']['name']) ? $_FILES['image3']['name'] : null;
                    $productImg4 = isset($_FILES['image4']['name']) ? $_FILES['image4']['name'] : null;
                    $productImg5 = isset($_FILES['image5']['name']) ? $_FILES['image5']['name'] : null;
                    $productIcon = isset($_FILES['icon']['name']) ? $_FILES['icon']['name'] : null;
                    $productLogo = isset($_FILES['logo']['name']) ? $_FILES['logo']['name'] : null;

                    addProduct($productName, $productId, $productGenre, $productPrice, $productSale, 
                    $productSummary, $productImg1, $productImg2, $productImg3, $productImg4, $productImg5, 
                    $productIcon, $productLogo, $productDeve, $productPub, $conn);
                    $conn = null;
                }
                ?>


