<?php
session_start();
ob_start();
include_once "./static/model/connectdb.php";
include_once "./static/model/product.php";
include_once "./static/model/detail.php";
include_once "./static/model/account.php";
include_once "./static/model/query.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
} else {
    $act = "home";
}

$conn = openConnection();

$loggedIn = false;
if (isset($_SESSION['email'])) {
    $account = getAccountByEmail($conn, $_SESSION['email']);
    if ($account != null) {
        $loggedIn = true;
    }    
}

if($loggedIn && $account['isadmin'] && $act != 'dashboard' && $act != 'accountsetting'){
    header('Location: /Project-TCS/index.php?act=dashboard&entity=game&page=1');
    exit;
}

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
            header('Location: /Project-TCS/index.php?act=browse&page=1&keyword=&genre=&price=&sort=gamename,asc');
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

    case 'detail':
        include_once "./static/php/header.php";

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $gameDetail = detail($id);
            include_once "./static/php/detail.php";
        }
        include_once "./static/php/footer.php";
        break;
    case 'signin':
        if ($loggedIn) {
            header('Location: /Project-TCS/index.php');
            exit;
        }
        include_once "./static/php/sign_in.php";
        break;
    case 'register':
        if ($loggedIn) {
            header('Location: /Project-TCS/index.php');
            exit;
        }
        include_once "./static/php/register.php";
        break;
    case 'accountsetting':
        if (!$loggedIn) {
            header('Location: /Project-TCS/index.php');
            exit;
        }
        include_once "./static/php/header.php";
        echo '<script>const nav = document.querySelector(".sub-navbar_main_desktop__19-YT").style.display = "none"</script>';
        include_once "./static/php/accountAside.php";
        include_once "./static/php/accountsetting.php";
        break;
    case 'transaction':
        if (!$loggedIn) {
            header('Location: /Project-TCS/index.php');
            exit;
        }
        include_once "./static/php/header.php";
        echo '<script>const nav = document.querySelector(".sub-navbar_main_desktop__19-YT").style.display = "none"</script>';
        include_once "./static/php/accountAside.php";
        include_once "./static/php/transactions.php";
        include_once "./static/php/footer.php";
        break;

    case 'dashboard':
        include_once "./static/model/query.php";
        if (!$loggedIn || !$account['isadmin']) {
            header('Location: /Project-TCS/index.php');
            exit;
        }

        if (!isset($_GET['page'])) {
            $page = "1";
        } else {
            $page = $_GET['page'];
        }

        if (!isset($_GET['entity'])) {
            $entity = "game";
        } else {
            $entity = $_GET['entity'];
        }
        switch ($entity) {
            case 'game':
                include_once "./static/php/dashboard/gameDashboard.php";
                break;

            case 'account':
                include_once "./static/php/dashboard/accountDashboard.php";
                break;

            case 'genre':
                include_once "./static/php/dashboard/genreDashboard.php";
                break;

            default:
                include_once "./static/php/dashboard/gameDashboard.php";
                break;
        }

        break;

    default:
        include_once "./static/php/header.php";
        include_once "./static/php/home.php";
        include_once "./static/php/footer.php";
        break;
}
