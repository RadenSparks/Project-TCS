<!DOCTYPE html>
<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'db_epicgames') or die('Connection error!');

mysqli_query($conn, "SET NAMES 'utf8'");
require 'site.php';

// Find name to set title
if (isset($_GET['id'])) {
    $gameid = $_GET['id'];
    $searchName = mysqli_query($conn, "SELECT gamename FROM game WHERE gameid = '$gameid'");                  
    if ($row = mysqli_fetch_array($searchName)) {
        $gameName = $row['gamename'];
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://static-assets-prod.epicgames.com/epic-store/static/webpack/../favicon.ico"
        type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/detail.css">
    <link rel="stylesheet" href="assets/css/payment.css">
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
    <script src="assets/js/loader.js" defer></script>
    <?php
    echo '
            <title>' . $gameName . '</title>
        ';
    ?>
</head>

<body>
    <!-- Header -->
    <?php
    load_header();
    load_loader();
    ?>
    <div id="main">
        <div class="container px-5 game-detail">
            <div class="game-detail">
                <?php
                if (isset($_GET['id'])) {
                    $gameid = $_GET['id'];
                    $gameDetail = mysqli_query($conn, "SELECT * FROM game WHERE gameid = '$gameid'");
                    if ($row = mysqli_fetch_array($gameDetail)) {
                        $name = $row['gamename'];
                        $firstimg = $row['first-img'];
                        $secondimg = $row['second-img'];
                        $thirdimg = $row['third-img'];
                        $summary = $row['summary'];
                        $logo = $row['logo'];
                        $price = $row['price'];
                        $gametag = $row['tag'];
                        $developer = $row['developer'];
                        $publisher = $row['publisher'];
                        $genreid = $row['genreid'];
                        $sale = $row['sale'] * 100;
                        $salePrice = $row['saleprice'];
                        $icon = $row['icon'];
                        // Insert comma into price to display
                        $strprice = "";
                        $strSalePrice = "";
                        if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
                            if ($price == 0 && $gametag != 'upcoming') {
                                $strprice = "Free";
                                $buybtn = '<a class="btn btn-primary game-aside__btn">GET</a>';
                                $pricebar = '
                                        <div class="game-aside__order">
                                            <p class="title game-aside__price">Free</p>
                                        </div>
                                    ';
                            } else if ($price == 0 && $gametag == 'upcoming') {
                                $buybtn = '<button class="btn btn-outline-light game-aside__btn" disabled>COMING SOON</button>';
                                $pricebar = '
                                        <div class="game-aside__order">
                                            <p class="title game-aside__price">Free</p>
                                        </div>
                                    ';
                            } else if ($sale == 0) {
                                $buybtn = '<a class="btn btn-primary game-aside__btn">BUY NOW</a>';
                                $pricebar = '
                                        <div class="game-aside__order">
                                            <p class="title game-aside__price">đ' . number_format($price) . '</p>
                                        </div>
                                    ';
                            } else {
                                $salePercent = $row['sale'] * 100;
                                $pricebar = '
                                        <div class="game-aside__order">
                                            <span class="btn btn-primary title game-aside__price game-aside__price--sale">-' . $sale . '%</span>
                                            <p class="title game-aside__price game-aside__price--cost">đ' . number_format($price) . '</p>
                                            <p class="title game-aside__price game-aside__price--lastcost">đ' . number_format($salePrice) . '</p>
                                        </div>
                                    ';
                                $buybtn = '<a class="btn btn-primary game-aside__btn">BUY NOW</a>';
                            }
                        } else {
                            if ($price == 0 && $gametag != 'upcoming') {
                                $buybtn = '<a href="/Project-TCS/index.php?site=login" class="btn btn-primary game-aside__btn">GET</a>';
                            } else if ($price == 0 && $gametag == 'upcoming') {
                                $buybtn = '<a href="/Project-TCS/index.php?site=login" class="btn btn-outline-light game-aside__btn" disabled>COMING SOON</a>';
                            } else {
                                $buybtn = '<a href="/Project-TCS/index.php?site=login" class="btn btn-primary game-aside__btn">BUY NOW</a>';
                            }
                        }
                        if (isset($_SESSION['email'])) {
                            // Check if already in cart
                            $check = mysqli_query($conn, "SELECT c.email, ci.gameid FROM cart c JOIN cartitem ci ON c.cartid = ci.cartid WHERE status = 1 and c.email = '" . $_SESSION['email'] . "' and ci.gameid = '" . $_GET['id'] . "'") or die(mysqli_error($conn));
                            if (mysqli_num_rows($check) > 0) {
                                $addBtn = '
                                    <a href="index.php?site=cart" class="btn btn-outline-light game-aside__btn game-aside__btn--add">VIEW IN CART</a>
                                ';
                            } else {
                                $addBtn = '
                                    <button gameid=' . $gameid . ' class="btn btn-outline-light game-aside__btn game-aside__btn--add">ADD TO CART</button>
                                ';
                            }
                        } else {
                            $addBtn = '
                            <button gameid=' . $gameid . ' class="btn btn-outline-light game-aside__btn game-aside__btn--add">ADD TO CART</button>
                            ';
                        }

                        // Find genre name 
                        $genreResult = mysqli_query($conn, "SELECT * FROM genre WHERE genreid = '$genreid'");
                        if ($row = mysqli_fetch_array($genreResult)) {
                            $genreName = $row['genrename'];
                        }
                        echo '
                                <h3 class="title game-detail__title">' . $name . '</h3>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="game-detail__content">
                                            <div id="carouselExampleIndicators" class="carousel slide game-detail__slide" data-bs-ride="true">
                                                <div class="carousel-inner game-detail__list">
                                                    <div class="carousel-item game-detail__item active">
                                                        <img src="' . $firstimg . '" class="d-block w-100 game-detail__img" alt="...">
                                                    </div>
                                                    <div class="carousel-item game-detail__item">
                                                        <img src="' . $secondimg . '" class="d-block w-100 game-detail__img" alt="...">
                                                    </div>
                                                    <div class="carousel-item game-detail__item">
                                                        <img src="' . $thirdimg . '" class="d-block w-100 game-detail__img" alt="...">
                                                    </div>
                                                    <button class="carousel-control-prev game-detail__btn game-detail__btn--prev " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon game-detail__icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next game-detail__btn game-detail__btn--next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon game-detail__icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <div class="carousel-indicators game-detail__menu">
                                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                                                        <img src="' . $firstimg . '" class="d-block game-detail__shortcut" alt="...">
                                                    </button>
                                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                                                        <img src="' . $secondimg . '" class="d-block game-detail__shortcut" alt="...">
                                                    </button>
                                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                                                        <img src="' . $thirdimg . '" class="d-block game-detail__shortcut" alt="...">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="summary">' . $summary . '</p>
                                        <div class="genre">
                                            <h4 class="title genre__title">Genre</h4>
                                            <a href="" class="genre__link">' . $genreName . '</a>
                                        </div>
                                        <div class="social">
                                            <h4 class="title social__title">Follow Us</h4>
                                            <ul class="social__list">
                                                <li class="social__item">
                                                    <a href="" class="social__link">
                                                        <i class="fa-brands fa-discord social__icon"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="" class="social__link">
                                                        <i class="fa-brands fa-facebook social__icon"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="" class="social__link">
                                                        <i class="fa-solid fa-earth-asia social__icon"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="" class="social__link">
                                                        <i class="fa-brands fa-instagram social__icon"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="" class="social__link">
                                                        <i class="fa-brands fa-reddit social__icon"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="" class="social__link">
                                                        <i class="fa-brands fa-twitter social__icon"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="" class="social__link">
                                                        <i class="fa-brands fa-vk social__icon"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="" class="social__link">
                                                        <i class="fa-brands fa-youtube social__icon"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="game-aside">
                                            <div class="game-aside__logo">
                                                <img src="' . $logo . '" alt="" class="game-aside__img">
                                            </div>
                                            ' . (isset($pricebar) ? $pricebar : '') . '
                                            ' . $buybtn . '
                                            ' . $addBtn . '
                                            <div class="info">
                                                <h4 class="info__title">Developer</h4>
                                                <h4 class="title info__desc">' . $developer . '</h4>
                                            </div>
                                            <div class="info">
                                                <h4 class="info__title">Publisher</h4>
                                                <h4 class="title info__desc">' . $publisher . '</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ';
                    }
                }
                ?>
            </div>
        </div>

        <!-- Payment modal -->
        <?php
        load_payment();
        ?>
    </div>

    <!-- Footer -->
    <?php
    load_footer();
    ?>
</body>
<script>
    // Display payment modal
    let buyBtn = document.querySelector('.game-aside__btn')
    buyBtn.addEventListener('click', function () {
        paymentModal.style.display = "block";
    })

    let addBtn = document.querySelector('.game-aside__btn--add')
    if (addBtn.getAttribute("gameid") != null) {
        addBtn.addEventListener('click', function () {
            let gameid = addBtn.getAttribute("gameid");
            window.location = "/Project-TCS/assets/php/addToCart.php?id=" + gameid
        })
    }
</script>

</html>