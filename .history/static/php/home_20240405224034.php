<?php
include_once "./static/model/connectdb.php";
include_once "./static/model/product.php";
$data = product();
?>

<div class="landingPage_main__27pL-">
    <div class="landingPage_landing_container__25-Jq">
        <div>
            <div class="card_main__11554">
                <div class="carousel-root">
                    <div class="carousel carousel-slider" style="width: 100%;">
                        <ul class="control-dots">
                            <li class="dot selected" value="0" role="button" tabindex="0" aria-label="slide item 1"></li>
                            <li class="dot" value="1" role="button" tabindex="0" aria-label="slide item 2">
                            </li>
                            <li class="dot" value="2" role="button" tabindex="0" aria-label="slide item 3">
                            </li>
                            <li class="dot" value="3" role="button" tabindex="0" aria-label="slide item 4">
                            </li>
                            <li class="dot" value="4" role="button" tabindex="0" aria-label="slide item 5">
                            </li>
                            <li class="dot" value="5" role="button" tabindex="0" aria-label="slide item 6">
                            </li>
                        </ul><button type="button" aria-label="previous slide / item" class="control-arrow control-prev"></button>
                        <div class="slider-wrapper axis-horizontal">
                            <ul class="slider animated" style="transform: translate3d(0%, 0px, 0px); transition-duration: 500ms;">
                                <?php
                                    foreach($data as $index => $item) {
                                        if($index <= 5) {
                                            echo ' <li class="slide"><a href="/games/61c3466f194f98e8c3efef5b">
                                            <div><img src="./static/img/first-img/' . $item['first-img'] . '" alt="" class="image">
                                                <div class="legend" id="legend">
                                                    <p class="main__carousel__tag">SAVE 45% ON Manifold Garden
                                                    </p>
                                                    <p class="main__carousel__description">'.$item['summary'].'</p>
                                                    <p class="main__carousel__tag__second">Strating at ₹ 595</p>
                                                    <div class="main__buy__btn"><button class="main__btn">Buy
                                                            Now</button>
                                                        <div>
                                                            <p class="wishlist__div"><span><img class="wishlist__icon" src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt=""></span> ADD TO WISHLIST</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>';
                                        }
                                    }
                                ?>
                                <!-- <li class="slide selected previous"><a href="/games/61c3466f194f98e8c3efef5a">
                                        <div><img src="https://cdn2.unrealengine.com/Diesel%2Fproduct%2Famaranth%2Fhome%2FEGS_PanacheDigitalGames_Ancestors_Carousel2_MilkyWay_2560x1440-2560x1440-485ffea09854f355d3e294a5a028e158357c8e3e.jpg?h=720&amp;resize=1&amp;w=1280" alt="" class="image">
                                            <div class="legend" id="legend">
                                                <p class="main__carousel__tag">SAVE 100% ON Ancestors: The
                                                    Humankind Odyssey</p>
                                                <p class="main__carousel__description">EXPLORE Neogene
                                                    Africa at the dawn of humankind. For every breath-taking
                                                    view dangers lurk all around.</p>
                                                <p class="main__carousel__tag__second">Strating at ₹ 1999
                                                </p>
                                                <div class="main__buy__btn"><button class="main__btn">Buy
                                                        Now</button>
                                                    <div>
                                                        <p class="wishlist__div"><span><img class="wishlist__icon" src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt=""></span> ADD TO WISHLIST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide"><a href="/games/61c3466f194f98e8c3efef5b">
                                        <div><img src="https://cdn2.unrealengine.com/Diesel%2Fproductv2%2Florikeet%2Fhome%2FEGS_WilliamChyrStudio_ManifoldGarden_G1_Screenshot03-Stepwells-1920x1080-3cea659fc5e4b30a47717ae27f63797c47851511.jpg" alt="" class="image">
                                            <div class="legend" id="legend">
                                                <p class="main__carousel__tag">SAVE 45% ON Manifold Garden
                                                </p>
                                                <p class="main__carousel__description"> An expansive and
                                                    visually striking world filled with mind-bending
                                                    puzzles.</p>
                                                <p class="main__carousel__tag__second">Strating at ₹ 595</p>
                                                <div class="main__buy__btn"><button class="main__btn">Buy
                                                        Now</button>
                                                    <div>
                                                        <p class="wishlist__div"><span><img class="wishlist__icon" src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt=""></span> ADD TO WISHLIST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide"><a href="/games/61c3466f194f98e8c3efef5c">
                                        <div><img src="https://cdn2.unrealengine.com/egs-prey-arkanestudios-s3-2560x1440-97f55df189f5.jpg?h=720&amp;resize=1&amp;w=1280" alt="" class="image">
                                            <div class="legend" id="legend">
                                                <p class="main__carousel__tag">SAVE 50% ON Prey</p>
                                                <p class="main__carousel__description">Nothing is as it
                                                    seems aboard Talos</p>
                                                <p class="main__carousel__tag__second">Strating at ₹ 1000
                                                </p>
                                                <div class="main__buy__btn"><button class="main__btn">Buy
                                                        Now</button>
                                                    <div>
                                                        <p class="wishlist__div"><span><img class="wishlist__icon" src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt=""></span> ADD TO WISHLIST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide"><a href="/games/61c3466f194f98e8c3efef5d">
                                        <div><img src="https://cdn2.unrealengine.com/Diesel%2Fproduct%2Fweaver%2Frebelgalaxy_primary_promo-2580x1450-6802d1586b9c32276c10073274a3f454f3e783e1.jpg" alt="" class="image">
                                            <div class="legend" id="legend">
                                                <p class="main__carousel__tag">SAVE 25% ON Rebel Galaxy</p>
                                                <p class="main__carousel__description">Play Your Way Gain
                                                    alien abilities to develop a distinct combination</p>
                                                <p class="main__carousel__tag__second">Strating at ₹ 1179
                                                </p>
                                                <div class="main__buy__btn"><button class="main__btn">Buy
                                                        Now</button>
                                                    <div>
                                                        <p class="wishlist__div"><span><img class="wishlist__icon" src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt=""></span> ADD TO WISHLIST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide"><a href="/games/61c3466f194f98e8c3efef5e">
                                        <div><img src="https://cdn2.unrealengine.com/egs-wolfensteintheoldblood-machinegames-g1a-04-1920x1080-ea123be4b669.jpg?h=720&amp;resize=1&amp;w=1280" alt="" class="image">
                                            <div class="legend" id="legend">
                                                <p class="main__carousel__tag">SAVE 25% ON Wolfenstein: The
                                                    Old Blood</p>
                                                <p class="main__carousel__description">Experience
                                                    MachineGames’ intense first-person combat</p>
                                                <p class="main__carousel__tag__second">Strating at ₹ 1179
                                                </p>
                                                <div class="main__buy__btn"><button class="main__btn">Buy
                                                        Now</button>
                                                    <div>
                                                        <p class="wishlist__div"><span><img class="wishlist__icon" src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt=""></span> ADD TO WISHLIST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide"><a href="/games/61c3466f194f98e8c3efef5f">
                                        <div><img src="https://cdn2.unrealengine.com/egs-battlefield2042-dice-g1a-10-1920x1080-481bfd09d082.jpg" alt="" class="image">
                                            <div class="legend" id="legend">
                                                <p class="main__carousel__tag">SAVE 34% ON Battlefield™ 2042
                                                </p>
                                                <p class="main__carousel__description">The next generation
                                                    of fan-favorites Conquest</p>
                                                <p class="main__carousel__tag__second">Strating at ₹ 1979
                                                </p>
                                                <div class="main__buy__btn"><button class="main__btn">Buy
                                                        Now</button>
                                                    <div>
                                                        <p class="wishlist__div"><span><img class="wishlist__icon" src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt=""></span> ADD TO WISHLIST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide selected previous"><a href="/games/61c3466f194f98e8c3efef5a">
                                        <div><img src="https://cdn2.unrealengine.com/Diesel%2Fproduct%2Famaranth%2Fhome%2FEGS_PanacheDigitalGames_Ancestors_Carousel2_MilkyWay_2560x1440-2560x1440-485ffea09854f355d3e294a5a028e158357c8e3e.jpg?h=720&amp;resize=1&amp;w=1280" alt="" class="image">
                                            <div class="legend" id="legend">
                                                <p class="main__carousel__tag">SAVE 100% ON Ancestors: The
                                                    Humankind Odyssey</p>
                                                <p class="main__carousel__description">EXPLORE Neogene
                                                    Africa at the dawn of humankind. For every breath-taking
                                                    view dangers lurk all around.</p>
                                                <p class="main__carousel__tag__second">Strating at ₹ 1999
                                                </p>
                                                <div class="main__buy__btn"><button class="main__btn">Buy
                                                        Now</button>
                                                    <div>
                                                        <p class="wishlist__div"><span><img class="wishlist__icon" src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt=""></span> ADD TO WISHLIST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li> -->
                            </ul>
                        </div><button type="button" aria-label="next slide / item" class="control-arrow control-next"></button>
                    </div>
                </div>
                <div class="card_bars__2MR5W">
                    <?php
                    foreach ($data as $index => $item) {
                        if ($index <= 5) {
                            echo ' <a href="./index.php?act=detail&id=' . $item['gameid'] . '">
                                        <div class="card_bar__2Jnqx"><img src="./static/img/icon/' . $item['icon'] . '" alt="">
                                            <p>' . $item['gamename'] . '</p>
                                        </div>
                                    </a>';
                        }
                    }
                    ?>


                    <!-- <a href="/games/61c3466f194f98e8c3efef5b">
                                    <div class="card_bar__2Jnqx"><img src="https://cdn2.unrealengine.com/Diesel%2Fproductv2%2Florikeet%2Fhome%2FEGS_WilliamChyrStudio_ManifoldGarden_G1_Screenshot03-Stepwells-1920x1080-3cea659fc5e4b30a47717ae27f63797c47851511.jpg" alt="">
                                        <p>Manifold Garden</p>
                                    </div>
                                </a>
                                <a href="/games/61c3466f194f98e8c3efef5c">
                                    <div class="card_bar__2Jnqx"><img src="https://cdn2.unrealengine.com/egs-prey-arkanestudios-s3-2560x1440-97f55df189f5.jpg?h=720&amp;resize=1&amp;w=1280" alt="">
                                        <p>Prey</p>
                                    </div>
                                </a>
                                <a href="/games/61c3466f194f98e8c3efef5d">
                                    <div class="card_bar__2Jnqx"><img src="https://cdn2.unrealengine.com/Diesel%2Fproduct%2Fweaver%2Frebelgalaxy_primary_promo-2580x1450-6802d1586b9c32276c10073274a3f454f3e783e1.jpg" alt="">
                                        <p>Rebel Galaxy</p>
                                    </div>
                                </a>
                                <a href="/games/61c3466f194f98e8c3efef5e">
                                    <div class="card_bar__2Jnqx"><img src="https://cdn2.unrealengine.com/egs-wolfensteintheoldblood-machinegames-g1a-04-1920x1080-ea123be4b669.jpg?h=720&amp;resize=1&amp;w=1280" alt="">
                                        <p>Wolfenstein: The Old Blood</p>
                                    </div>
                                </a>
                                <a href="/games/61c3466f194f98e8c3efef5f">
                                    <div class="card_bar__2Jnqx"><img src="https://cdn2.unrealengine.com/egs-battlefield2042-dice-g1a-10-1920x1080-481bfd09d082.jpg" alt="">
                                        <p>Battlefield™ 2042</p>
                                    </div>
                                </a> -->
                </div>
            </div>
            <div class="landingPage_mainCardContainer__1UAMb">
                <div class="landingPage_data_cont__2-Xoq">
                    <div class="top-category-slider_top__1dWHS">
                        <div class="top-category-slider_heading_cont__3c9dp">
                            <p class="top-category-slider_heading__3pMgC">Game On Sale</p><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="top-category-slider_arrow__3bj58" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
                            </svg>
                        </div>
                        <div class="top-category-slider_icons__133YT">
                            <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z">
                                        </path>
                                    </g>
                                </svg></div>
                            <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z">
                                        </path>
                                    </g>
                                </svg></div>
                        </div>
                    </div>
                    <div class="mainCardContainer_mainCardContainer__308RZ">
                        <div class="mainCardContainer_container__j2ttT">
                            <?php
                            foreach ($data as $index => $item) {
                                if ($index >= 6 && $index <= 10) {
                                    $sale = $item['sale'];
                                    $gamePrice = $item['price'];
                                    $newPrice = $sale * $gamePrice;
                                    $salePercent = 100 - ($sale * 100);
                                    echo ' <div class="mainCardContainer_card__2_wdK">
                                                <a href="./index.php?act=detail&&id=' . $item['gameid'] . '">
                                                <form action="./index.php?act=addcart" method="post">

                                                <input type="hidden" name="id" value="' . $item['gameid'] . '">
                                                <input type="hidden" name="image" value="./static/img/icon/' . $item['icon'] . '">
                                                <input type="hidden" name="name" value="' . $item['gamename'] . '">
                                                <input type="hidden" name="price" value="' . $item['price'] . '">
                                                <input type="hidden" name="publisher" value="' . $item['publisher'] . '">
                                        
                                               
                                          
                                                    <div class="game-card_card__RBJ5f">
                                                        <div class="game-card_image_div__3GP6O">
                                                        <img src="./static/img/icon/' . $item['icon'] . '">
                                                        <div class="game-card_icon__o86Ds">
                                                            <input type="submit" id="submit" name="submit" value=".">
                                                        </div>
                                                        </div>
                                                        <div class="game-card_info__3_mzD">
                                                            <p class="game-card_title__3klhw">' . $item['gamename'] . '</p>
                                                            <div class="game-card_tagline_cont__2bz4d">
                                                                <p class="game-card_tagline__22z9K">' . $item['developer'] . ' |
                                                                    Private Division</p>
                                                            </div>
                                                        </div>
                                                        <div class="game-card_price__17bNm">
                                                        <div class="price-component_price__3s8s1">
                                                            .''.
                                                            <div class="price-component_blue_button__13OKH">-45%</div>
                                                            <div class="price-component_prev_price__2Pdz0">₹ 595</div>
                                                            <div class="price-component_disounted_price__2aQkW">'.number_format($newPrice).'đ
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    </form>
                                                </a>
                                            </div>';
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="landingPage_secondaryCardContainer__3EDw7">
                <div class="secondaryCardContainer_container__1eNx_">
                    <?php
                    foreach ($data as $index => $item) {
                        if ($index >= 11 & $index <= 12) {
                            echo '   <a href="./index.php?act=detail&&id=' . $item['gameid'] . '">
                                        <form action="./index.php?act=addcart" method="post">

                                            <input type="hidden" name="id" value="' . $item['gameid'] . '">
                                            <input type="hidden" name="image" value="./static/img/icon/' . $item['icon'] . '">
                                            <input type="hidden" name="name" value="' . $item['gamename'] . '">
                                            <input type="hidden" name="price" value="' . $item['price'] . '">
                                            <input type="hidden" name="publisher" value="' . $item['publisher'] . '">
                                            <div class="secondaryCardContainer_card__Zs7RL">
                                                <div class="secondaryCard_card__37jnF">
                                                    <div class="secondaryCard_image_div__K_J4L">
                                                    <img class="secondaryCard_banner__BzAcT" src="./static/img/first-img/' . $item['first-img'] . '" alt="cardImage">
                                                        <div class="game-card_icon__o86Ds">
                                                            <input type="submit" id="submit" name="submit" value=".">
                                                        </div>
                                                    </div>
                                                    <div class="secondaryCard_content__2PuU0">
                                                        <p class="secondaryCard_title__2BECf">' . $item['gamename'] . '</p>
                                                        <div>
                                                            <p class="secondaryCard_description__EaOgH">' . $item['summary'] . '</p>
                                                        </div>
                                                        <div class="secondaryCard_price__8Ht_V">
                                                            <div class="price-component_price__2hStx">
                                                                <div class="price-component_blue_button__15s4b">-10%</div>
                                                                <div class="price-component_prev_price__2cAB1">₹ 559</div>
                                                                <div class="price-component_disounted_price__2bFdX">₹ 504</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </a>';
                        }
                    }

                    ?>
                    <!-- <a href="/games/61c3466f194f98e8c3efef71">
                                    <div class="secondaryCardContainer_card__Zs7RL">
                                        <div class="secondaryCard_card__37jnF">
                                            <div class="secondaryCard_image_div__K_J4L"><img class="secondaryCard_banner__BzAcT" src="https://cdn2.unrealengine.com/Diesel%2Fproductv2%2Fanno-2205%2Fhome%2FATTZF_Edition_Capsule_1920X1080-1920x1080-f195b18a6c4a4a2646e84deaf913a9c5b15f58c3.jpg" alt="cardImage"></div>
                                            <div class="secondaryCard_content__2PuU0">
                                                <p class="secondaryCard_title__2BECf">Anno 1701 Available Now.</p>
                                                <div>
                                                    <p class="secondaryCard_description__EaOgH"> Anno 1701 – the beloved
                                                        city builder takes off into space! Thousands of hours of
                                                        accessible and challenging gameplay</p>
                                                </div>
                                                <div class="secondaryCard_price__8Ht_V">
                                                    <div class="price-component_price__2hStx">
                                                        <div class="price-component_blue_button__15s4b">-75%</div>
                                                        <div class="price-component_prev_price__2cAB1">₹ 1999</div>
                                                        <div class="price-component_disounted_price__2bFdX">₹ 500</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a> -->
                </div>
            </div>
            <div class="landingPage_freeCardContainer__23pUH">
                <div>
                    <div class="freeCardContainer_upper__2Jsi2">
                        <div class="freeCardContainer_icon_div__2yS0Z"><img src="https://epic-games-clone.vercel.app/icons/gift.svg" alt="giftIcon">
                            <p>Free Games</p>
                        </div>
                        <div><button class="freeCardContainer_btn__HvMBN">VIEW MORE</button></div>
                    </div>
                    <div class="freeCardContainer_lower__1ykxY">
                        <?php
                        foreach ($data as $index => $item) {
                            if ($index >= 13 && $index <= 17) {
                                echo '   
                                    <a href="./index.php?act=detail&&id=' . $item['gameid'] . '">
                                        <form action="./index.php?act=addcart" method="post">

                                            <input type="hidden" name="id" value="' . $item['gameid'] . '">
                                            <input type="hidden" name="image" value="' . $item['first-img'] . '">
                                            <input type="hidden" name="name" value="' . $item['gamename'] . '">
                                            <input type="hidden" name="price" value="' . $item['price'] . '">
                                            <input type="hidden" name="publisher" value="' . $item['publisher'] . '">
                                            <div class="freeCardContainer_games_card__3xkQE">
                                                        <div class="freeCardContainer_image_div__1GQj_">
                                                        <img class="freeCardContainer_banner__3cF79" 
                                                        src="./static/img/icon/' . $item['icon'] . '" alt="freeCardImages">
                                                        <div class="game-card_icon__o86Ds">
                                                        <input type="submit" id="submit" name="submit" value=".">
                                                        </div>
                                                            <div class="freeCardContainer_free__16LQ5">Free Now</div>
                                                            <div class="freeCardContainer_coming__HQcXI">Coming Soon</div>
                                                        </div>
                                                <div class="freeCardContainer_content__3nTcE">
                                                    <p class="freeCardContainer_heading__34Fh-">Marvel Guardians of the Galaxy</p>
                                                    <p class="freeCardContainer_subheading__2J3yu">Free Now - Dec 19 at 09:30 PM</p>
                                                </div>
                                            </div>
                                        </form>
                                    </a>
                                    ';
                            }
                        }
                        ?>

                        <!-- <div class="freeCardContainer_games_card__3xkQE">
                                        <div class="freeCardContainer_image_div__1GQj_"><img class="freeCardContainer_banner__3cF79" src="https://cdn1.epicgames.com/salesEvent/salesEvent/OW_Epic_PortraitStorefront_1200x1600-99dad6c305834ce163cabb944d909304?h=854&amp;resize=1&amp;w=640" alt="freeCardImages">
                                            <div class="freeCardContainer_free__16LQ5">Free Now</div>
                                        </div>
                                        <div class="freeCardContainer_content__3nTcE">
                                            <p class="freeCardContainer_heading__34Fh-">Outer Wilds Updated Edition</p>
                                            <p class="freeCardContainer_subheading__2J3yu">Free Now - Dec 09 at 11:11 AM
                                            </p>
                                        </div>
                                    </div>
                                    <div class="freeCardContainer_games_card__3xkQE">
                                        <div class="freeCardContainer_image_div__1GQj_"><img class="freeCardContainer_banner__3cF79" src="https://cdn1.epicgames.com/71e66acf6bb34733bd98514ebf9fcaf8/offer/EGS_ObserverSystemRedux_BlooberTeam_S2-1200x1600-9a24fc78d36d88f8a4217ac75e353539.jpg?h=854&amp;resize=1&amp;w=640" alt="freeCardImages">
                                            <div class="freeCardContainer_coming__HQcXI">Coming Soon</div>
                                        </div>
                                        <div class="freeCardContainer_content__3nTcE">
                                            <p class="freeCardContainer_heading__34Fh-">Observer - New Edition Coming
                                                Soon</p>
                                            <p class="freeCardContainer_subheading__2J3yu">Coming soon - 26 Dec</p>
                                        </div>
                                    </div>
                                    <div class="freeCardContainer_games_card__3xkQE">
                                        <div class="freeCardContainer_image_div__1GQj_"><img class="freeCardContainer_banner__3cF79" src="https://cdn1.epicgames.com/epic/offer/EGS_TheBeardedLadies_CORRUPTION2029_S2-860x1148-86b01bdca8cf7882bae8b27177b40602.jpg?h=854&amp;resize=1&amp;w=640" alt="freeCardImages">
                                            <div class="freeCardContainer_coming__HQcXI">Coming Soon</div>
                                        </div>
                                        <div class="freeCardContainer_content__3nTcE">
                                            <p class="freeCardContainer_heading__34Fh-">Corruption 2029 New Edition</p>
                                            <p class="freeCardContainer_subheading__2J3yu">Coming soon - 11 Jan</p>
                                        </div>
                                    </div> -->
                    </div>
                </div>
            </div>
            <div class="landingPage_minicard__2kOWY">
                <div class="landingPage_miniCardContainer__HWJY-">
                    <div>
                        <div>
                            <p class="mini-card-container_cont_heading__1Z7A6">New Releases</p>
                            <?php
                            foreach ($data as $index => $item) {
                                if ($index >= 18 && $index <= 22) {
                                    echo '   
                                                    <a href="./index.php?act=detail&&id=' . $item['gameid'] . '">
                                                    <form action="./index.php?act=addcart" method="post">

                                                        <input type="hidden" name="id" value="' . $item['gameid'] . '">
                                                        <input type="hidden" name="image" value="' . $item['first-img'] . '">
                                                        <input type="hidden" name="name" value="' . $item['gamename'] . '">
                                                        <input type="hidden" name="price" value="' . $item['price'] . '">
                                                        <input type="hidden" name="publisher" value="' . $item['publisher'] . '">
                                                        <div>
                                                            <div class="mini-card_main__2JYj4">
                                                                <div class="mini-card_image_div__2NgXx">
                                                                  <img src="./static/img/icon/' . $item['icon'] . '" alt="banner">
                                                                  <div class="game-card_icon__o86Ds">
                                                                       <input type="submit" id="submit" name="submit" value=".">
                                                                 </div>
                                                                </div>
                                                                <div class="mini-card_content__2TxHx">
                                                                    <div>
                                                                        <p class="mini-card_heading__33gAB">' . $item['gamename'] . '</p>
                                                                    </div>
                                                                    <div class="mini-card_price__vEBTn">
                                                                        <div class="price-component_price__2hStx">
                                                                            <div class="price-component_blue_button__15s4b">-45%
                                                                            </div>
                                                                            <div class="price-component_prev_price__2cAB1">₹ 595
                                                                            </div>
                                                                            <div class="price-component_disounted_price__2bFdX">₹
                                                                                328</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </a>';
                                }
                            }
                            ?>
                            <!-- <a href="/games/61c3466f194f98e8c3efef5a">
                                                <div>
                                                    <div class="mini-card_main__2JYj4">
                                                        <div class="mini-card_image_div__2NgXx"><img src="https://cdn1.epicgames.com/spt-assets/6dbfe35a26c1465cb72df1f5c0773d86/zelter-66y5m.png?h=270&resize=1&w=480" alt="banner"></div>
                                                        <div class="mini-card_content__2TxHx">
                                                            <div>
                                                                <p class="mini-card_heading__33gAB">Ancestors: The Humankind
                                                                    Odyssey</p>
                                                            </div>
                                                            <div class="mini-card_price__vEBTn">
                                                                <div class="price-component_price__2hStx">
                                                                    <div class="price-component_blue_button__15s4b">Free
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a> -->

                            <!-- <a href="/games/61c3466f194f98e8c3efef5c">
                                                <div>
                                                    <div class="mini-card_main__2JYj4">
                                                        <div class="mini-card_image_div__2NgXx"><img src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_Prey_ArkaneStudios_S2_1200x1600-98e869dbf74a7db4857c4242c044272d?h=854&amp;resize=1&amp;w=640" alt="banner"></div>
                                                        <div class="mini-card_content__2TxHx">
                                                            <div>
                                                                <p class="mini-card_heading__33gAB">Prey</p>
                                                            </div>
                                                            <div class="mini-card_price__vEBTn">
                                                                <div class="price-component_price__2hStx">
                                                                    <div class="price-component_blue_button__15s4b">-50%
                                                                    </div>
                                                                    <div class="price-component_prev_price__2cAB1">₹ 1000
                                                                    </div>
                                                                    <div class="price-component_disounted_price__2bFdX">₹
                                                                        500</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="/games/61c3466f194f98e8c3efef5d">
                                                <div>
                                                    <div class="mini-card_main__2JYj4">
                                                        <div class="mini-card_image_div__2NgXx"><img src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_RedoutSpaceAssault_34BigThings_S2_1200x1600-603e70426ddcef1d2b173917f72e9f27?h=854&amp;resize=1&amp;w=640" alt="banner"></div>
                                                        <div class="mini-card_content__2TxHx">
                                                            <div>
                                                                <p class="mini-card_heading__33gAB">Rebel Galaxy</p>
                                                            </div>
                                                            <div class="mini-card_price__vEBTn">
                                                                <div class="price-component_price__2hStx">
                                                                    <div class="price-component_blue_button__15s4b">-25%
                                                                    </div>
                                                                    <div class="price-component_prev_price__2cAB1">₹ 1179
                                                                    </div>
                                                                    <div class="price-component_disounted_price__2bFdX">₹
                                                                        885</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="/games/61c3466f194f98e8c3efef5e">
                                                <div>
                                                    <div class="mini-card_main__2JYj4">
                                                        <div class="mini-card_image_div__2NgXx"><img src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_WolfensteinTheOldBlood_MachineGames_S4_1200x1600-23a40cd1dccefeceb0c39b1f760bc79e?h=854&amp;resize=1&amp;w=640" alt="banner"></div>
                                                        <div class="mini-card_content__2TxHx">
                                                            <div>
                                                                <p class="mini-card_heading__33gAB">Wolfenstein: The Old
                                                                    Blood</p>
                                                            </div>
                                                            <div class="mini-card_price__vEBTn">
                                                                <div class="price-component_price__2hStx">
                                                                    <div class="price-component_blue_button__15s4b">-25%
                                                                    </div>
                                                                    <div class="price-component_prev_price__2cAB1">₹ 1179
                                                                    </div>
                                                                    <div class="price-component_disounted_price__2bFdX">₹
                                                                        885</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="landingPage_miniCardContainer__HWJY-">
                    <div>
                        <div>
                            <p class="mini-card-container_cont_heading__1Z7A6">Top Sellers</p>
                            <?php
                            foreach ($data as $index => $item) {
                                if ($index >= 23 && $index <= 27) {
                                    echo ' <a href="./index.php?act=detail&&id=' . $item['gameid'] . '">
                                                <form action="./index.php?act=addcart" method="post">

                                                        <input type="hidden" name="id" value="' . $item['gameid'] . '">
                                                        <input type="hidden" name="image" value="' . $item['first-img'] . '">
                                                        <input type="hidden" name="name" value="' . $item['gamename'] . '">
                                                        <input type="hidden" name="price" value="' . $item['price'] . '">
                                                        <input type="hidden" name="publisher" value="' . $item['publisher'] . '">
                                                    <div>
                                                        <div class="mini-card_main__2JYj4">
                                                            <div class="mini-card_image_div__2NgXx">
                                                            <img src="./static/img/icon/' . $item['icon'] . '" alt="banner">
                                                            <div class="game-card_icon__o86Ds">
                                                                 <input type="submit" id="submit" name="submit" value=".">
                                                             </div>
                                                            </div>
                                                            <div class="mini-card_content__2TxHx">
                                                                <div>
                                                                    <p class="mini-card_heading__33gAB">' . $item['gamename'] . '</p>
                                                                </div>
                                                                <div class="mini-card_price__vEBTn">
                                                                    <div class="price-component_price__2hStx">
                                                                        <div class="price-component_blue_button__15s4b">-10%
                                                                        </div>
                                                                        <div class="price-component_prev_price__2cAB1">₹ 349
                                                                        </div>
                                                                        <div class="price-component_disounted_price__2bFdX">₹
                                                                            315</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </a>';
                                }
                            }
                            ?>
                            <!-- <a href="/games/61c3466f194f98e8c3efef6a">
                                            <div>
                                                <div class="mini-card_main__2JYj4">
                                                    <div class="mini-card_image_div__2NgXx"><img src="https://cdn1.epicgames.com/spt-assets/ec4f866d28344e018a4d6b01ae7efdc6/download-street-striker-offer-3jy90.png?h=854&amp;resize=1&amp;w=640" alt="banner"></div>
                                                    <div class="mini-card_content__2TxHx">
                                                        <div>
                                                            <p class="mini-card_heading__33gAB">Street Striker</p>
                                                        </div>
                                                        <div class="mini-card_price__vEBTn">
                                                            <div class="price-component_price__2hStx">
                                                                <div class="price-component_blue_button__15s4b">-10%
                                                                </div>
                                                                <div class="price-component_prev_price__2cAB1">₹ 1500
                                                                </div>
                                                                <div class="price-component_disounted_price__2bFdX">₹
                                                                    1350</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/games/61c3466f194f98e8c3efef6b">
                                            <div>
                                                <div class="mini-card_main__2JYj4">
                                                    <div class="mini-card_image_div__2NgXx"><img src="https://cdn1.epicgames.com/b6b2ef0cc19a4adaaa1cf6c7ed000dfa/offer/EGS_GodfallDeluxeEdition_CounterplayGames_Editions_S2-1200x1600-cf6fd58587ad8e228c7253e3094c4879.jpg" alt="banner"></div>
                                                    <div class="mini-card_content__2TxHx">
                                                        <div>
                                                            <p class="mini-card_heading__33gAB">Godfall Deluxe Edition
                                                            </p>
                                                        </div>
                                                        <div class="mini-card_price__vEBTn">
                                                            <div class="price-component_price__2hStx">
                                                                <div class="price-component_blue_button__15s4b">-23%
                                                                </div>
                                                                <div class="price-component_prev_price__2cAB1">₹ 692
                                                                </div>
                                                                <div class="price-component_disounted_price__2bFdX">₹
                                                                    533</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/games/61c3466f194f98e8c3efef6c">
                                            <div>
                                                <div class="mini-card_main__2JYj4">
                                                    <div class="mini-card_image_div__2NgXx"><img src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_ChromaGun_PixelManiacs_S2_1200x1600-08050de046d806741411675a7ca51eb6?h=854&amp;resize=1&amp;w=640" alt="banner"></div>
                                                    <div class="mini-card_content__2TxHx">
                                                        <div>
                                                            <p class="mini-card_heading__33gAB">ChromaGun</p>
                                                        </div>
                                                        <div class="mini-card_price__vEBTn">
                                                            <div class="price-component_price__2hStx">
                                                                <div class="price-component_blue_button__15s4b">-5%
                                                                </div>
                                                                <div class="price-component_prev_price__2cAB1">₹ 309
                                                                </div>
                                                                <div class="price-component_disounted_price__2bFdX">₹
                                                                    294</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/games/61c3466f194f98e8c3efef6d">
                                            <div>
                                                <div class="mini-card_main__2JYj4">
                                                    <div class="mini-card_image_div__2NgXx"><img src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_whileTruelearn_Ludenio_S2_1200x1600-f1259b2f801db59d751dd5e5076b6330?h=854&amp;resize=1&amp;w=640" alt="banner"></div>
                                                    <div class="mini-card_content__2TxHx">
                                                        <div>
                                                            <p class="mini-card_heading__33gAB">while True: learn ()</p>
                                                        </div>
                                                        <div class="mini-card_price__vEBTn">
                                                            <div class="price-component_price__2hStx">
                                                                <div class="price-component_blue_button__15s4b">-10%
                                                                </div>
                                                                <div class="price-component_prev_price__2cAB1">₹ 809
                                                                </div>
                                                                <div class="price-component_disounted_price__2bFdX">₹
                                                                    729</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a> -->
                        </div>
                    </div>
                </div>
                <div class="landingPage_miniCardContainer__HWJY-">
                    <div>
                        <div>
                            <p class="mini-card-container_cont_heading__1Z7A6">Holiday Sale</p>
                            <?php
                            foreach ($data as $index => $item) {
                                if ($index >= 28 && $index <= 32) {
                                    echo '<a href="./index.php?act=detail&&id=' . $item['gameid'] . '">
                                           <form action="./index.php?act=addcart" method="post">

                                                <input type="hidden" name="id" value="' . $item['gameid'] . '">
                                                <input type="hidden" name="image" value="' . $item['first-img'] . '">
                                                <input type="hidden" name="name" value="' . $item['gamename'] . '">
                                                <input type="hidden" name="price" value="' . $item['price'] . '">
                                                <input type="hidden" name="publisher" value="' . $item['publisher'] . '">
                                                    <div>
                                                        <div class="mini-card_main__2JYj4">
                                                            <div class="mini-card_image_div__2NgXx">
                                                                 <img src="./static/img/icon/' . $item['icon'] . '" alt="banner">
                                                            <div class="game-card_icon__o86Ds">
                                                                 <input type="submit" id="submit" name="submit" value=".">
                                                             </div>
                                                            </div>
                                                            <div class="mini-card_content__2TxHx">
                                                                <div>
                                                                    <p class="mini-card_heading__33gAB">' . $item['gamename'] . '</p>
                                                                </div>
                                                                <div class="mini-card_price__vEBTn">
                                                                    <div class="price-component_price__2hStx">
                                                                        <div class="price-component_blue_button__15s4b">-10%
                                                                        </div>
                                                                        <div class="price-component_prev_price__2cAB1">₹ 999
                                                                        </div>
                                                                        <div class="price-component_disounted_price__2bFdX">₹
                                                                            900</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </a>';
                                }
                            }
                            ?>
                            <!-- <a href="/games/61c3466f194f98e8c3efef65">
                                            <div>
                                                <div class="mini-card_main__2JYj4">
                                                    <div class="mini-card_image_div__2NgXx"><img src="https://cdn1.epicgames.com/0a84818055e740a7be21a2e5b6162703/offer/WatchDogs_Legion_Store_Portrait_1200x1600-1200x1600-a6b2d4cce489aeeb87bad4a6db168bed.jpg?h=854&amp;resize=1&amp;w=640" alt="banner"></div>
                                                    <div class="mini-card_content__2TxHx">
                                                        <div>
                                                            <p class="mini-card_heading__33gAB">Watch Dogs: Legion</p>
                                                        </div>
                                                        <div class="mini-card_price__vEBTn">
                                                            <div class="price-component_price__2hStx">
                                                                <div class="price-component_blue_button__15s4b">-10%
                                                                </div>
                                                                <div class="price-component_prev_price__2cAB1">₹ 999
                                                                </div>
                                                                <div class="price-component_disounted_price__2bFdX">₹
                                                                    900</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/games/61c3466f194f98e8c3efef66">
                                            <div>
                                                <div class="mini-card_main__2JYj4">
                                                    <div class="mini-card_image_div__2NgXx"><img src="https://cdn1.epicgames.com/offer/a7e2a2c51b9149c097b771926ed91877/EGS_FISTForgedInShadowTorch_TiGames_S6_1200x1600-b0ce396c042359ad9a7b2ca50726cac1?h=854&amp;resize=1&amp;w=640" alt="banner"></div>
                                                    <div class="mini-card_content__2TxHx">
                                                        <div>
                                                            <p class="mini-card_heading__33gAB">F.I.S.T.: Forged In
                                                                Shadow Torch</p>
                                                        </div>
                                                        <div class="mini-card_price__vEBTn">
                                                            <div class="price-component_price__2hStx">
                                                                <div class="price-component_blue_button__15s4b">-26%
                                                                </div>
                                                                <div class="price-component_prev_price__2cAB1">₹ 1299
                                                                </div>
                                                                <div class="price-component_disounted_price__2bFdX">₹
                                                                    962</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/games/61c3466f194f98e8c3efef67">
                                            <div>
                                                <div class="mini-card_main__2JYj4">
                                                    <div class="mini-card_image_div__2NgXx"><img src="https://cdn1.epicgames.com/offer/bd46d4ce259349e5bd8b3ded20274737/EGS_Chivalry2_TornBannerStudios_S2_1200x1600-eb2e6db88cbcc42e13c091eb8a656a29?h=854&amp;resize=1&amp;w=640" alt="banner"></div>
                                                    <div class="mini-card_content__2TxHx">
                                                        <div>
                                                            <p class="mini-card_heading__33gAB">Chivalry 2</p>
                                                        </div>
                                                        <div class="mini-card_price__vEBTn">
                                                            <div class="price-component_price__2hStx">
                                                                <div class="price-component_blue_button__15s4b">-35%
                                                                </div>
                                                                <div class="price-component_prev_price__2cAB1">₹ 934
                                                                </div>
                                                                <div class="price-component_disounted_price__2bFdX">₹
                                                                    608</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/games/61c3466f194f98e8c3efef68">
                                            <div>
                                                <div class="mini-card_main__2JYj4">
                                                    <div class="mini-card_image_div__2NgXx"><img src="https://cdn1.epicgames.com/salesEvent/salesEvent/amogusportrait_1200x1600-66ad0e4d363e1c92f9f8aae67a96dd31?h=854&amp;resize=1&amp;w=640" alt="banner"></div>
                                                    <div class="mini-card_content__2TxHx">
                                                        <div>
                                                            <p class="mini-card_heading__33gAB">Among Us</p>
                                                        </div>
                                                        <div class="mini-card_price__vEBTn">
                                                            <div class="price-component_price__2hStx">
                                                                <div class="price-component_disounted_price__2bFdX">₹
                                                                    119</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="landingPage_secondaryCardContainer__3EDw7">
                <div class="secondaryCardContainer_container__1eNx_">
                    <a href="/games/61c3466f194f98e8c3efef61">
                        <div class="secondaryCardContainer_card__Zs7RL">
                            <div class="secondaryCard_card__37jnF">
                                <div class="secondaryCard_image_div__K_J4L"><img class="secondaryCard_banner__BzAcT" src="https://cdn2.unrealengine.com/egs-tribesofmidgard-norsfell-g1a-00-12-13-21-1920x1080-cd9a4b01fbb6.jpg" alt="cardImage"></div>
                                <div class="secondaryCard_content__2PuU0">
                                    <p class="secondaryCard_title__2BECf">Tribes of Midgard Available Now.
                                    </p>
                                    <div>
                                        <p class="secondaryCard_description__EaOgH"> Form a tribe with up to
                                            10 players to defend your village from the relentless onslaught
                                            of deadly spirits and gigantic brutes Hel-bent on bringing on
                                            the end of the world.</p>
                                    </div>
                                    <div class="secondaryCard_price__8Ht_V">
                                        <div class="price-component_price__2hStx">
                                            <div class="price-component_blue_button__15s4b">-50%</div>
                                            <div class="price-component_prev_price__2cAB1">₹ 699</div>
                                            <div class="price-component_disounted_price__2bFdX">₹ 350</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/games/61c3466f194f98e8c3efef64">
                        <div class="secondaryCardContainer_card__Zs7RL">
                            <div class="secondaryCard_card__37jnF">
                                <div class="secondaryCard_image_div__K_J4L"><img class="secondaryCard_banner__BzAcT" src="https://cdn2.unrealengine.com/egs-onehandclapping-baddreamgames-s1-2560x1440-f6c000c0a317.jpg?h=720&amp;resize=1&amp;w=1280" alt="cardImage"></div>
                                <div class="secondaryCard_content__2PuU0">
                                    <p class="secondaryCard_title__2BECf">One Hand Clapping Available Now.
                                    </p>
                                    <div>
                                        <p class="secondaryCard_description__EaOgH"> One Hand Clapping is a
                                            2D platformer that invites you to sing into your microphone to
                                            solve musical puzzles and discover the power of your voice as it
                                            changes the world.</p>
                                    </div>
                                    <div class="secondaryCard_price__8Ht_V">
                                        <div class="price-component_price__2hStx">
                                            <div class="price-component_blue_button__15s4b">Free</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="landingPage_mainCardContainer__1UAMb">
                <div class="landingPage_data_cont__2-Xoq">
                    <div class="top-category-slider_top__1dWHS">
                        <div class="top-category-slider_heading_cont__3c9dp">
                            <p class="top-category-slider_heading__3pMgC">Recently Updated</p><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="top-category-slider_arrow__3bj58" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
                            </svg>
                        </div>
                        <div class="top-category-slider_icons__133YT">
                            <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z">
                                        </path>
                                    </g>
                                </svg></div>
                            <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z">
                                        </path>
                                    </g>
                                </svg></div>
                        </div>
                    </div>
                    <div class="mainCardContainer_mainCardContainer__308RZ">
                        <div class="mainCardContainer_container__j2ttT">
                            <div class="mainCardContainer_card__2_wdK">

                                <a href="/games/61c3466f194f98e8c3efef5f">
                                    <div class="game-card_card__RBJ5f">
                                        <div class="game-card_image_div__3GP6O"><img src="https://cdn1.epicgames.com/offer/52f57f57120c440fad9bfa0e6c279317/EGS_Battlefield2042_DICE_S2_1200x1600-331f59b6877d2bf2194943fcf7a68048_1200x1600-331f59b6877d2bf2194943fcf7a68048?h=854&amp;resize=1&amp;w=640" alt="Battlefield™ 2042">
                                            <div class="game-card_icon__o86Ds"><img src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt="icon"></div>
                                        </div>
                                        <div class="game-card_info__3_mzD">
                                            <p class="game-card_title__3klhw">Battlefield™ 2042</p>
                                            <div class="game-card_tagline_cont__2bz4d">
                                                <p class="game-card_tagline__22z9K">DICE | Electronic Art
                                                </p>
                                            </div>
                                        </div>
                                        <div class="game-card_price__17bNm">
                                            <div class="price-component_price__3s8s1">
                                                <div class="price-component_blue_button__13OKH">-34%</div>
                                                <div class="price-component_prev_price__2Pdz0">₹ 1979</div>
                                                <div class="price-component_disounted_price__2aQkW">₹ 1307
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mainCardContainer_card__2_wdK">
                                <a href="/games/61c3466f194f98e8c3efef60">
                                    <div class="game-card_card__RBJ5f">
                                        <div class="game-card_image_div__3GP6O"><img src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_Wolfstride_OTAIMONStudios_S2_1200x1600-14373bfd96e9b6a77e4a41925cc90030?h=854&amp;resize=1&amp;w=640" alt="Wolfstride">
                                            <div class="game-card_icon__o86Ds"><img src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt="icon"></div>
                                        </div>
                                        <div class="game-card_info__3_mzD">
                                            <p class="game-card_title__3klhw">Wolfstride</p>
                                            <div class="game-card_tagline_cont__2bz4d">
                                                <p class="game-card_tagline__22z9K">OTA IMON Studios | Raw
                                                    Fury </p>
                                            </div>
                                        </div>
                                        <div class="game-card_price__17bNm">
                                            <div class="price-component_price__3s8s1">
                                                <div class="price-component_blue_button__13OKH">-10%</div>
                                                <div class="price-component_prev_price__2Pdz0">₹ 349</div>
                                                <div class="price-component_disounted_price__2aQkW">₹ 315
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mainCardContainer_card__2_wdK">
                                <a href="/games/61c3466f194f98e8c3efef61">
                                    <div class="game-card_card__RBJ5f">
                                        <div class="game-card_image_div__3GP6O"><img src="https://cdn1.epicgames.com/offer/6774af9524fe4f63b2a6717d04269cd6/EGS_TribesofMidgard_Norsfell_S2_12_1200x1600-c4a5986e60d17828ad1f0d5b9d6fdcc1?h=854&amp;resize=1&amp;w=640" alt="Tribes of Midgard">
                                            <div class="game-card_icon__o86Ds"><img src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt="icon"></div>
                                        </div>
                                        <div class="game-card_info__3_mzD">
                                            <p class="game-card_title__3klhw">Tribes of Midgard</p>
                                            <div class="game-card_tagline_cont__2bz4d">
                                                <p class="game-card_tagline__22z9K">Gros Chevaux | Gros
                                                    Chevaux</p>
                                            </div>
                                        </div>
                                        <div class="game-card_price__17bNm">
                                            <div class="price-component_price__3s8s1">
                                                <div class="price-component_blue_button__13OKH">-50%</div>
                                                <div class="price-component_prev_price__2Pdz0">₹ 699</div>
                                                <div class="price-component_disounted_price__2aQkW">₹ 350
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mainCardContainer_card__2_wdK">
                                <a href="/games/61c3466f194f98e8c3efef62">
                                    <div class="game-card_card__RBJ5f">
                                        <div class="game-card_image_div__3GP6O"><img src="https://cdn1.epicgames.com/b0ebefb11a9145488af78f6d2488afff/offer/EGS_NeonAbyss_VeewoGames_S2-1200x1600-938641f8dd1d12f01c673524e11866d0.jpg?h=854&amp;resize=1&amp;w=640" alt="Neon Abyss">
                                            <div class="game-card_icon__o86Ds"><img src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt="icon"></div>
                                        </div>
                                        <div class="game-card_info__3_mzD">
                                            <p class="game-card_title__3klhw">Neon Abyss</p>
                                            <div class="game-card_tagline_cont__2bz4d">
                                                <p class="game-card_tagline__22z9K">Veewo Games | Team17
                                                    Digital Ltd</p>
                                            </div>
                                        </div>
                                        <div class="game-card_price__17bNm">
                                            <div class="price-component_price__3s8s1">
                                                <div class="price-component_blue_button__13OKH">-80%</div>
                                                <div class="price-component_prev_price__2Pdz0">₹ 1225</div>
                                                <div class="price-component_disounted_price__2aQkW">₹ 245
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mainCardContainer_card__2_wdK">
                                <a href="/games/61c3466f194f98e8c3efef63">
                                    <div class="game-card_card__RBJ5f">
                                        <div class="game-card_image_div__3GP6O"><img src="https://cdn1.epicgames.com/epic/offer/EGS_TheBeardedLadies_CORRUPTION2029_S2-860x1148-86b01bdca8cf7882bae8b27177b40602.jpg?h=854&amp;resize=1&amp;w=640" alt="Corruption 2029">
                                            <div class="game-card_icon__o86Ds"><img src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt="icon"></div>
                                        </div>
                                        <div class="game-card_info__3_mzD">
                                            <p class="game-card_title__3klhw">Corruption 2029</p>
                                            <div class="game-card_tagline_cont__2bz4d">
                                                <p class="game-card_tagline__22z9K">The Bearded Ladies | The
                                                    Bearded Ladies</p>
                                            </div>
                                        </div>
                                        <div class="game-card_price__17bNm">
                                            <div class="price-component_price__3s8s1">
                                                <div class="price-component_blue_button__13OKH">-10%</div>
                                                <div class="price-component_prev_price__2Pdz0">₹ 559</div>
                                                <div class="price-component_disounted_price__2aQkW">₹ 504
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="landingPage_mainCardContainer__1UAMb">
                <div class="landingPage_data_cont__2-Xoq">
                    <div class="top-category-slider_top__1dWHS">
                        <div class="top-category-slider_heading_cont__3c9dp">
                            <p class="top-category-slider_heading__3pMgC">Holiday Sale Spotlight</p><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="top-category-slider_arrow__3bj58" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
                            </svg>
                        </div>
                        <div class="top-category-slider_icons__133YT">
                            <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z">
                                        </path>
                                    </g>
                                </svg></div>
                            <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z">
                                        </path>
                                    </g>
                                </svg></div>
                        </div>
                    </div>
                    <div class="mainCardContainer_mainCardContainer__308RZ">
                        <div class="mainCardContainer_container__j2ttT">
                            <div class="mainCardContainer_card__2_wdK"><a href="/games/61c3466f194f98e8c3efef69">
                                    <div class="game-card_card__RBJ5f">
                                        <div class="game-card_image_div__3GP6O"><img src="https://cdn1.epicgames.com/offer/bc00696af836471cbacfd496e9e5f877/EGS_Unspottable_GrosChevaux_S2_1200x1600-1cbb009ccd899f1f40cf290c7906fac3?h=854&amp;resize=1&amp;w=640" alt="Unspottable">
                                            <div class="game-card_icon__o86Ds"><img src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt="icon"></div>
                                        </div>
                                        <div class="game-card_info__3_mzD">
                                            <p class="game-card_title__3klhw">Unspottable</p>
                                            <div class="game-card_tagline_cont__2bz4d">
                                                <p class="game-card_tagline__22z9K">Gros Chevaux | Gros
                                                    Chevaux</p>
                                            </div>
                                        </div>
                                        <div class="game-card_price__17bNm">
                                            <div class="price-component_price__3s8s1">
                                                <div class="price-component_blue_button__13OKH">-10%</div>
                                                <div class="price-component_prev_price__2Pdz0">₹ 349</div>
                                                <div class="price-component_disounted_price__2aQkW">₹ 315
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="mainCardContainer_card__2_wdK"><a href="/games/61c3466f194f98e8c3efef6a">
                                    <div class="game-card_card__RBJ5f">
                                        <div class="game-card_image_div__3GP6O"><img src="https://cdn1.epicgames.com/spt-assets/ec4f866d28344e018a4d6b01ae7efdc6/download-street-striker-offer-3jy90.png?h=854&amp;resize=1&amp;w=640" alt="Street Striker">
                                            <div class="game-card_icon__o86Ds"><img src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt="icon"></div>
                                        </div>
                                        <div class="game-card_info__3_mzD">
                                            <p class="game-card_title__3klhw">Street Striker</p>
                                            <div class="game-card_tagline_cont__2bz4d">
                                                <p class="game-card_tagline__22z9K">Behaviour Interactive |
                                                    Behaviour Interactive</p>
                                            </div>
                                        </div>
                                        <div class="game-card_price__17bNm">
                                            <div class="price-component_price__3s8s1">
                                                <div class="price-component_blue_button__13OKH">-10%</div>
                                                <div class="price-component_prev_price__2Pdz0">₹ 1500</div>
                                                <div class="price-component_disounted_price__2aQkW">₹ 1350
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="mainCardContainer_card__2_wdK"><a href="/games/61c3466f194f98e8c3efef6b">
                                    <div class="game-card_card__RBJ5f">
                                        <div class="game-card_image_div__3GP6O"><img src="https://cdn1.epicgames.com/b6b2ef0cc19a4adaaa1cf6c7ed000dfa/offer/EGS_GodfallDeluxeEdition_CounterplayGames_Editions_S2-1200x1600-cf6fd58587ad8e228c7253e3094c4879.jpg" alt="Godfall Deluxe Edition">
                                            <div class="game-card_icon__o86Ds"><img src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt="icon"></div>
                                        </div>
                                        <div class="game-card_info__3_mzD">
                                            <p class="game-card_title__3klhw">Godfall Deluxe Edition</p>
                                            <div class="game-card_tagline_cont__2bz4d">
                                                <p class="game-card_tagline__22z9K">Counterplay Games |
                                                    Gearbox Publishin</p>
                                            </div>
                                        </div>
                                        <div class="game-card_price__17bNm">
                                            <div class="price-component_price__3s8s1">
                                                <div class="price-component_blue_button__13OKH">-23%</div>
                                                <div class="price-component_prev_price__2Pdz0">₹ 692</div>
                                                <div class="price-component_disounted_price__2aQkW">₹ 533
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="mainCardContainer_card__2_wdK"><a href="/games/61c3466f194f98e8c3efef6c">
                                    <div class="game-card_card__RBJ5f">
                                        <div class="game-card_image_div__3GP6O"><img src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_ChromaGun_PixelManiacs_S2_1200x1600-08050de046d806741411675a7ca51eb6?h=854&amp;resize=1&amp;w=640" alt="ChromaGun">
                                            <div class="game-card_icon__o86Ds"><img src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt="icon"></div>
                                        </div>
                                        <div class="game-card_info__3_mzD">
                                            <p class="game-card_title__3klhw">ChromaGun</p>
                                            <div class="game-card_tagline_cont__2bz4d">
                                                <p class="game-card_tagline__22z9K">Pixel Maniacs | Pixel
                                                    Maniacs</p>
                                            </div>
                                        </div>
                                        <div class="game-card_price__17bNm">
                                            <div class="price-component_price__3s8s1">
                                                <div class="price-component_blue_button__13OKH">-5%</div>
                                                <div class="price-component_prev_price__2Pdz0">₹ 309</div>
                                                <div class="price-component_disounted_price__2aQkW">₹ 294
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="mainCardContainer_card__2_wdK"><a href="/games/61c3466f194f98e8c3efef6d">
                                    <div class="game-card_card__RBJ5f">
                                        <div class="game-card_image_div__3GP6O"><img src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_whileTruelearn_Ludenio_S2_1200x1600-f1259b2f801db59d751dd5e5076b6330?h=854&amp;resize=1&amp;w=640" alt="while True: learn ()">
                                            <div class="game-card_icon__o86Ds"><img src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt="icon"></div>
                                        </div>
                                        <div class="game-card_info__3_mzD">
                                            <p class="game-card_title__3klhw">while True: learn ()</p>
                                            <div class="game-card_tagline_cont__2bz4d">
                                                <p class="game-card_tagline__22z9K">Luden.io | Nival</p>
                                            </div>
                                        </div>
                                        <div class="game-card_price__17bNm">
                                            <div class="price-component_price__3s8s1">
                                                <div class="price-component_blue_button__13OKH">-10%</div>
                                                <div class="price-component_prev_price__2Pdz0">₹ 809</div>
                                                <div class="price-component_disounted_price__2aQkW">₹ 729
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="browseLink_container__s0CA9">
                <div class="browseLink_image_div__2iSFQ"><img src="https://cdn2.unrealengine.com/egs-browsebreaker-no-cn-1280x960-1280x960-d86fc25f7c83.png" alt="browse"></div>
                <div>
                    <p class="browseLink_heading__1qI3f">Browse</p>
                    <p class="browseLink_subheading__33DXX">Explore our catalog for your next favorite game!
                    </p><a href="/browse"><button class="browseLink_btn__1vcqd">Learn More</button></a>
                </div>
            </div>
        </div>
    </div>
</div>