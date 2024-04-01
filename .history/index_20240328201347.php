<?php
session_start();
ob_start();
include_once "./static/model/connectdb.php";
include_once "./static/model/product.php";
include_once "./static/model/detail.php";
include_once "./static/model/account.php";
$includeHeaderFooter = true;

if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'signin':
            $includeHeaderFooter = false;
            include_once "./static/php/sign_in.php";
            break;
        case 'login': 
            
    }
}


if ($includeHeaderFooter) {
    include_once "./static/php/header.php";
}
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
                $publisher = $_POST['publisher'];
                $flag = 0;
                echo '<h2 style="background: white; color: red;"  >' . $name . '</h2>';


                if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
                    echo '<h1 style="background: red; color: blue;">' . $price . '</h1>';
                    $cart = $_SESSION['giohang'];
                    echo var_dump($cart);
                    foreach ($cart as $index => $item) {
                        echo '<h1 style="background: green">' . $item[0] . '</h1>';
                    }
                } else {
                    echo 'Connection failed';
                }

                if ($flag == 0) {
                    $sp = array($id, $image, $name, $price, $publisher);
                    $_SESSION['giohang'][] = $sp;
                    echo 'Có giỏ hàng';
                } else {
                    echo ' KO Có giỏ hàng';
                }
            }
            $cart = $_SESSION['giohang'];
            echo var_dump($cart);

            echo '<h1 style="background: white; color: black">Hello</h1>';
            include_once "./static/php/cart.php";
            break;
        case 'detail':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $data1 = detail($id);
                // echo var_dump($data1);
                include_once "./static/php/detail.php";
            }
            break;
        case 'login':
            // echo 'Hello';
            $data = account();
            if (isset($_POST['submit']) && $_POST['submit']) {

                $email = $_POST['email'];
                // echo '<h1>'.$email.'</h1>';
                $password = $_POST['password'];
                foreach ($data as $index => $item) {
                    //    echo '<h1>'.$item['email'].'</h1>';
                    if ($email == $item['email']) {
                        if ($password == $item['password']) {
                            include_once "./static/php/home.php";
                        } else {
                            $includeHeaderFooter = false;
                            include_once "./static/php/sign_in.php";
                        }
                    }
                  
                }
            }
            break;
        case 'signin':
            $includeHeaderFooter = false;
            include_once "./static/php/sign_in.php";
            // header("location: ./static/php/sign_in.php");
            break;




        default:
            include_once "./static/php/home.php";
    }
} else {
    include_once "./static/php/home.php";
}
if ($includeHeaderFooter) {

    include_once "./static/php/footer.php";
}
