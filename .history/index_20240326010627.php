<?php
session_start();
ob_start();
include_once "./static/php/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'browse':
            include_once "./static/php/browse.php";
            break;
        case 'addcart':
            if(!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            if(isset($_SESSION['cart']) && count($_SESSION['cart'])) {
                $id = $_POST['id'];
                $image = $_POST['image'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                echo '<h1 style="background: "red";">'.$image.'</h1>';
            }
            break;
        default:
            include_once "./static/php/home.php";
    }
} else {
    include_once "./static/php/home.php";
}

include_once "./static/php/footer.php";
