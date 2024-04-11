<div class="main-content">
    <Div class="on-cate">
        <h3 class="title-page title-page-bottom-margin">Category</h3>
        <a href="?act=dashboard&pg=category_add" class="btn btn-primary">Add Category</a>
    </Div>
    <Div class="category-list">
        <table class="each-list">
        <tr>
                    <th>#</th>
                    <th>Genre name</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tr></tr>
            <tr>
                <td colspan="9">
                    <hr class="divider">
                </td>
                <!-- Sử dụng colspan để đảm bảo rằng hr sẽ có chiều rộng bằng bảng -->
            </tr>
            <tbody>
                <?php
                $query = findAllCategory();
                if ($query) {
                    $i = 1;
                    // Duyệt qua từng danh mục và hiển thị thông tin
                    foreach ($query as $row) {
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <!-- Sử dụng $row['genrename'] để lấy giá trị của cột 'genrename' -->
                            <td><?php echo $row['genrename']; ?></td>                            
                            <td class="operation">
                                <div class="btn-container">
                                    <a href="?act=dashboard&pg=category_edit&id=<?php echo $row['genreid']; ?>" class="btn btn-success">Edit</a>
                                    <a href="?act=dashboard&pg=delete_category&id=<?php echo $row['genreid']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <hr class="divider">
                            </td>
                            <!-- Sử dụng colspan để đảm bảo rằng hr sẽ có chiều rộng bằng bảng -->
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </Div>
</div>