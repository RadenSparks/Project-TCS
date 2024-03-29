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
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/searchbar.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/sliders.css">
    <link rel="stylesheet" href="./assets/css/content.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <title>Epic Games Store</title>
</head>
<body>
    <!-- Header -->
    <?php
        load_header();
        load_loader();
        ?>
    <div id="main">
        <!-- Slider -->
        <div class="container px-5">
            <?php
                load_searchbar();
            ?>
            <!-- Slider -->
            <div class="row">
                <div id="carouselExampleCaptions" class="carousel game-slider" data-bs-ride="false">
                    <div class="carousel-inner game-slider__img">
                        <a href="./index.php?site=details&id=76" class="slide carousel-item active">
                            <img src="https://cdn2.unrealengine.com/egs-pubg-carousel-desktop-1920x1080-dd4decb712c8.jpg?h=1080&resize=1&w=1920" class="d-block w-100 rounded-5" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <img src="https://cdn2.unrealengine.com/egs-pubg-carousel-logo-350x100-943474bc2a8b.png" alt="" class="slide__label">
                                <div class="slide__info">
                                    <p class="slide__sub-label">PUBG: BATTLEGROUNDS</p>
                                    <p class="slide__desc">
                                    Drop into the original Battle Royale and grab a limited-time PUBG Founder’s Pack for FREE!
                                    </p>
                                    <div href="" class="btn btn-light slide__btn">PLAY FOR FREE</div>
                                </div>
                            </div>
                        </a>
                        <?php
                        
                        
                        ?>
                        <a href="./index.php?site=details&id=13" class="slide carousel-item">
                            <img src="https://cdn2.unrealengine.com/egs-a-plague-tale-requiem-carousel-desktop-1248x702-24c927037c03.jpg?h=1080&resize=1&w=1920" class="d-block w-100 rounded-5" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <img src="https://cdn2.unrealengine.com/egs-a-plague-tale-requiem-carousel-logo-350x69-408997aa9613.png" alt="" class="slide__label">
                                <div class="slide__info">
                                    <p class="slide__sub-label">OUT NOW</p>
                                    <p class="slide__desc">
                                        Embark on a heartrending journey into a brutal, 
                                        breathtaking world twisted by supernatural forces 
                                        in Amicia's and Hugo's next chapter.
                                    </p>
                                    <p class="slide__price">Starting at <span style="text-decoration: underline;">đ</span><span style="font-weight: 600; font-size:1.6rem;">650,000</span></p>
                                    <div href="" class="btn btn-light slide__btn">BUY NOW</div>
                                </div>
                            </div>
                        </a>
                        <a href="./index.php?site=details&id=63" class="slide carousel-item">
                            <img src="https://cdn2.unrealengine.com/egs-genshin-impact-3-1-carousel-desktop-1248x702-be2f8dc04e27.jpg?h=1080&resize=1&w=1920" class="d-block w-100 rounded-5" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <img src="https://cdn2.unrealengine.com/genshin-impact-logo-en-v2-350x139-101962c8032b.png" alt="" class="slide__label">
                                <div class="slide__info">
                                    <p class="slide__sub-label">VERSION 3.1 NOW AVAILABLE</p>
                                    <p class="slide__desc">
                                        Explore the huge Sumeru desert with Candace, 
                                        Cyno, and Nilou as well as the Weinlesefest 
                                        celebrations in Mondstadt.
                                    </p>
                                    <div href="" class="btn btn-light slide__btn">PLAY FOR FREE</div>
                                </div>
                            </div>
                        </a>
                        <a href="./index.php?site=details&id=12" class="slide carousel-item">
                            <img src="https://cdn2.unrealengine.com/egs-destiny-2-festival-of-the-lost-carousel-desktop-1248x702-7aa78f815cf2.jpg?h=1080&resize=1&w=1920" class="d-block w-100 rounded-5" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <img src="https://cdn2.unrealengine.com/en-egs-destiny-2-festival-of-the-lost-logo-350x158-f5e886b8c8a8.png" alt="" class="slide__label">
                                <div class="slide__info">
                                    <p class="slide__sub-label">FESTIVAL OF THE LOST</p>
                                    <p class="slide__desc">
                                        Grab your favorite mask, 
                                        gather around the campfire, 
                                        and defeat Headless Ones.
                                    </p>
                                    <div href="" class="btn btn-light slide__btn">PLAY FOR FREE</div>
                                </div>
                            </div>
                        </a>
                        <a href="./index.php?site=details&id=14" class="slide carousel-item">
                            <img src="https://cdn2.unrealengine.com/egs-spider-man-miles-morales-carousel-desktop-1248x702-0cbd7e91abd2.jpg?h=1080&resize=1&w=1920" class="d-block w-100 rounded-5" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <img src="https://cdn2.unrealengine.com/egs-carousel-logo-image-350x170-4e2c1c6cd310.png" alt="" class="slide__label">
                                <div class="slide__info">
                                    <p class="slide__sub-label">1,139,000</p>
                                    <p class="slide__desc">
                                        When a fierce power struggle threatens to destroy his home,
                                        Miles must take up the mantle of Spider-Man and own it.
                                    </p>
                                    <p class="slide__price">Starting at <span style="text-decoration: underline;">đ</span><span style="font-weight: 600; font-size:1.6rem;">1,159,000</span></p>
                                    <div href="" class="btn btn-light slide__btn">BUY NOW</div>
                                </div>
                            </div>
                        </a>
                        <a href="./index.php?site=details&id=59" class="slide carousel-item">
                            <img src="https://cdn1.epicgames.com/offer/b7b42e2078524ab386a8b2a9856ef557/EGS_SIFUStandardEdition_Sloclap_G1A_03_1920x1080-1df3ab45b895adfee06b011673df20aa_1920x1080-1df3ab45b895adfee06b011673df20aa?h=270&resize=1&w=480" class="d-block w-100 rounded-5" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <img src="https://cdn2.unrealengine.com/egs-greeneye-sloclap-ic1-400x400-7f5493d6af29.png?h=480&resize=1&w=480" alt="" class="slide__label">
                                <div class="slide__info">
                                    <p class="slide__sub-label">373,000</p>
                                    <p class="slide__desc">
                                    Sifu is the new game of Sloclap, the independent studio behind Absolver. 
                                    A third person action game featuring intense hand-to-hand combat.
                                    </p>
                                    <p class="slide__price">Starting at <span style="text-decoration: underline;">đ</span><span style="font-weight: 600; font-size:1.6rem;">456,000</span></p>
                                    <div href="" class="btn btn-light slide__btn">BUY NOW</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-indicators game-slider__list">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                            <div class="list-item game-slider__item">
                                <img src="https://cdn2.unrealengine.com/egs-pubg-carousel-thumb-1200x1600-6037e1b16048.jpg?h=480&resize=1&w=360" alt="" class="list-icon game-slider__icon">
                                <h4 class="list-title game-slider__title">PUBG: BATTLEGROUNDS</h4>
                            </div>
                        </button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2">
                            <div class="list-item game-slider__item">
                                <img src="https://cdn2.unrealengine.com/egs-a-plague-tale-requiem-carousel-thumb-1200x1600-73fa28126c52.jpg?h=480&resize=1&w=360" alt="" class="list-icon game-slider__icon">
                                <h4 class="list-title game-slider__title">A Plague Tale: Requiem</h4>
                            </div>
                        </button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3">
                            <div class="list-item game-slider__item">
                                <img src="https://cdn2.unrealengine.com/en-egs-genshin-impact-3-1-carousel-thumb-v2-1200x1600-6c775f7967f6.jpg?h=480&resize=1&w=360" alt="" class="list-icon game-slider__icon">
                                <h4 class="list-title game-slider__title">Genshin Impact</h4>
                            </div>
                        </button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4">
                            <div class="list-item game-slider__item">
                                <img src="https://cdn2.unrealengine.com/en-egs-destiny-2-festival-of-the-lost-carousel-thumb-1200x1600-7088a0da790c.jpg?h=480&resize=1&w=360" alt="" class="list-icon game-slider__icon">
                                <h4 class="list-title game-slider__title">Destiny 2</h4>
                            </div>
                        </button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5">
                            <div class="list-item game-slider__item">
                                <img src="https://cdn2.unrealengine.com/egs-spider-man-miles-morales-carousel-thumb-1200x1600-b7c0fb2da84b.jpg?h=480&resize=1&w=360" alt="" class="list-icon game-slider__icon">
                                <h4 class="list-title game-slider__title">Spider-Man: Miles Moracles</h4>
                            </div>
                        </button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6">
                            <div class="list-item game-slider__item">
                                <img src="https://cdn1.epicgames.com/offer/b7b42e2078524ab386a8b2a9856ef557/EGS_SIFUStandardEdition_Sloclap_G1A_03_1920x1080-1df3ab45b895adfee06b011673df20aa_1920x1080-1df3ab45b895adfee06b011673df20aa?h=480&resize=1&w=360" alt="" class="list-icon game-slider__icon">
                                <h4 class="list-title game-slider__title">Sifu</h4>
                            </div>
                        </button>
                    </div>
                </div>
                
            </div>
            <!-- Content -->
            <div class="row">
                <div class="free-table">
                    <div class="heading">
                        <div class="title free-table__title">
                            <i class="free-table__icon fa-solid fa-gift"></i>
                            Free Games
                        </div>
                        <a href="" class="free-table__btn btn btn-outline-light">VIEW MORE</a>
                    </div>
                    <div class="row">
                        <?php
                            $freeGames = mysqli_query($conn, "SELECT * FROM game WHERE price = 0 and tag !='upcoming' ORDER BY RAND() LIMIT 4");
                            if ($row = mysqli_fetch_array($freeGames)) {
                                do {
                                    $name = $row['gamename'];
                                    $icon = $row['icon'];
                                    $gameid = $row['gameid'];
                                    // Display game
                                    echo '
                                        <div class="col-3">
                                            <a href="./index.php?site=details&id='.$gameid.'" class="game-card card mb-3">
                                                <img src="'.$icon.'" class="game-card__img card-img-top" alt="...">
                                                <div class="game-card__body card-body">
                                                    FREE NOW
                                                </div>
                                                <div class="game-card__content card-content">
                                                    <h4 class="game-card__title">'.$name.'</h4>
                                                </div>
                                            </a> 
                                        </div> 
                                    ';
                                } while ($row = mysqli_fetch_array($freeGames));
                            }
                        ?>       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="games-table">
                    <div class="col-4 games-table__column">
                        <div class="heading games-table__heading">
                            <p class="games-table__title">Top Sellers</p>
                            <a href="" class="games-table__btn btn btn-outline-light">VIEW MORE</a>
                        </div>
                        <ul class="games-table__list">
                            <?php
                                $gameSeller = mysqli_query($conn, "SELECT * FROM game WHERE tag='topsellers' ORDER BY price ASC LIMIT 5");
                                if ($row = mysqli_fetch_array($gameSeller)) {
                                    do {
                                        $name = $row['gamename'];
                                        $price = $row['price'];
                                        $icon = $row['icon'];
                                        $gameid = $row['gameid'];
                                        if ($price == 0) {
                                            $strprice = "Free";
                                        } else  {
                                            $strprice = "đ".number_format($price);
                                        }
                                        // Display game
                                        echo '
                                            <li class="games-table__item">
                                                <a href="./index.php?site=details&id='.$gameid.'" class="list-item games-table__link">
                                                    <img src="'.$icon.'" alt="" class="list-icon games-table__icon">
                                                    <div class="games-table__details">
                                                        <h4 class="games-table__name list-title">'.$name.'</h4>
                                                        <div class="games-table__price">'.$strprice.'</div>
                                                    </div>
                                                </a>
                                            </li>
                                        ';
                                    } while ($row = mysqli_fetch_array($gameSeller));
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="col-4 games-table__column">
                        <div class="heading games-table__heading">
                            <p class="games-table__title">Most Played</p>
                            <a href="" class="games-table__btn btn btn-outline-light">VIEW MORE</a>
                        </div>
                        <ul class="games-table__list">
                            <?php
                                mysqli_query($conn, "SET NAMES 'utf8'");
                                $mostPlayed = mysqli_query($conn, "SELECT * FROM game WHERE tag='mostplayed' ORDER BY price ASC LIMIT 5");
                                if ($row = mysqli_fetch_array($mostPlayed)) {
                                    do {
                                        $name = $row['gamename'];
                                        $price = $row['price'];
                                        $icon = $row['icon'];
                                        $gameid = $row['gameid'];
                                        if ($price == 0) {
                                            $strprice = "Free";
                                        } else  {
                                            $strprice = "đ".number_format($price);
                                        }
                                        // Display game
                                        echo '
                                            <li class="games-table__item">
                                                <a href="./index.php?site=details&id='.$gameid.'" class="list-item games-table__link">
                                                    <img src="'.$icon.'" alt="" class="list-icon games-table__icon">
                                                    <div class="games-table__details">
                                                        <h4 class="games-table__name list-title">'.$name.'</h4>
                                                        <div class="games-table__price">'.$strprice.'</div>
                                                    </div>
                                                </a>
                                            </li>
                                        ';
                                    } while ($row = mysqli_fetch_array($mostPlayed));
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="col-4 games-table__column">
                        <div class="heading games-table__heading">
                            <p class="games-table__title">Top Upcoming Wishlisted</p>
                            <a href="" class="games-table__btn btn btn-outline-light">VIEW MORE</a>
                        </div>
                        <ul class="games-table__list">
                            <?php
                                mysqli_query($conn, "SET NAMES 'utf8'");
                                $gameUpcoming = mysqli_query($conn, "SELECT * FROM game WHERE tag='upcoming' ORDER BY price ASC LIMIT 5");
                                if ($row = mysqli_fetch_array($gameUpcoming)) {
                                    do {
                                        $name = $row['gamename'];
                                        $price = $row['price'];
                                        $icon = $row['icon'];
                                        $gameid = $row['gameid'];
                                        // Display game
                                        echo '
                                            <li class="games-table__item">
                                                <a href="./index.php?site=details&id='.$gameid.'" class="list-item games-table__link">
                                                    <img src="'.$icon.'" alt="" class="list-icon games-table__icon">
                                                    <div class="games-table__details">
                                                        <h4 class="games-table__name list-title">'.$name.'</h4>
                                                        <div class="games-table__price games-table__price--upcoming">Coming Soon</div>
                                                    </div>
                                                </a>
                                            </li>
                                        ';
                                    } while ($row = mysqli_fetch_array($gameUpcoming));
                                }
                                mysqli_close($conn);
                            ?>
                        </ul>
                    </div>
                    
                </div>
            </div>

            <!-- End content -->
            <div class="row more">
                <div class="col-7 more__img">
                    <a href="" class="more__link"></a>
                </div>
                <div class="col-5 more__about">
                    <a href="" class="more__title">Explore Our Catalog</a>
                    <p class="more__desc">Browse by genre, features, price, and more to find your next favorite game.</p>
                    <a href="" class="btn btn-light more__btn">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php
        load_footer();
    ?>
</body>
</html>
<script src="./assets/js/loader.js" defer></script>

