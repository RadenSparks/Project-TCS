<?php
session_start();
ob_start();
include_once "./static/model/connectdb.php";
include_once "./static/model/connectdb.php";
include_once "./static/php/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'browse':
            include_once "./static/php/browse.php";
            break;
        case 'addcart':
            if (!isset($_SESSION['giohang'])) {
                $_SESSION['giohang'] = [];
                echo 'Lọt vào';
            } else {
                echo 'Khong Lọt vào';
            }
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $id = $_POST['id'];
                $image = $_POST['image'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                echo '<h2 style="background: white; color: red;"  >' . $name . '</h2>';


                if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
                    echo '<h1 style="background: red; color: blue;">' . $price . '</h1>';
                } else {
                    echo 'Connection failed';
                }
                
            }

            echo '<h1 style="background: white; color: black">Hello</h1>';
            break;
        case 'detail': 
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                
            }
            break;
        default:
            include_once "./static/php/home.php";
    }
} else {
    include_once "./static/php/home.php";
}

include_once "./static/php/footer.php";
