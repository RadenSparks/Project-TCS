<?php
    session_start();
    if (isset($_SESSION['cookieEmail']) && isset($_SESSION['cookiePass'])) {
        $expire = time()+60*60*24*30;
        setcookie("email", $_SESSION['cookieEmail'], $expire);
        setcookie("password", $_SESSION['cookiePass'], $expire);
    }

    $conn = mysqli_connect('localhost', 'root', '', 'db_epicgames') or die('Connection error!');
    mysqli_query($conn, "SET NAMES 'utf8'");
    require 'site.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://static-assets-prod.epicgames.com/epic-store/static/webpack/../favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/cart.css">
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
    <title>Cart</title>
</head>
<body>  
    <!-- Header -->
    <?php
        load_header();
        load_loader();
        
    ?>
    <div id="main">
        <div class="container px-5">
            <div class="cart">
                <h4 class="cart__title">My Wishlist</h4>
                <div class="row cart__content">
                    <div class="col-8">
                        <?php
                            if (isset($_SESSION['email'])) {
                                // Display cart
                                $email = $_SESSION['email'];
                                $checkWishlist = mysqli_query($conn, "SELECT * FROM wishlist w JOIN game g ON w.gameid = g.gameid WHERE email = '$email'") or die(mysqli_error($conn));
                                $totalprice = 0;
                                $totalsale = 0;
                                if ($row = mysqli_fetch_array($checkWishlist)) {
                                    do {
                                        $gameid = $row['gameid'];
                                        $gameDetail = mysqli_query($conn, "SELECT * FROM game WHERE gameid = '$gameid'") or die(mysqli_error($conn));
                                        $info = mysqli_fetch_array($gameDetail);
                                        do { 
                                            $name = $info['gamename'];
                                            $icon = $info['icon'];
                                            $sale = $info['sale']*100;
                                            $salePrice = $info['saleprice'];
                                            $price = $info['price'];
                                            // Calculate total price
                                            $totalprice += $price;
                                            if ($sale != 0) {
                                                $totalsale += $price*$sale/100;
                                            }
                                        } while ($info = mysqli_fetch_array($gameDetail));
                                        if ($price == 0) {
                                            echo '
                                                <div class="card mb-3 cart-card">
                                                    <div class="row g-0">
                                                        <div class="col-md-2">
                                                            <img src="'.$icon.'" class="img-fluid rounded-start cart-card__img" alt="...">
                                                        </div>
                                                        <div class="col-md-10 cart-card__detail">
                                                            <div class="card-body">
                                                                <div class="cart-card__header">
                                                                    <span class="card-title cart-card__title">Base Game</span>
                                                                    <div class="cart-card__price">
                                                                        <span class="cart-card__lastcost">Free</span>
                                                                    </div>
                                                                </div>
                                                                <a href="/Project-TCS/index.php?site=details&id='.$gameid.'" class="card-text cart-card__name">'.$name.'</a>
                                                                <a href="/Project-TCS/assets/php/removeWishlist.php?id='.$gameid.'" class="card-text cart-card__remove">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ';
                                        } else if ($sale == 0) {
                                            echo '
                                                <div class="card mb-3 cart-card">
                                                    <div class="row g-0">
                                                        <div class="col-md-2">
                                                            <img src="'.$icon.'" class="img-fluid rounded-start cart-card__img" alt="...">
                                                        </div>
                                                        <div class="col-md-10 cart-card__detail">
                                                            <div class="card-body">
                                                                <div class="cart-card__header">
                                                                    <span class="card-title cart-card__title">Base Game</span>
                                                                    <div class="cart-card__price">
                                                                        <span class="cart-card__lastcost">đ'.number_format($price).'</span>
                                                                    </div>
                                                                </div>
                                                                <a href="/Project-TCS/index.php?site=details&id='.$gameid.'" class="card-text cart-card__name">'.$name.'</a>
                                                                <a href="/Project-TCS/assets/php/removeWishlist.php?id='.$gameid.'" class="card-text cart-card__remove">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ';
                                        } else {
                                            echo '
                                                <div class="card mb-3 cart-card">
                                                    <div class="row g-0">
                                                        <div class="col-md-2">
                                                            <img src="'.$icon.'" class="img-fluid rounded-start cart-card__img" alt="...">
                                                        </div>
                                                        <div class="col-md-10 cart-card__detail">
                                                            <div class="card-body">
                                                                <div class="cart-card__header">
                                                                    <span class="card-title cart-card__title">Base Game</span>
                                                                    <div class="cart-card__price">
                                                                        <span class="cart-card__sale">-'.$sale.'%</span>
                                                                        <span class="cart-card__cost">đ'.number_format($price).'</span>
                                                                        <span class="cart-card__lastcost">đ'.number_format($salePrice).'</span>
                                                                    </div>
                                                                </div>
                                                                <a href="/Project-TCS/index.php?site=details&id='.$gameid.'" class="card-text cart-card__name">'.$name.'</a>
                                                                <a href="/Project-TCS/assets/php/removeWishlist.php?id='.$gameid.'" class="card-text cart-card__remove">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ';
                                        }
                                    } while ($row = mysqli_fetch_array($checkWishlist));
                                } else {
                                    echo '
                                        <div class="cart__content cart__content--NOGAME">
                                            <span class="cart__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg css-uwwqev" viewBox="0 0 45 52"><g fill="none" fill-rule="evenodd"><path d="M4.058 0C1.094 0 0 1.098 0 4.075v35.922c0 .338.013.65.043.94.068.65-.043 1.934 2.285 2.96 1.553.683 7.62 3.208 18.203 7.573 1.024.428 1.313.529 2.081.529.685.013 1.137-.099 2.072-.53 10.59-4.227 16.66-6.752 18.213-7.573 2.327-1.23 2.097-3.561 2.097-3.899V4.075C44.994 1.098 44.13 0 41.166 0H4.058z" fill="currentColor"></path><path stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M14 18l4.91 2.545-2.455 4M25.544 28.705c-1.056-.131-1.806-.14-2.25-.025-.444.115-1.209.514-2.294 1.197M29.09 21.727L25 19.5l2.045-3.5"></path></g></svg>
                                            </span>
                                            <h4 class="cart__desc">Your wishlist is empty</h4>
                                            <a href="index.php?site=products&page=1" class="cart__link">Shop for Game</a>
                                        </div>
                                    ';
                                }
                                $total = $totalprice - $totalsale;
                            } else {
                                echo '<script>window.location = "/Project-TCS/index.php?site=login"</script>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        load_footer();
    ?>
</body>
<script src="assets/js/loader.js" defer></script>
</html>