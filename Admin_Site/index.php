<?php
session_start();
include_once "./model/conndb.php";
include_once "view/header.php";
// include_once './model/category.php';
include_once './model/product.php';
if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {
        case 'database':
            include_once 'view/main.php';
            break;
        case 'order_management':
            include_once 'view/order_management.php';
            break;
        // case 'category_list':
        //     $category_list = finAllCategory();
        //     include_once 'view/category_list.php';
        //     break;
        case 'account':
            include_once 'view/account.php';
            break;
        case 'product_list':
            include_once 'view/product.php';

            break;
        case 'product_add':
            $genre_list = findAllGenre();
            include_once 'view/product_add.php';
            break;
        case 'product_edit':
            include_once 'view/product_edit.php';
            break;

        default:
            // Xử lý trường hợp không khớp với bất kỳ case nào (nếu cần)
            include_once 'view/main.php';
            break;
    }
} else {
    // Xử lý khi $_GET['pg'] không tồn tại
    include_once 'view/main.php';
}
