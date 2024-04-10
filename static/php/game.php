<?php
$gameName = $row_sql['gamename'];
$sale = $row_sql['sale'];
$gamePrice = $row_sql['price'];
$publisher = $row_sql['publisher'];
$dev = $row_sql['developer'];
$icon = './static/img/icon/' . $row_sql['icon'];
$gameid = $row_sql['gameid'];


$inWishlist = false;
if (isset($_SESSION['email'])) {
    $wishlistForThisGameQuery = 'select * from wishlist w join accounts a on w.accountid = a.accountid where gameid = "' . $gameid . '" and a.email = "' . $_SESSION['email'] . '" limit 1';
    $wishlistResult = mysqli_query($conn, $wishlistForThisGameQuery);

    if (mysqli_num_rows($wishlistResult) > 0) {
        //$row = mysqli_fetch_array($wishlistResult);
        $inWishlist = true;
    }
}

?>

<div class="browse-page_card_container__3Uo6_">
    <a>
        <div class="game-card_card__RBJ5f">

            <?php
            if ($inWishlist) {
                echo '<div class="game-card_image_div__3GP6O"><img name="game-thumbnail" id="'.$gameid.'" src="' . $icon . '" alt="' . $gameName . '">';
                echo '<div class="game-card_icon__o86Ds"><img src="./static/icon/already-in-wishlist.png"alt="icon"></div>';
                echo '</div>';
            } else {
                echo '<div class="game-card_image_div__3GP6O"><img name="game-thumbnail" id="'.$gameid.'" src="' . $icon . '" alt="' . $gameName . '">';
                echo '<div class="game-card_icon__o86Ds"><img name="wishlist-icon" id="'.$gameid.'" src="https://epic-games-clone.vercel.app/icons/Add_to_Wishlist.svg" alt="icon"></div>';
                echo '</div>';
            }
            ?>

            <div class="game-card_info__3_mzD">
                <p class="game-card_title__3klhw">
                    <?php echo $gameName; ?>
                </p>
                <div class="game-card_tagline_cont__2bz4d">
                    <p class="game-card_tagline__22z9K">
                        <?php echo $publisher . " | " . $dev ?>
                    </p>
                </div>
            </div>
            <div class="game-card_price__17bNm">
                <div class="price-component_price__3s8s1">
                    <?php
                    if ($gamePrice == 0) {
                        echo '<div class="price-component_blue_button__13OKH">Free</div>';
                    } else {
                        if ($sale != 0) {
                            $newPrice = $sale * $gamePrice;
                            $salePercent = 100 - $sale * 100;
                            echo '<div class="price-component_blue_button__13OKH">-' . $salePercent . '%</div>';
                            echo '<div class="price-component_prev_price__2Pdz0">' . number_format($gamePrice) . ' vnđ</div>';
                            echo '<div class="price-component_disounted_price__2aQkW">' . number_format($newPrice) . ' vnđ</div>';
                        } else {
                            echo '<div class="price-component_disounted_price__2aQkW">' . number_format($gamePrice) . ' vnđ</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </a>
</div>