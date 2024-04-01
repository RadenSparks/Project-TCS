<?php
include_once "./static/model/connectdb.php";
include_once "./static/model/product.php";

$data = product();
// echo var_dump($data);


?>

<main class="main">

    <!-- 
            
            
            carousel 1,              
            section 2 
        
        
        -->
    <div class="container-fluid p-0 w-100">
        <!-- navbar 2 -->
        <nav class="nav-2 navbar d-flex justify-content-start align-items-center py-3 px-0 w-100">
            <ul class="d-flex align-items-center m-0 gap-3 px-0 py-3">
                <li class="active">
                    <div class="input-1-box bg-dark d-flex align-items-center justify-content-start mx-0 px-3 rounded-pill">
                        <span><i class="fa fa-search opacity-50"></i></span>
                        <input class="input-1 bg-dark border border-0" type="text" placeholder="Search Store">
                    </div>
                </li>
                <li class="text-light"> <a href="">Discover</a> </li>
                <li> <a href="">Browse</a> </li>
                <li> <a href="">News</a> </li>
            </ul>
        </nav>

        <div id="carousel-content" class="row w-100 m-0">
            <!-- carousel 1 -->
            <div id="carouselExampleSlidesOnly" class="col-9 p-0 carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item ">
                        <img src="http://localhost/PHP1/epic-games-store.github.io-main/static/img/carousel-1/sideLine1/game2.jpg" id="img-carousel" class="d-block w-100" alt="...">
                    </div>

                </div>
            </div>

            <!-- sideline 1 -->
            <div class="dots col-3 card mb-3 bg-transparent d-flex justify-content-between align-items-start">
                <?php
                foreach ($data as $index => $item) {
                    if ($index <= 4) {
                        echo '   <div
                        class="dot row g-0 side-line-game d-flex align-items-center justify-content-start rounded-3 p-3 mx-3 w-100">
                        <div class="text-light d-flex align-items-center justify-content-start">
                            <img src="' . $item['first-img'] . '" class="img-fluid side-line-img rounded p-0"
                                alt="...">
                            <p class="p-0 mx-3 my-0 side-line-text">' . $item['gamename'] . '</p>

                        </div>
                    </div>';
                    }
                }

                ?>




            </div>

        </div>

        <!-- 
                
                Section 3 , 5 games manual carousel
            
            -->


        <div class="container-fluid d-flex align-items-start justify-content-between gap-3 p-0 my-5">

            <?php
            foreach ($data as $index => $item) {
                if ($index >= 5 && $index <= 7) {
                    echo '  <div class=" section-4-card card" style="width: 28em;">
                        <img src="' . $item['first-img'] . '" class=" something card-img-top bg-light rounded-4" alt="...">
                        <div class="card-body gameInfo">
                            <h5 class="card-title text-light my-3">' . $item['gamename'] . '</h5>
                            <p class="card-text text-secondary my-3">' . $item['summary'] . '</p>
                            <a href="#" class="section-4-links text-light fs-4 my-3">Play for Free</a>
                        </div>
                    </div>';
                }
            }
            ?>




        </div>

        <div class="section3 container-fluid d-flex flex-column justify-content-center gap-3 p-0 my-5 ">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <a href="#">Games on Sales <span class="ticks">&gt;</span></a>
                </div>
                <div>
                    <button class="carousel-btn" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">&lt;</button>
                    <button class="carousel-btn" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">&gt;</button>
                </div>
            </div>
            <div id="carouselExample1" class="carousel slide">
                <div class="carousel-inner">
                    <!-- <div class="carousel-item active">
                        <div class="d-flex gap-3 align-items-start justify-content-between ">
                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/carousel-2/card1.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text">The Callisto Protocol</p>
                                    <a href="#" class="btn btn-primary px-2 py-0">-20%</a>
                                    <span><del>₹2,599</del> ₹1,999.20</span>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/carousel-2/card2.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">ADD ON</h6>
                                    <p class="card-text">Palladis Season Pass 2022</p>
                                    <a href="#" class="btn btn-primary px-2 py-0">-33%</a>
                                    <span><del>₹1,280</del> ₹857.60</span>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/carousel-2/card3.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text">Paladins Digital Delux Edition 2022</p>
                                    <a href="#" class="btn btn-primary px-2 py-0">-50%</a>
                                    <span><del>₹1,419</del> ₹709.50</span>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/carousel-2/card4.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">ADD On</h6>
                                    <p class="card-text">SMITE Season Pass 2022</p>
                                    <a href="#" class="btn btn-primary px-2 py-0">-33%</a>
                                    <span><del>₹939</del> ₹629.13</span>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/carousel-2/card5.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">EDITION</h6>
                                    <p class="card-text">Divine Knockout (DKO) - Founders Edition </p>
                                    <a href="#" class="btn btn-primary px-2 py-0">-20%</a>
                                    <span><del>₹939</del> ₹629.13</span>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/carousel-2/card6.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text">DOOM 3</p>
                                    <a href="#" class="btn btn-primary px-2 py-0">-60%</a>
                                    <span><del>₹449</del> ₹179.60</span>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="carousel-inner">
                        <div class="carousel-item">

                            <div class="d-flex gap-3 align-items-start justify-content-between ">

                                <?php
                                foreach ($data as $index => $item) {
                                    if ($index >= 8 && $index <= 13) {
                                        echo ' <div class=" card text-bg-dark" style="width: 13.5rem;">
                                    <img src="'.$item['first-img'].'" class="cardCover something card-img-top bg-light" alt="...">
                                    <div class="card-body p-1 gameInfo">
                                        <h6 class="card-title text-secondary">'.$item['developer'].'</h6>
                                        <p class="card-text">'.$item['gamename'].'</p>
                                        <a href="#" class="btn btn-primary px-2 py-0">-20%</a>
                                        <span><del>₹2,599</del> ₹1,999.20</span>
                                    </div>
                                </div> ';
                                    }
                                }
                                ?>


                                <!-- <div class=" card text-bg-dark" style="width: 13.5rem;">
                                    <img src="static/img/carousel-2/card2.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                    <div class="card-body p-1 gameInfo">
                                        <h6 class="card-title text-secondary">ADD ON</h6>
                                        <p class="card-text">Palladis Season Pass 2022</p>
                                        <a href="#" class="btn btn-primary px-2 py-0">-33%</a>
                                        <span><del>₹1,280</del> ₹857.60</span>
                                    </div>
                                </div>

                                <div class=" card text-bg-dark" style="width: 13.5rem;">
                                    <img src="static/img/carousel-2/card3.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                    <div class="card-body p-1 gameInfo">
                                        <h6 class="card-title text-secondary">Base Game</h6>
                                        <p class="card-text">Paladins Digital Delux Edition 2022</p>
                                        <a href="#" class="btn btn-primary px-2 py-0">-50%</a>
                                        <span><del>₹1,419</del> ₹709.50</span>
                                    </div>
                                </div>

                                <div class=" card text-bg-dark" style="width: 13.5rem;">
                                    <img src="static/img/carousel-2/card4.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                    <div class="card-body p-1 gameInfo">
                                        <h6 class="card-title text-secondary">ADD On</h6>
                                        <p class="card-text">SMITE Season Pass 2022</p>
                                        <a href="#" class="btn btn-primary px-2 py-0">-33%</a>
                                        <span><del>₹939</del> ₹629.13</span>
                                    </div>
                                </div>

                                <div class=" card text-bg-dark" style="width: 13.5rem;">
                                    <img src="static/img/carousel-2/card5.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                    <div class="card-body p-1 gameInfo">
                                        <h6 class="card-title text-secondary">EDITION</h6>
                                        <p class="card-text">Divine Knockout (DKO) - Founders Edition </p>
                                        <a href="#" class="btn btn-primary px-2 py-0">-20%</a>
                                        <span><del>₹939</del> ₹629.13</span>
                                    </div>
                                </div>

                                <div class=" card text-bg-dark" style="width: 13.5rem;">
                                    <img src="static/img/carousel-2/card6.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                    <div class="card-body p-1 gameInfo">
                                        <h6 class="card-title text-secondary">Base Game</h6>
                                        <p class="card-text">DOOM 3</p>
                                        <a href="#" class="btn btn-primary px-2 py-0">-60%</a>
                                        <span><del>₹449</del> ₹179.60</span>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- 

                section 4, 3 games in offer

             -->


        <!-- 

                section 5, Free Games

              -->
        <div class="section-5-container container-fluid text-light d-flex flex-column align-items-center ">

            <div class="d-flex justify-content-between align-items-center w-100 p-0 mb-4">
                <p class="text-light fs-5 m-0"><span><img class="w-25 me-3" src="static/img/gift.png" alt=""></span>Free
                    Games</p>
                <div>
                    <button class="section-5-btn text-light border border-secondary m-0" type="button">VIEW
                        MORE</button>
                </div>
            </div>

            <div class="d-flex align-items-start justify-content-between gap-3 w-100">

                <?php
                    foreach($data as $index => $item) {
                        if($index >= 14 && $index <= 17) {
                            echo ' <div class=" card" style="width: 20em;">
                            <img src="'.$item['first-img'].'" class="section-5-img card-img-top" alt="...">
                            <button class="btn btn-primary rounded-0 py-1">Free Now</button>
                            <div class="card-body px-0 py-4">
                                <p class="card-text m-0 p-0"></p>
                                <a href="#" class="text-white-50 m-0 p-0">Free Now - Jan 19 at 09:30 PM</a>
                            </div>
                        </div>';
                        }
                    }
                ?>
               


            </div>

        </div>

        <!-- 

                section 6, Top sellers

             -->



        <div class="section-6 container-fluid d-flex justify-content-between align-items-center text-light my-5 p-0">


            <!-- section 6-1 -->
            <div class=" section-6-1 d-flex flex-column border-end border-dark px-3">

                <div class="d-flex justify-content-between align-items-center w-100 p-0 mb-4">
                    <p class=" fs-4 text-light m-0">Top Sellers</p>
                    <div>
                        <button class="section-6-btn text-light border border-secondary m-0" type="button">VIEW
                            MORE</button>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-1.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Hogwarts Legacy</p>
                        <p class="m-0 text-secondary">Available 02/10/23</p>
                        <p class="my-2">₹2,999</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-2.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Grand Theft Auto V: Premium...</p>
                        <p class="my-2">₹2,321.44</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-3.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Goat Simulator 3</p>
                        <p class="my-2">₹1,874</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-4.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">EA SPORTS&#8482; FIFA 23 STANDARD...</p>
                        <p class="my-2">₹3,499</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-5.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">PC Building Simulator</p>
                        <p class="my-2">₹2,080</p>
                    </div>
                </div>

            </div>


            <!-- section 6-2 -->
            <div class=" section-6-1 d-flex flex-column border-end border-dark px-3">

                <div class="d-flex justify-content-between align-items-center w-100 p-0 mb-4">
                    <p class=" fs-4 text-light m-0">Most Played</p>
                    <div>
                        <button class="section-6-btn text-light border border-secondary m-0" type="button">VIEW
                            MORE</button>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-6.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Fortnite</p>
                        <p class="my-2">Free</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-7.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Rocket League&#174;</p>
                        <p class="my-2">Free</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-8.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Genshin Impact</p>
                        <p class="my-2">Free</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-9.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Assassin's Creed&#174; Mirage</p>
                        <p class="my-2">₹3,499</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-10.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">VALORANT</p>
                        <p class="my-2">Free</p>
                    </div>
                </div>

            </div>

            <!-- section 6-3 -->
            <div class=" section-6-1 d-flex flex-column px-3">

                <div class="d-flex justify-content-between align-items-center w-100 p-0 mb-4">
                    <p class=" fs-4 text-light m-0">Top Sellers</p>
                    <div>
                        <button class="section-6-btn text-light border border-secondary m-0" type="button">VIEW
                            MORE</button>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-1.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Hogwarts Legacy</p>
                        <p class="m-0 text-secondary">Available 02/10/23</p>
                        <p class="my-2">₹2,999</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-2.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Grand Theft Auto V: Premium...</p>
                        <p class="my-2">₹2,321.44</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-3.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Goat Simulator 3</p>
                        <p class="my-2">₹1,874</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-4.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">EA SPORTS FIFA 23 STANDARD...</p>
                        <p class="my-2">₹3,499</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-6/game-6-5.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">PC Building Simulator</p>
                        <p class="my-2">₹2,080</p>
                    </div>
                </div>

            </div>
        </div>





        <!-- 

                section - 7, Manual carousel - Most popular

             -->
        <!-- <div class="section3 container-fluid d-flex flex-column justify-content-center gap-3 p-0 my-5 ">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <a href="#">Most Popular<span class="ticks">&gt;</span></a>
                </div>
                <div>
                    <button class="carousel-btn" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">&lt;</button>
                    <button class="carousel-btn" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">&gt;</button>
                </div>
            </div>
            <div id="carouselExample2" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item  active">
                        <div class="d-flex gap-3 align-items-start justify-content-between ">
                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/section-7/game1.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text my-1">Grand Theft Auto V: Premium Edition</p>
                                    <p>₹2,321.44</p>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/section-7/game2.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text my-1">VALORANT</p>
                                    <p>Free</p>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/section-7/game3.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text my-1">NARAKA: BLADEPOINT</p>
                                    <p>₹1,199</p>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/section-7/game4.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text my-1">Bloons TD 6</p>
                                    <p>₹699</p>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/section-7/game5.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text my-1">Red Dead Redemption 2</p>
                                    <p>₹3,199</p>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/section-7/game6.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text my-1">EA SPORTS&#8482; FIFA 23 Standard Edition</p>
                                    <p>₹3,499</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="d-flex gap-3 align-items-start justify-content-between ">
                                <div class=" card text-bg-dark" style="width: 13.5rem;">
                                    <img src="static/img/section-7/game1.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                    <div class="card-body p-1 gameInfo">
                                        <h6 class="card-title text-secondary">Base Game</h6>
                                        <p class="card-text my-1">Grand Theft Auto V: Premium Edition</p>
                                        <p>₹2,321.44</p>
                                    </div>
                                </div>

                                <div class=" card text-bg-dark" style="width: 13.5rem;">
                                    <img src="static/img/section-7/game2.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                    <div class="card-body p-1 gameInfo">
                                        <h6 class="card-title text-secondary">Base Game</h6>
                                        <p class="card-text my-1">VALORANT</p>
                                        <p>Free</p>
                                    </div>
                                </div>

                                <div class=" card text-bg-dark" style="width: 13.5rem;">
                                    <img src="static/img/section-7/game3.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                    <div class="card-body p-1 gameInfo">
                                        <h6 class="card-title text-secondary">Base Game</h6>
                                        <p class="card-text my-1">NARAKA: BLADEPOINT</p>
                                        <p>₹1,199</p>
                                    </div>
                                </div>

                                <div class=" card text-bg-dark" style="width: 13.5rem;">
                                    <img src="static/img/section-7/game4.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                    <div class="card-body p-1 gameInfo">
                                        <h6 class="card-title text-secondary">Base Game</h6>
                                        <p class="card-text my-1">Bloons TD 6</p>
                                        <p>₹699</p>
                                    </div>
                                </div>

                                <div class=" card text-bg-dark" style="width: 13.5rem;">
                                    <img src="static/img/section-7/game5.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                    <div class="card-body p-1 gameInfo">
                                        <h6 class="card-title text-secondary">Base Game</h6>
                                        <p class="card-text my-1">Red Dead Redemption 2</p>
                                        <p>₹3,199</p>
                                    </div>
                                </div>

                                <div class=" card text-bg-dark" style="width: 13.5rem;">
                                    <img src="static/img/section-7/game6.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                    <div class="card-body p-1 gameInfo">
                                        <h6 class="card-title text-secondary">Base Game</h6>
                                        <p class="card-text my-1">EA SPORTS&#8482; FIFA 23 Standard Edition</p>
                                        <p>₹3,499</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <!-- 

                section 8, New releases

             -->


        <!-- Section 6 <New Release> -->
        <!-- <div class="section-6 container-fluid d-flex justify-content-between align-items-center text-light my-5 p-0">


            <div class=" section-6-1 d-flex flex-column border-end border-dark px-3">

                <div class="d-flex justify-content-between align-items-center w-100 p-0 mb-4">
                    <p class=" fs-4 text-light m-0">New Releases</p>
                    <div>
                        <button class="section-6-btn text-light border border-secondary m-0" type="button">VIEW
                            MORE</button>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game1.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Divine Knockout (DKO) - Starter...</p>
                        <p class="my-2">₹3,99</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game2.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Aquatico</p>
                        <p class="my-2">₹589</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game3.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Divine Knockout</p>
                        <p class="my-2">Free</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game4.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Indies Lies</p>
                        <p class="bg-dark rounded text-center px-2 py-1 w-50 " style="font-size: 0.8em;">NOW ON EPIC
                        </p>
                        <p class="my-2">₹349</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game5.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Sailing Era</p>
                        <p class="my-2">
                            <span class="bg-primary rounded px-2 py-1" style="font-size: 0.8em;">-10%</span>
                            <del class="mx-1">₹701.59</del>
                            ₹631.43
                        </p>
                    </div>
                </div>

            </div>


            <div class=" section-6-1 d-flex flex-column border-end border-dark px-3">

                <div class="d-flex justify-content-between align-items-center w-100 p-0 mb-4">
                    <p class=" fs-4 text-light m-0">Top Rated</p>
                    <div>
                        <button class="section-6-btn text-light border border-secondary m-0" type="button">VIEW
                            MORE</button>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game6.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">The Jackbox Party Pack</p>
                        <p class="my-2">₹595</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game7.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Evil Nun: The Broken Mask</p>
                        <p class="my-2">₹349</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game8.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Celeste</p>
                        <p class="my-2">₹595</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game9.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Hades</p>
                        <p class="my-2">₹595</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game10.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Jackbox Party Pack 3</p>
                        <p class="my-2">₹595</p>
                    </div>
                </div>

            </div>

            <div class=" section-6-1 d-flex flex-column border-end border-dark px-3">

                <div class="d-flex justify-content-between align-items-center w-100 p-0 mb-4">
                    <p class=" fs-4 text-light m-0">New Releases</p>
                    <div>
                        <button class="section-6-btn text-light border border-secondary m-0" type="button">VIEW
                            MORE</button>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game1.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Divine Knockout (DKO) - Starter...</p>
                        <p class="my-2">₹3,99</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game2.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Aquatico</p>
                        <p class="my-2">₹589</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game3.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Divine Knockout</p>
                        <p class="my-2">Free</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game4.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Indies Lies</p>
                        <p class="bg-dark rounded text-center px-2 py-1 w-50 " style="font-size: 0.8em;">NOW ON EPIC
                        </p>
                        <p class="my-2">₹349</p>
                    </div>
                </div>

                <div class="sidelineSubContainer side-line-game px-4 py-3 rounded rounded-4 d-flex align-items-center justify-content-start gap-3 text-light">
                    <div class="game-6 game-6-1" style="background-image:  url(static/img/section-8/game5.jpg);">
                    </div>
                    <div class="gameText ms-3">
                        <p class="my-1">Sailing Era</p>
                        <p class="my-2">
                            <span class="bg-primary rounded px-2 py-1" style="font-size: 0.8em;">-10%</span>
                            <del class="mx-1">₹701.59</del>
                            ₹631.43
                        </p>
                    </div>
                </div>

            </div>
        </div> -->
    </div>


    <!-- 


            Section - 9, Three games in offer


         -->

    <!-- <div class="container-fluid d-flex align-items-stetch justify-content-between gap-3 p-0">

        <div class=" section-4-card card" style="width: 28em;">
            <img src="static/img/section-9/game1.jpg" class="cardCover something card-img-top bg-light rounded-4" alt="...">
            <div class="card-body gameInfo">
                <h5 class="card-title text-light my-3">Fall Guys</h5>
                <p class="card-text text-secondary my-3">I used to be a Fall Guy like you, until I took a Blast Ball
                    to the knee… Alduin is in the Fall Guys Store right now.</p>
                <a href="#" class="section-4-links text-light fs-4 my-3">Play For Free</a>
            </div>
        </div>

        <div class=" section-4-card card" style="width: 28em;">
            <img src="static/img/section-9/game2.jpg" class="cardCover something card-img-top bg-light rounded-4" alt="...">
            <div class="card-body gameInfo">
                <h5 class="card-title text-light my-3">Rocket League</h5>
                <p class="card-text text-secondary my-3">Classic meets current in Rocket League in the Ford Mega
                    Bundle. Save 75% and receive all the Ford and Mustang vehicles!</p>
                <a href="#" class="section-4-links text-light fs-4 my-3">Play For Free</a>
            </div>
        </div>

        <div class=" section-4-card card" style="width: 28em;">
            <img src="static/img/section-9/game3.jpg" class="cardCover something card-img-top bg-light rounded-4" alt="...">
            <div class="card-body gameInfo">
                <h5 class="card-title text-light my-3">Hogwarts Legacy - Coming February 10</h5>
                <p class="card-text text-secondary my-3">Experience Hogwarts in the 1800s. Make allies, battle Dark
                    wizards and decide the fate of the wizarding world.</p>
                <p class="text-light fs-4 my-3">₹3,499</p>
            </div>
        </div>
    </div> -->



    <!-- 
            
            section 10, Manual carousel, Most popular
        
        -->

    <!-- <div class="section3 container-fluid d-flex flex-column justify-content-center gap-3 p-0 my-5 ">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <a href="#">Most Popular <span class="ticks">&gt;</span></a>
            </div>
            <div>
                <button class="carousel-btn" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev">&lt;</button>
                <button class="carousel-btn" type="button" data-bs-target="#carouselExample3" data-bs-slide="next">&gt;</button>
            </div>
        </div>
        <div id="carouselExample3" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex gap-3 align-items-start justify-content-between ">
                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-10/game1.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">NHRA Championship Drag Racing - Speed For All</p>
                                <p class="bg-dark rounded text-center px-2 py-1 mt-2 mb-2 w-50 " style="font-size: 0.8em;">NOW ON EPIC</p>
                                <p>₹1,179</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-10/game2.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">My Friend Peppa Pig</p>
                                <p>₹1,600</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-10/game3.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">MY LITTLE PONY A Maritime Bay Adventure</p>
                                <p>₹1,600</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-10/game4.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">PAW Patrol Mighty Pups Save Adventure Bay</p>
                                <p>₹1,300</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-10/game5.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">High O Life</p>
                                <p>₹1,419</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-10/game6.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Saints Row IV Re-Elected</p>
                                <p>₹1,000</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex gap-3 align-items-start justify-content-between ">
                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-10/game1.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">NHRA Championship Drag Racing - Speed For All</p>
                                <p class="bg-dark rounded text-center px-2 py-1 mt-2 mb-2 w-50 " style="font-size: 0.8em;">NOW ON EPIC</p>
                                <p>₹1,179</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-10/game2.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">My Friend Peppa Pig</p>
                                <p>₹1,600</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-10/game3.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">MY LITTLE PONY A Maritime Bay Adventure</p>
                                <p>₹1,600</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-10/game4.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">PAW Patrol Mighty Pups Save Adventure Bay</p>
                                <p>₹1,300</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-10/game5.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">High O Life</p>
                                <p>₹1,419</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-10/game6.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Saints Row IV Re-Elected</p>
                                <p>₹1,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    </div>



    <!-- 
            
            section 11, Manual carousel, Recently played
        
        -->
    <!-- <div class="section3 container-fluid d-flex flex-column justify-content-center gap-3 p-0 my-5 ">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <a href="#">Recently Updated <span class="ticks">&gt;</span></a>
            </div>
            <div>
                <button class="carousel-btn" type="button" data-bs-target="#carouselExample4" data-bs-slide="prev">&lt;</button>
                <button class="carousel-btn" type="button" data-bs-target="#carouselExample4" data-bs-slide="next">&gt;</button>
            </div>
        </div>
        <div id="carouselExample4" class="carousel slide">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex gap-3 align-items-start justify-content-between ">
                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-11/game1.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Somerville</p>
                                <p>₹589</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-11/game2.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Tails of Iron</p>
                                <p>₹1,299</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-11/game3.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Century: Age of Ashes</p>
                                <p>Free</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-11/game4.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Timberborn</p>
                                <p>₹589</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-11/game5.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">GigaBash</p>
                                <p>₹829</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-11/game6.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Satisfactory</p>
                                <p>₹745</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="d-flex gap-3 align-items-start justify-content-between ">
                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/section-11/game1.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text my-1">Somerville</p>
                                    <p>₹589</p>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/section-11/game2.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text my-1">Tails of Iron</p>
                                    <p>₹1,299</p>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/section-11/game3.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text my-1">Century: Age of Ashes</p>
                                    <p>Free</p>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/section-11/game4.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text my-1">Timberborn</p>
                                    <p>₹589</p>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/section-11/game5.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text my-1">GigaBash</p>
                                    <p>₹829</p>
                                </div>
                            </div>

                            <div class=" card text-bg-dark" style="width: 13.5rem;">
                                <img src="static/img/section-11/game6.jpg" class="cardCover something card-img-top bg-light" alt="...">
                                <div class="card-body p-1 gameInfo">
                                    <h6 class="card-title text-secondary">Base Game</h6>
                                    <p class="card-text my-1">Satisfactory</p>
                                    <p>₹745</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- 
            
            section 12, manual carousel, Now on epic
        
        -->
    <!-- <div class="section3 container-fluid d-flex flex-column justify-content-center gap-3 p-0 my-5 ">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <a href="#">Now On The Epic Game Store <span class="ticks">&gt;</span></a>
            </div>
            <div>
                <button class="carousel-btn" type="button" data-bs-target="#carouselExample5" data-bs-slide="prev">&lt;</button>
                <button class="carousel-btn" type="button" data-bs-target="#carouselExample5" data-bs-slide="next">&gt;</button>
            </div>
        </div>
        <div id="carouselExample5" class="carousel slide">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex gap-3 align-items-start justify-content-between ">
                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-12/game1.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Edge Of Galaxy</p>
                                <p class="bg-dark rounded text-center px-2 py-1 mt-2 mb-2 w-50 " style="font-size: 0.8em;">NOW ON EPIC</p>
                                <p>₹209</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-12/game2.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">The Galactic Junkers</p>
                                <p>₹479</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-12/game3.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Kerbal Space Program</p>
                                <p>₹849</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-12/game4.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">NHRA Championship Drag Racing - Speed For All</p>
                                <p>₹1,179</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-12/game5.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Sentinel 3 - Homeworld</p>
                                <p class="text-secondary">Available Dec 2022</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-12/game6.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Battle of Europe</p>
                                <p class="text-secondary">Available Dec 2022</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex gap-3 align-items-start justify-content-between ">
                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-12/game1.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Edge Of Galaxy</p>
                                <p class="bg-dark rounded text-center px-2 py-1 mt-2 mb-2 w-50 " style="font-size: 0.8em;">NOW ON EPIC</p>
                                <p>₹209</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-12/game2.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">The Galactic Junkers</p>
                                <p>₹479</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-12/game3.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Kerbal Space Program</p>
                                <p>₹849</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-12/game4.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">NHRA Championship Drag Racing - Speed For All</p>
                                <p>₹1,179</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-12/game5.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Sentinel 3 - Homeworld</p>
                                <p class="text-secondary">Available Dec 2022</p>
                            </div>
                        </div>

                        <div class=" card text-bg-dark" style="width: 13.5rem;">
                            <img src="static/img/section-12/game6.jpg" class="cardCover something card-img-top bg-light" alt="...">
                            <div class="card-body p-1 gameInfo">
                                <h6 class="card-title text-secondary">Base Game</h6>
                                <p class="card-text my-1">Battle of Europe</p>
                                <p class="text-secondary">Available Dec 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        
    </div> -->
    <div class="container-flui d-flex flex-row align-items-center justify-content-between gap-5 my-4">

        <img class="section-13-img img-fluid rounded-4 me-4" src="static/img/section-13/bg-1.jpg" alt="">

        <div>
            <a href="#" class="text-light fs-4">Explore Our Catalog</a>
            <p class="text-secondary text-wrap mt-4 mb-4 pe-4">Browse by genre, features, price, and more to
                find your next favorite game.</p>
            <button class="section-13-btn text-dark">BROWSE ALL</button>
        </div>
    </div>

</main>