<?php
include_once "./static/model/connectdb.php";
include_once "./static/model/gameModel.php";
include_once "./static/model/query.php";
$data = product();

$conn = openConnection();
?>

<div class="landingPage_main__27pL-">
    <div class="landingPage_landing_container__25-Jq">
        <div>
            <div class="card_main__11554">
                <div class="carousel-root">
                    <div class="carousel carousel-slider" style="width: 100%;">
                        <ul class="control-dots">
                            <li class="dot selected" value="0" role="button" tabindex="0" aria-label="slide item 1">
                            </li>
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
                        </ul><button type="button" aria-label="previous slide / item"
                            class="control-arrow control-prev"></button>
                        <div class="slider-wrapper axis-horizontal">
                            <ul class="slider animated"
                                style="transform: translate3d(0%, 0px, 0px); transition-duration: 500ms;">
                                <?php
                                foreach ($data as $index => $item) {
                                    if ($index <= 5) {
                                        echo ' <li class="slide"><a href="./index.php?act=detail&id=' . $item['gameid'] . '">
                                            <div><img src="./static/img/first-img/' . $item['first-img'] . '" alt="" class="image">
                                                <div class="legend" id="legend">
                                                    <p class="main__carousel__tag">SAVE 45% ON Manifold Garden
                                                    </p>
                                                    <p class="main__carousel__description">' . $item['summary'] . '</p>
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
                            </ul>
                        </div><button type="button" aria-label="next slide / item"
                            class="control-arrow control-next"></button>
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
                </div>
            </div>
            <div class="landingPage_mainCardContainer__1UAMb">
                <div class="landingPage_data_cont__2-Xoq">
                    <div class="top-category-slider_top__1dWHS">
                        <div class="top-category-slider_heading_cont__3c9dp">
                            <p class="top-category-slider_heading__3pMgC">Game On Sale</p><svg stroke="currentColor"
                                fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                class="top-category-slider_arrow__3bj58" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
                            </svg>
                        </div>
                        <div class="top-category-slider_icons__133YT">
                            <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z">
                                        </path>
                                    </g>
                                </svg></div>
                            <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
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
                            $saleGameResult = query($conn, 'SELECT * from game g where sale != 0 LIMIT 5');
                            if ($saleGameResult->num_rows > 0) {
                                while ($saleGame = $saleGameResult->fetch_assoc()) {
                                    $gameName = $saleGame['gamename'];
                                    $sale = $saleGame['sale'];
                                    $gamePrice = $saleGame['price'];
                                    $priceHtml = "";
                                    if ($gamePrice == 0) {
                                        $priceHtml = '<div class="price-component_blue_button__13OKH">Free</div>';
                                    } else {
                                        if ($sale != 0) {
                                            $newPrice = $sale * $gamePrice;
                                            $salePercent = 100 - $sale * 100;
                                            $priceHtml = '<div class="price-component_blue_button__13OKH">-' . $salePercent . '%</div>'
                                                . '<div class="price-component_prev_price__2Pdz0">₫' . number_format($gamePrice) . '</div>'
                                                . '<div class="price-component_disounted_price__2aQkW">₫' . number_format($newPrice) . '</div>';
                                        } else {
                                            $priceHtml = '<div class="price-component_disounted_price__2aQkW">₫' . number_format($gamePrice) . ' </div>';
                                        }
                                    }
                                    echo ' <div class="mainCardContainer_card__2_wdK">
                                                <a href="./index.php?act=detail&&id=' . $saleGame['gameid'] . '">                                                
                                                    <div class="game-card_card__RBJ5f">
                                                        <div class="game-card_image_div__3GP6O">
                                                        <img src="./static/img/icon/' . $saleGame['icon'] . '">
                                                        <div class="game-card_icon__o86Ds">
                                                            <input type="submit" id="submit" name="submit" value=".">
                                                        </div>
                                                        </div>
                                                        <div class="game-card_info__3_mzD">
                                                            <p class="game-card_title__3klhw">' . $saleGame['gamename'] . '</p>
                                                            <div class="game-card_tagline_cont__2bz4d">
                                                                <p class="game-card_tagline__22z9K">' . $saleGame['developer'] . ' |
                                                                    Private Division</p>
                                                            </div>
                                                        </div>
                                                        <div class="game-card_price__17bNm">
                                                        <div class="price-component_price__3s8s1">
                                                            ' . $priceHtml . '
                                                        </div>
                                                    </div>
                                                    </div>
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
                            $gameName = $item['gamename'];
                            $sale = $item['sale'];
                            $gamePrice = $item['price'];
                            $priceHtml = "";
                            if ($gamePrice == 0) {
                                $priceHtml = '<div class="price-component_blue_button__13OKH">Free</div>';
                            } else {
                                if ($sale != 0) {
                                    $newPrice = $sale * $gamePrice;
                                    $salePercent = 100 - $sale * 100;
                                    $priceHtml = '<div class="price-component_blue_button__13OKH">-' . $salePercent . '%</div>'
                                        . '<div class="price-component_prev_price__2Pdz0">₫' . number_format($gamePrice) . '</div>'
                                        . '<div class="price-component_disounted_price__2aQkW">₫' . number_format($newPrice) . '</div>';
                                } else {
                                    $priceHtml = '<div class="price-component_disounted_price__2aQkW">₫' . number_format($gamePrice) . '</div>';
                                }
                            }
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
                                                                ' . $priceHtml . '
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
                </div>
            </div>
            <div class="landingPage_freeCardContainer__23pUH">
                <div>
                    <div class="freeCardContainer_upper__2Jsi2">
                        <div class="freeCardContainer_icon_div__2yS0Z"><img
                                src="https://epic-games-clone.vercel.app/icons/gift.svg" alt="giftIcon">
                            <p>Free Games</p>
                        </div>
                        <div><button class="freeCardContainer_btn__HvMBN">VIEW MORE</button></div>
                    </div>
                    <div class="freeCardContainer_lower__1ykxY">
                        <?php

                        $freeGameResult = query($conn, 'SELECT * from game g where price = 0 LIMIT 5');
                        if ($freeGameResult->num_rows > 0) {
                            while ($freeGame = $freeGameResult->fetch_assoc()) {
                                echo '   
                                    <a href="./index.php?act=detail&&id=' . $freeGame['gameid'] . '">
                                     
                                            <div class="freeCardContainer_games_card__3xkQE">
                                                    <div class="freeCardContainer_image_div__1GQj_">
                                                    <img class="freeCardContainer_banner__3cF79" 
                                                    src="./static/img/icon/' . $freeGame['icon'] . '" alt="freeCardImages">
                                                    <div class="game-card_icon__o86Ds">
                                                    <input type="submit" id="submit" name="submit" value=".">
                                                </div>
                                                    <div class="game-card_icon__o86Ds">
                                                        </div>
                                                            <div class="freeCardContainer_free__16LQ5">Free Now</div>
                                                            <div class="freeCardContainer_coming__HQcXI">Coming Soon</div>
                                                        </div>
                                                <div class="freeCardContainer_content__3nTcE">
                                                    <p class="freeCardContainer_heading__34Fh-">' . $freeGame['gamename'] . '</p>
                                                    <p class="freeCardContainer_subheading__2J3yu">Free Now - Dec 19 at 09:30 PM</p>
                                                </div>
                                            </div>
                                    </a>
                                    ';
                            }
                        }
                        ?>
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
                                    $gameName = $item['gamename'];
                                    $sale = $item['sale'];
                                    $gamePrice = $item['price'];
                                    $priceHtml = "";
                                    if ($gamePrice == 0) {
                                        $priceHtml = '<div class="price-component_blue_button__13OKH">Free</div>';
                                    } else {
                                        if ($sale != 0) {
                                            $newPrice = $sale * $gamePrice;
                                            $salePercent = 100 - $sale * 100;
                                            $priceHtml = '<div class="price-component_blue_button__13OKH">-' . $salePercent . '%</div>'
                                                . '<div class="price-component_prev_price__2Pdz0">₫' . number_format($gamePrice) . '</div>'
                                                . '<div class="price-component_disounted_price__2aQkW">₫' . number_format($newPrice) . '</div>';
                                        } else {
                                            $priceHtml = '<div class="price-component_disounted_price__2aQkW">₫' . number_format($gamePrice) . '</div>';
                                        }
                                    }
                                    echo '   
                                                <a href="./index.php?act=detail&&id=' . $item['gameid'] . '">
                                                    
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
                                                                            ' . $priceHtml . '
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </a>';
                                }
                            }
                            ?>
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
                                    $gameName = $item['gamename'];
                                    $sale = $item['sale'];
                                    $gamePrice = $item['price'];
                                    $priceHtml = "";
                                    if ($gamePrice == 0) {
                                        $priceHtml = '<div class="price-component_blue_button__13OKH">Free</div>';
                                    } else {
                                        if ($sale != 0) {
                                            $newPrice = $sale * $gamePrice;
                                            $salePercent = 100 - $sale * 100;
                                            $priceHtml = '<div class="price-component_blue_button__13OKH">-' . $salePercent . '%</div>'
                                                . '<div class="price-component_prev_price__2Pdz0">₫' . number_format($gamePrice) . '</div>'
                                                . '<div class="price-component_disounted_price__2aQkW">₫' . number_format($newPrice) . '</div>';
                                        } else {
                                            $priceHtml = '<div class="price-component_disounted_price__2aQkW">₫' . number_format($gamePrice) . '</div>';
                                        }
                                    }
                                    echo ' <a href="./index.php?act=detail&&id=' . $item['gameid'] . '">                                        
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
                                                                ' . $priceHtml . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </a>';
                                }
                            }
                            ?>
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
                                    $gameName = $item['gamename'];
                                    $sale = $item['sale'];
                                    $gamePrice = $item['price'];
                                    $priceHtml = "";
                                    if ($gamePrice == 0) {
                                        $priceHtml = '<div class="price-component_blue_button__13OKH">Free</div>';
                                    } else {
                                        if ($sale != 0) {
                                            $newPrice = $sale * $gamePrice;
                                            $salePercent = 100 - $sale * 100;
                                            $priceHtml = '<div class="price-component_blue_button__13OKH">-' . $salePercent . '%</div>'
                                                . '<div class="price-component_prev_price__2Pdz0">₫' . number_format($gamePrice) . '</div>'
                                                . '<div class="price-component_disounted_price__2aQkW">₫' . number_format($newPrice) . '</div>';
                                        } else {
                                            $priceHtml = '<div class="price-component_disounted_price__2aQkW">₫' . number_format($gamePrice) . '</div>';
                                        }
                                    }
                                    echo '<a href="./index.php?act=detail&&id=' . $item['gameid'] . '">
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
                                                                ' . $priceHtml . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="landingPage_mainCardContainer__1UAMb">
                <div class="landingPage_data_cont__2-Xoq">
                    <div class="top-category-slider_top__1dWHS">
                        <div class="top-category-slider_heading_cont__3c9dp">
                            <p class="top-category-slider_heading__3pMgC">Recently Updated</p><svg stroke="currentColor"
                                fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                class="top-category-slider_arrow__3bj58" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
                            </svg>
                        </div>
                        <div class="top-category-slider_icons__133YT">
                            <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z">
                                        </path>
                                    </g>
                                </svg></div>
                            <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
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
                                if ($index >= 33 && $index < 38) {
                                    $gameName = $item['gamename'];
                                    $sale = $item['sale'];
                                    $gamePrice = $item['price'];
                                    $priceHtml = "";
                                    $publisher = $item['publisher'];
                                    $dev = $item['developer'];
                                    if ($gamePrice == 0) {
                                        $priceHtml = '<div class="price-component_blue_button__13OKH">Free</div>';
                                    } else {
                                        if ($sale != 0) {
                                            $newPrice = $sale * $gamePrice;
                                            $salePercent = 100 - $sale * 100;
                                            $priceHtml = '<div class="price-component_blue_button__13OKH">-' . $salePercent . '%</div>'
                                                . '<div class="price-component_prev_price__2Pdz0">₫' . number_format($gamePrice) . '</div>'
                                                . '<div class="price-component_disounted_price__2aQkW">₫' . number_format($newPrice) . '</div>';
                                        } else {
                                            $priceHtml = '<div class="price-component_disounted_price__2aQkW">₫' . number_format($gamePrice) . '</div>';
                                        }
                                    }
                                    echo '<div class="mainCardContainer_card__2_wdK">
                                            <a href="./index.php?act=detail&&id=' . $item['gameid'] . '">
                                                <div class="game-card_card__RBJ5f">
                                                    <div class="game-card_image_div__3GP6O"><img
                                                            src="./static/img/icon/' . $item['icon'] . '"
                                                            alt="' . $item['gamename'] . '">
                                                            <div class="game-card_icon__o86Ds">
                                                            <input type="submit" id="submit" name="submit" value=".">
                                                        </div>
                                                    </div>
                                                    <div class="game-card_info__3_mzD">
                                                        <p class="game-card_title__3klhw">' . $item['gamename'] . '</p>
                                                        <div class="game-card_tagline_cont__2bz4d">
                                                            <p class="game-card_tagline__22z9K">' . $publisher . " | " . $dev . '
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="game-card_price__17bNm">
                                                        <div class="price-component_price__3s8s1">
                                                            ' . $priceHtml . '
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>';
                                }

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="landingPage_mainCardContainer__1UAMb"><br></div>
            <div class="landingPage_mainCardContainer__1UAMb">
                <div class="landingPage_data_cont__2-Xoq">
                    <div class="top-category-slider_top__1dWHS">
                        <div class="top-category-slider_heading_cont__3c9dp">
                            <p class="top-category-slider_heading__3pMgC">Holiday Sale Spotlight</p><svg
                                stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                class="top-category-slider_arrow__3bj58" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
                            </svg>
                        </div>
                        <div class="top-category-slider_icons__133YT">
                            <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z">
                                        </path>
                                    </g>
                                </svg></div>
                            <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
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
                                if ($index >= 39 && $index < 44) {
                                    $gameName = $item['gamename'];
                                    $sale = $item['sale'];
                                    $gamePrice = $item['price'];
                                    $priceHtml = "";
                                    $publisher = $item['publisher'];
                                    $dev = $item['developer'];
                                    if ($gamePrice == 0) {
                                        $priceHtml = '<div class="price-component_blue_button__13OKH">Free</div>';
                                    } else {
                                        if ($sale != 0) {
                                            $newPrice = $sale * $gamePrice;
                                            $salePercent = 100 - $sale * 100;
                                            $priceHtml = '<div class="price-component_blue_button__13OKH">-' . $salePercent . '%</div>'
                                                . '<div class="price-component_prev_price__2Pdz0">₫' . number_format($gamePrice) . '</div>'
                                                . '<div class="price-component_disounted_price__2aQkW">₫' . number_format($newPrice) . '</div>';
                                        } else {
                                            $priceHtml = '<div class="price-component_disounted_price__2aQkW">₫' . number_format($gamePrice) . '</div>';
                                        }
                                    }
                                    echo '<div class="mainCardContainer_card__2_wdK">
                                            <a href="./index.php?act=detail&&id=' . $item['gameid'] . '">
                                                <div class="game-card_card__RBJ5f">
                                                    <div class="game-card_image_div__3GP6O"><img
                                                            src="./static/img/icon/' . $item['icon'] . '"
                                                            alt="' . $item['gamename'] . '">
                                                         <div class="game-card_icon__o86Ds">
                                                            <input type="submit" id="submit" name="submit" value=".">
                                                        </div>
                                                    </div>
                                                    <div class="game-card_info__3_mzD">
                                                        <p class="game-card_title__3klhw">' . $item['gamename'] . '</p>
                                                        <div class="game-card_tagline_cont__2bz4d">
                                                            <p class="game-card_tagline__22z9K">' . $publisher . " | " . $dev . '
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="game-card_price__17bNm">
                                                        <div class="price-component_price__3s8s1">
                                                            ' . $priceHtml . '
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>';
                                }

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="landingPage_mainCardContainer__1UAMb"><br><br></div>
            <div class="browseLink_container__s0CA9">
                <div class="browseLink_image_div__2iSFQ"><img
                        src="https://cdn2.unrealengine.com/egs-browsebreaker-no-cn-1280x960-1280x960-d86fc25f7c83.png"
                        alt="browse"></div>
                <div>
                    <p class="browseLink_heading__1qI3f">Browse</p>
                    <p class="browseLink_subheading__33DXX">Explore our catalog for your next favorite game!
                    </p><a href="/browse"><button class="browseLink_btn__1vcqd">Learn More</button></a>
                </div>
            </div>
        </div>
    </div>
</div>