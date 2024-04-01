<div class="container">
    <h2 class="title_cart">My cart</h2>
    <div class="cart">
        <?php
            <div class="left_cart">
            if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
    
                echo ' 
                    
                    ';
            }
                
            </div>

        ?>
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