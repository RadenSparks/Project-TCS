<div class="main-content">
                <div class="on-cate">
                    <h3 class="title-page title-page-bottom-margin">Order</h3>
                </div>
                <div class="category-list">
                    <table class="each-list">
                        <thead>
                            <tr>
                                <th>Cart id</th>
                                <th>Account id</th>
                                <th>Pruchasedate</th>
                                <th>Status</th>
                                <th>Payment method</th>
                                <th>Total price</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <!-- chia gạch ngang -->
                        <tr>
                            <td colspan="7">
                                <hr class="divider">
                            </td>
                            <!-- Sử dụng colspan để đảm bảo rằng hr sẽ có chiều rộng bằng bảng -->
                        </tr>
                        <tbody>
                <?php foreach($orders as $order): ?>
                    <tr>
                        <td><?php echo $order['cartid']; ?></td>
                        <td><?php echo $order['accountid']; ?></td>
                        <td><?php echo $order['purchasedate']; ?></td>
                        <td><?php echo $order['status']; ?></td>
                        <td><?php echo $order['paymentmethod']; ?></td>
                        <td><?php echo $order['totalprice']; ?></td>
                        <td class="operation">
                            <div class="btn-container">
                            <a href="?pg=order_edit&id=<?php echo $order['cartid']; ?>" class="btn btn-primary">Edit</a>
                                <a href="?pg=delete_order&id=<?php echo $order['cartid']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this order?')">Delete</a>

                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>