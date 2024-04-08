<div class="main-content">
    <div>

         <form method="post" action="?pg=product_edit" enctype="multipart/form-data">
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
                        <input class="form-control" type="number" name="price" id="price" value="<?php echo isset($product_edit['price']) ? $product_edit['price'] : ''; ?>">
                    </div>
                    <div>
                        <label class="form-label" for="salePrice">Sale</label>
                        <input class="form-control" type="number" name="sale" id="salePrice" step="0.01" value="<?php echo isset($product_edit['sale']) ? $product_edit['sale'] : ''; ?>">
                    </div>

                    <div>
                        <label class="form-label" for="description">Summary</label>
                        <textarea class="form-control" name="summary" id="description" cols="30" rows="10"><?php echo isset($product_edit['summary']) ? $product_edit['summary'] : ''; ?></textarea>
                    </div>

                </div>
                <div class="col-md-6">
                     <div>
                        <label class="form-label" for="image1">Image1</label>
                        <input class="form-control" type="file" name="image1" id="image1" value="<?php echo isset($product_edit['img1']) ? $product_edit['img1'] : ''; ?>">

                    </div>
                    <div>
                        <label class="form-label" for="image2">Image2</label>
                        <input class="form-control" type="file" name="image1" id="image2" value="<?php echo isset($product_edit['img2']) ? $product_edit['img2'] : ''; ?>">

                    </div>
                    <div>
                        <label class="form-label" for="image3">Image3</label>
                        <input class="form-control" type="file" name="image1" id="image3" value="<?php echo isset($product_edit['img3']) ? $product_edit['img3'] : ''; ?>">

                    </div>
                    <div>
                        <label class="form-label" for="image4">Image4</label>
                        <input class="form-control" type="file" name="image1" id="image4" value="<?php echo isset($product_edit['img4']) ? $product_edit['img4'] : ''; ?>">

                    </div>
                    <div>
                        <label class="form-label" for="image5">Image5</label>
                        <input class="form-control" type="file" name="image1" id="image5" value="<?php echo isset($product_edit['img5']) ? $product_edit['img5'] : ''; ?>">

                    </div>

                    <div>
                        <label class="form-label" for="Icon">Icon</label>
                        <input class="form-control" type="file" name="image1" id="icon" value="<?php echo isset($product_edit['icon']) ? $product_edit['icon'] : ''; ?>">

                    </div>
                    <div>
                        <label class="form-label" for="Logo">Logo</label>
                        <input class="form-control" type="file" name="image1" id="lgo" value="<?php echo isset($product_edit['logo']) ? $product_edit['logo'] : ''; ?>">

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
                <input type="submit" name="editProduct_submit" value="Edit" class="btn-danger m-5">
            </div>
        </form>
    </div>
</div>