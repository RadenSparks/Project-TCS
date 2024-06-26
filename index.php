<?php
session_start();
ob_start();
include_once "./static/model/connectdb.php";
include_once "./static/model/product.php";
include_once "./static/model/detail.php";
include_once "./static/model/account.php";




if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'browse':
            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }

            if (!isset($_GET['keyword'])) {
                $keyword = "";
            } else {
                $keyword = $_GET['keyword'];
            }

            if (!isset($_GET['genre'])) {
                $genre = "";
            } else {
                $genre = $_GET['genre'];
            }

            if (!isset($_GET['price'])) {
                $price = "";
            } else {
                $price = $_GET['price'];
            }

            if (!isset($_GET['sort'])) {
                $sort = "gamename,asc";
                header('Location: /Project-TCS/?act=browse&page=1&keyword=&genre=&price=&sort=gamename,asc');
            } else {
                $sort = $_GET['sort'];
            }



            include_once "./static/php/header.php";
            include_once "./static/php/games.php";
            include_once "./static/php/footer.php";
            break;

        case 'cart':
            include_once "./static/php/header.php";
            include_once "./static/php/cart.php";
            include_once "./static/php/footer.php";
            break;

        case 'wishlist':
            include_once "./static/php/header.php";
            include_once "./static/php/wishlist.php";
            include_once "./static/php/footer.php";
            break;

        case 'addcart':
            include_once "./static/php/header.php";

            if (!isset($_SESSION['giohang'])) {
                $_SESSION['giohang'] = [];
                echo 'Lọt vào';
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
            include_once "./static/php/footer.php";

            break;
        case 'detail':
            include_once "./static/php/header.php";

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $gameDetail = detail($id);
                // echo var_dump($data1);
                include_once "./static/php/detail.php";
            }
            include_once "./static/php/footer.php";

            break;


        case 'login':
            include_once "./static/php/header.php";

            // echo 'Hello';
            $includeHeaderFooter = false;
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
                            include_once "./static/php/sign_in.php";
                            $includeHeaderFooter = false;
                        }
                    }
                }
            }
            include_once "./static/php/footer.php";

            break;
        case 'signin':
            include_once "./static/php/sign_in.php";
            break;
        case 'register':
            include_once "./static/php/register.php";
            break;
        case 'accountsetting':
            include_once "./static/php/header.php";
            echo '<script>const nav = document.querySelector(".sub-navbar_main_desktop__19-YT").style.display = "none"</script>';
            include_once "./static/php/accountAside.php";
            include_once "./static/php/accountsetting.php";
            // include_once "./static/php/footer.php";
            break;
        case 'transaction':
            include_once "./static/php/header.php";
            echo '<script>const nav = document.querySelector(".sub-navbar_main_desktop__19-YT").style.display = "none"</script>';
            include_once "./static/php/accountAside.php";
            include_once "./static/php/transactions.php";
            include_once "./static/php/footer.php";
            break;

        default:
            include_once "./static/php/header.php";
            include_once "./static/php/home.php";
            include_once "./static/php/footer.php";
            break;
    }
} else {
    include_once "./static/php/header.php";
    include_once "./static/php/home.php";
    include_once "./static/php/footer.php";
}
