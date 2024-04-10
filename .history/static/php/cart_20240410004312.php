<?php
include_once "./static/model/query.php";
$noItemHtml = '
<div class="emptyCard_container__22WzV">
        <div class="emptyCard_image_div__7U0eU">
            <img src="https://epic-games-clone.vercel.app/icons/sorry.svg" alt="noResults">
        </div>
        <p class="emptyCard_heading__1HdDn">You haven\'t added anything to your cart yet.</p>
        <a class="emptyCard_link__2XDV-" href="./index.php?act=browse&page=1&keyword=&genre=&price=&sort=gamename,asc">Shop for Apps &amp; Games</a>
    </div> ';
$canCheckOut = false;
$totalCart = 0;
if (isset($_SESSION['email'])) {    
    $conn = openConnection();
    $accountResult = queryResult($conn, 'SELECT * from accounts a where a.email = ? LIMIT 1', 's', $_SESSION['email']);
    if ($accountResult->num_rows > 0) {
        $account = $accountResult->fetch_assoc();
        $accountId = $account["accountid"];
        $cartResult = queryResult($conn, 'SELECT * FROM cart c join accounts a on c.accountid = a.accountid WHERE status = 1 and a.accountid = ? LIMIT 1', 'i', $accountId);

        if ($cartResult->num_rows > 0) {
            $cart = $cartResult->fetch_assoc();
               
            $cartId = $cart['cartid'];
            $cartItemResult = queryResult($conn, 'SELECT * FROM cartitem ci join game g on ci.gameid = g.gameid WHERE ci.cartid = ?', 'i', $cartId);            
        }
    }
}

?>
<div class="container" >
    <h2 class="title_cart">My cart</h2>
    <div class="main_cart">
        <div id="main-container">
            <?php
            if (isset($cartItemResult) && $cartItemResult->num_rows > 0) {
                $canCheckOut = true;
                while ($cartItem = $cartItemResult->fetch_assoc()) {
                    $sale = $cartItem['sale'];
                    $gamePrice = $cartItem['price'];
                    $priceHtml = '';
                    if ($gamePrice == 0) {
                        $priceHtml = '<div class="price-component_blue_button__13OKH">Free</div>';
                    } else {
                        if ($sale != 0) {
                            $newPrice = $sale * $gamePrice;
                            $salePercent = 100 - $sale * 100;
                            $totalCart += $newPrice;
                            $priceHtml = '<div class="discount">-' . $salePercent . '%</div>'
                                . '<div class="del_price"><del>' . number_format($gamePrice) . '<a class="currency">vnđ</a></del></div>'
                                . '<div class="real_price">' . number_format($newPrice) . '<a class="currency">vnđ</a></div>';
                        } else {
                            $totalCart += $gamePrice;
                            $priceHtml = '<div class="real_price">' . number_format($gamePrice) . '<a class="currency">vnđ</a></div>';
                        }
                    }

                    echo '       
                    <div class="cart" id="item-' . $cartItem['cartitemid'] . '">
                        <div class="left_cart">                         
                            <div class="item">
                                <div class="about_games">
                                    <a class="image_game" href="index.php?act=detail&id='.$cartItem['gameid'].'">
                                        <img src="./static/img/icon/' . $cartItem['icon'] . '" alt="">
                                        <div class="operasys_icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="currentcolor" d="M0 93.7l183.6-25.3v177.4H0V93.7zm0 324.6l183.6 25.3V268.4H0v149.9zm203.8 28L448 480V268.4H203.8v177.9zm0-380.6v180.1H448V32L203.8 65.7z"/></svg>
                                        </div>
                                    </a>
                                    <div class="info_game">
                                        <div class="type_game">Base game</div>
                                        <div class="name_game"><a href="index.php?act=detail&id='.$cartItem['gameid'].'">' . $cartItem['gamename'] . '</a></div>
                                        <div class="gift_game">Earn 5% back in TCS Rewards</div>
                                        <div class="more_game">
                                            Self-Refundable
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="currentcolor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                                        </div>
                                        <div class="more_game">
                                            <button class="remove_game" id="' . $cartItem['cartitemid'] . '" name="cart-remove-btn">Remove</button>
                                        </div>
                                        
                                    </div>                                              
                                    <div class="prices">                                                    
                                        ' . $priceHtml . '
                                    </div>             
                                </div>
                            </div>
                        </div>                                    
                    </div>';
                }
            } else {
                echo $noItemHtml;
            }
            ?>
        </div>

        <div class="right_cart" style="<>"> >
            <p class="title_pay">
                Games and Apps Summary
            </p>
            <div class="price">
                <p>Total</p>
                <span>
                    <?php echo number_format($totalCart) ?> vnđ
                </span>
            </div>
            <div class="tax">
                <p>Taxes</p>
                <span>10%</span>
            </div>
            <div class="border_line"></div>
            <div class="total">
                <p>Subtotal</p>
                <span>
                    <?php echo number_format($totalCart * 1.1) ?> vnđ
                </span>
            </div>
            <button <?php if(isset($cartItemResult) && $cartItemResult->num_rows == 0) echo "disabled='true'"?>>Check out</button>
        </div>
    </div>
</div>
<script>
    document.getElementsByName("cart-remove-btn")
        .forEach(tag => {
            tag.onclick = async function () {
                let id = tag.id;
                let body = new FormData();
                body.append('id', id);
                await fetch('./static/php/removeFromCart.php', {
                    method: 'POST',
                    body: body,
                }).then(response =>
                    response.json()
                ).then(response => {
                    if (response.status) {
                        document.getElementById("item-" + id)?.remove();
                    }
                    if(response.showNoResult){
                        if(response.showNoResult){
                        location.href = 'index.php?act=cart';
                    }
                    }
                }).catch(function (err) {
                    console.log(err);
                });
            }
        });
</script>