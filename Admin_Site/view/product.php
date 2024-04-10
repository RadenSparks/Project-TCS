<?php
// Xử lý xoá sản phẩm
if (isset($_GET['delete']) && $_GET['delete'] === 'true' && isset($_GET['gameid'])) {
    $gameid = $_GET['gameid'];
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    product_delete($gameid);
    // Chuyển hướng trang đến trang danh sách sản phẩm với tham số page tương ứng
    header('Location: ?pg=product_list&per_page=' . $item_per_page . '&page=' . $currentPage);
    exit;
}
?>

<div class="main-content">
    <Div class="on-cate">
        <h2 class="title-page title-page-bottom-margin">Product</h2>
        <a href="?pg=product_add" class="btn btn-primary">Add Products</a>
    </Div>
    <Div class="category-list">
        <table class="each-list">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Sale</th>
                    <th>Price</th>
                    <th>Genreid</th>
                    <th>Image</th>
                    <th>Developer</th>
                    <th>Publisher</th>

                    <th>Status</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <!-- chia gạch ngang -->
            <tr></tr>
            <tr>
                <td colspan="9">
                    <hr class="divider">
                </td>
                <!-- Sử dụng colspan để đảm bảo rằng hr sẽ có chiều rộng bằng bảng -->
            </tr>
            <tbody>
                <?php
                $item_per_page = 8;
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

                // Lấy dữ liệu sản phẩm và tổng số trang
                $data = findAllProduct($item_per_page, $current_page);
                $products = $data['products'];
                $totalRecords = $data['totalRecords'];

                // var_dump($totalRecords);exit;
                $totalPage = ceil($totalRecords / $item_per_page);


                
                // Kiểm tra và hiển thị sản phẩm
                if ($products) {
                    // Khởi tạo biến số thứ tự
                    $start_index = ($current_page - 1) * $item_per_page + 1;
                    
                    foreach ($products as $row) {
                ?>
                        <tr>
                            <td><?php echo $start_index++; ?></td>
                            <td><?php echo $row['gamename']; ?></td>
                            <td><?php echo $row['sale']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['genreid']; ?></td>
                            <td><img src="<?php echo "/img/first-img/game" . $row['gameid'] . ".jpg"; ?>"></td>
                            <td><?php echo $row['developer']; ?></td>
                            <td><?php echo $row['publisher']; ?></td>
                            <td><?php echo $row['tag']; ?></td>
                            <td class="operation">
                                <div class="btn-container">
                                    <a href="?pg=product_edit&gameid=<?php echo $row['gameid']; ?>" class="btn btn-primary">Edit</a>
                                    <a href="?pg=product_list&delete=true&gameid=<?php echo $row['gameid']; ?>" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                <?php
                    }
                }

                if (isset($_GET['delete']) && $_GET['delete'] === 'true' && isset($_GET['gameid'])) {
                    $gameid = $_GET['gameid'];
                    product_delete($gameid);
                    // Lấy giá trị của tham số page hiện tại
                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                    // Chuyển hướng trang đến trang danh sách sản phẩm với tham số page tương ứng
                    header('Location: ?pg=product_list&per_page=' . $item_per_page . '&page=' . $currentPage);
                }

                ?>
                    <tr>
                        <td colspan="10">
                            <div class="pagination-container">
                                <div class="pagination">
                                    <?php
                                    // Hiển thị các nút phân trang
                                    for ($page = 1; $page <= $totalPage; $page++) {
                                        // Tạo URL cho từng trang
                                        $url = "?pg=product_list&per_page=$item_per_page&page=$page";
                                        // Hiển thị nút phân trang và tạo liên kết tới từng trang
                                        echo "<a href='$url' class='btn btn-page'>$page</a>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>


                    
        </Div>

</div>

