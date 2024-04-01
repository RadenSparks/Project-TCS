<div class="container">
    <h2 class="title_cart">My cart</h2>
    <div class="cart">
        <div class="left_cart">
        <?php
                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                    foreach($cart as $item) {
                        
                  
                    echo ' 
                    <div class="item">
                        <div class="about_games">
                            <div class="image_game">
                                <img src="../img/spiderman.jpg" alt="">
                                <div class="operasys_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="currentcolor" d="M0 93.7l183.6-25.3v177.4H0V93.7zm0 324.6l183.6 25.3V268.4H0v149.9zm203.8 28L448 480V268.4H203.8v177.9zm0-380.6v180.1H448V32L203.8 65.7z"/></svg>
                                </div>
                            </div>
                            <div class="info_game">
                                <div class="type_game">Base game</div>
                                <div class="name_game">Marvel Spider-Man Remastered</div>
                                <div class="gift_game">Earn 5% back in Epic Rewards</div>
                                <div class="more_game">
                                    Self-Refundable
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="currentcolor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                                </div>
                            </div>
                        </div>
                        <div class="price_game">
                            <div class="prices">
                                <div class="discount">%30</div>
                                <div class="del_price"><del>₫1,399,000</del></div>
                                <div class="real_price">₫979,300</div>
                            </div>
                            <div class="options">
                                <a href="" class="remove_game">Remove</a>
                                <button><a href="">Move to wishlist</a></button>
                            </div>
                        </div>
                    </div>';
                }
                }
                
                ?>
            </div>

        <div class="right_cart">
            <p class="title_pay">
                Games and Apps Summary
            </p>
            <div class="price">
                <p>Price</p>
                <span>₫979,300</span>
            </div>
            <div class="tax">
                <p>Taxes</p>
                <span>Calculated at Checkout</span>
            </div>
            <div class="border_line"></div>
            <div class="total">
                <p>Subtotal</p>
                <span>₫979,300</span>
            </div>
            <button><a href="">Check out</a></button>
        </div>
    </div>
</div>