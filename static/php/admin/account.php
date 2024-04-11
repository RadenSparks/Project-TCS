<?php
    $customer_html = '';
    $accountid = 1;
    foreach ($customer_list as $item) {
        extract($item);
        
        $linkEdit = '<a href="?act=dashboard&pg=editcustomer&accountid='.$accountid.'" class="btn btn-success">Edit</a>';
        $linkDelete = '<a href="?act=dashboard&pg=deletecustomer&accountid='.$accountid.'" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete this category?\')">Delete</a>';
        $customer_html .= '
            <tr>
                <td>'.$accountid.'</td>
                <td>'.$firstname.'</td>
                <td>'.$lastname.'</td>
                <td>'.$displayname.'</td>
                <td>'.$password.'</td>
                <td>'.$email.'</td>
                <td class="operation">
                    <div class="btn-container">
                        '.$linkEdit.'
                        '.$linkDelete.'
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="9">
                    <hr class="divider">
                </td>
                <!-- Sử dụng colspan để đảm bảo rằng hr sẽ có chiều rộng bằng bảng -->
            </tr>
        ';
        $accountid++;
    }
?>

<div class="main-content">
                            <Div class="on-cate">
                                <h3 class="title-page title-page-bottom-margin">Customer</h3>
                                <!-- <a href="page_product_list_add.html" class="btn btn-primary">Add Customer</a> -->
                            </Div>
                            <Div class="category-list">
                                <table class="each-list">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Display Name</th>
                                            <th>Password</th>
                                            <th>Email</th>
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
                                        <?=$customer_html?> 
                                    </tbody>
                                    
                                    <!-- <tbody>
                        
                                        <tr>
                                            <td>1</td>
                                            <td>Phuoc</td>
                                            <td>Le Minh</td>
                                            <td>Le Minh Phuoc</td>
                                            <td>123456	</td>
                                            <td>Vietnam</td>
                                            <td>ngocthanhnt04@gmail.com</td>
                                            <td class="operation">
                                                <div class="btn-container">
                                                    <a href="page_product_list_edit.php" class="btn btn-success">Edit</a>
                                                    <a href="delete_product.php" class="btn btn-danger">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                        
                        
                                        <tr></tr>
                                        <tr>
                                            <td colspan="9">
                                                <hr class="divider">
                                            </td>
                                             Sử dụng colspan để đảm bảo rằng hr sẽ có chiều rộng bằng bảng 
                                        </tr>
                        
                                        <tr>
                                            <td>2</td>
                                            <td>Leaf</td>
                                            <td>Koder</td>
                                            <td>Leaf Koder</td>
                                            <td>123456</td>
                                            <td>Vietnam</td>
                                            <td>ngocthanhnt04@gmail.com</td>
                                            <td class="operation">
                                                <div class="btn-container">
                                                    <a href="" class="btn btn-success">Edit</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                        
                        
                        
                                    </tbody> -->
                                </table>
                             
                            </Div>
                        
                        </div>
                        
                        </div>
                        <?php
