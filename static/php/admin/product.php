    <?php
    // Xử lý xoá sản phẩm
    if (isset($_GET['delete']) && $_GET['delete'] === 'true' && isset($_GET['gameid'])) {
        $gameid = $_GET['gameid'];
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        product_delete($gameid);
        // Chuyển hướng trang đến trang danh sách sản phẩm với tham số page tương ứng
        header('Location: ?act=dashboard&pg=product_list&per_page=' . $item_per_page . '&page=' . $currentPage);
        exit;
    }
    ?>
            <form method="post" action="?act=dashboard&pg=product_edit" enctype="multipart/form-data">
    <div class="main-content">
        <Div class="on-cate">
            <h2 class="title-page title-page-bottom-margin">Product</h2>
            <a href="?act=dashboard&pg=product_add" class="btn btn-primary">Add Products</a>
        </Div>
        <Div class="category-list">
            <table class="each-list">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Sale</th>
                        <th>Price</th>
                        <th>Genreid</th>
                        <th>Image</th>
                        <th>Developer</th>
                        <th>Publisher</th>

                        <th>Tag</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <!-- chia gạch ngang -->
                <tr></tr>
                <tr>
                    <td colspan="10">
                        <hr class="divider">
                    </td>
                    <!-- Sử dụng colspan để đảm bảo rằng hr sẽ có chiều rộng bằng bảng -->
                </tr>
                <tbody>
                <?php
                    $item_per_page = 8;
                    $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;

                    // Lấy dữ liệu sản phẩm và tổng số trang
                    $data = findAllProduct($item_per_page, $current_page);
                    $products = $data['products'];
                    $totalRecords = $data['totalRecords'];

                    // var_dump($totalRecords);exit;
                    $totalPage = ceil($totalRecords / $item_per_page);

                    // Kiểm tra và hiển thị sản phẩm
                    if ($products) {
                        foreach ($products as $row) {
                            $gameid = $row['gameid'];
                            // Gọi hàm gameIdCount để kiểm tra sự tồn tại của gameid
                            $count = gameIdCount($gameid);

                            // Hiển thị sản phẩm nếu gameid tồn tại
                            if ($count > 0) {
                                echo "<tr>";
                                echo "<td>" . $gameid . "</td>";
                                echo "<td>" . $row['gamename'] . "</td>";
                                echo "<td>" . $row['sale'] . "</td>";
                                echo "<td>" . $row['price'] . "</td>";
                                echo "<td>" . $row['genreid'] . "</td>";
                                echo "<td><img src='./static/img/first-img/" . $row['first-img'] . "'></td>";
                                echo "<td>" . $row['developer'] . "</td>";
                                echo "<td>" . $row['publisher'] . "</td>";
                                echo "<td>" . $row['tag'] . "</td>";
                                echo "<td class='operation'>";
                                echo "<div class='btn-container'>";
                                echo "<a href='?act=dashboard&pg=product_edit&gameid=" . $row['gameid'] . "' class='btn btn-primary'>Edit</a>";
                                echo "<a href='?act=dashboard&pg=product_list&delete=true&gameid=" . $row['gameid'] . "' class='btn btn-danger' onclick=\"return confirm('Are you sure you want to delete this category?')\">Delete</a>";
                                echo "</div>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        }
                    }


                    if (isset($_GET['delete']) && $_GET['delete'] === 'true' && isset($_GET['gameid'])) {
                        $gameid = $_GET['gameid'];
                        product_delete($gameid);
                        // Lấy giá trị của tham số page hiện tại
                        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                        // Chuyển hướng trang đến trang danh sách sản phẩm với tham số page tương ứng
                        header('Location: ?act=dashboard&pg=product_list&per_page=' . $item_per_page . '&page=' . $currentPage);
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
                                            $url = "?act=dashboard&pg=product_list&per_page=$item_per_page&page=$page";
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

