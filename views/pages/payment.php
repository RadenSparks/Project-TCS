<?php
    $conn = mysqli_connect('localhost', 'root', '', 'db_epicgames') or die('Connection error!');
    mysqli_query($conn, "SET NAMES 'utf8'");
    
    if (isset($_GET['id']) && isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $username = strtoupper(str_replace('@gmail.com', '', $email));
        $gameid = $_GET['id'];
        $gameDetail = mysqli_query($conn, "SELECT * FROM game WHERE gameid = '$gameid'");
        if ($row = mysqli_fetch_array($gameDetail)) {
            $name = $row['gamename'];
            $price = $row['price'];
            $sale = $row['sale'];
            $publisher = $row['publisher'];
            $icon = $row['icon'];
            $total = $price - $price*$sale;
        }
        if ($price != 0) {
            echo '
                <div class="payment-modal">
                    <div class="row full-height">
                        <div class="col-8 p-5">
                            <div class="payment-header">
                                <h1 class="payment-header__title">CHECKOUT</h1>
                                <div class="payment-header__user">
                                    <i class="fa-solid fa-user"></i>
                                    '.$username.'
                                </div>
                            </div>
                            <div class="payment-content">
                                <h1 class="payment-content__title">PAYMENT METHODS</h1>
                                <div class="payment-content__order">Verify your information and click Place Order</div>
                                <div class="form-check payment-method">
                                    <input class="form-check-input payment-method__input" name="methodCheck" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label payment-method__label" for="flexCheckChecked">
                                        <i class="fa-brands fa-paypal payment-method__icon"></i>
                                        PayPal
                                    </label>
                                    </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="payment-summary p-5">
                                <div class="payment-summary__heading">
                                    <div class="payment-summary__title">ORDER SUMMARY</div>
                                    <span class="payment-summary__close">
                                        <i class="fa-solid fa-xmark"></i>
                                    </span>
                                </div>
                                <div class="payment-summary__info">
                                    <img src="'.$icon.'" alt="" class="payment-summary__img">
                                    <div class="payment-summary__content">
                                        <h2 class="payment-summary__name">'.$name.'</h2>
                                        <p class="payment-summary__publisher">'.$publisher.'</p>
                                    </div>
                                </div>
                                <div class="payment-price">
                                    <div class="payment-price__label">Price</div>
                                    <div class="payment-price__value">đ'.number_format($price).'</div>
                                </div>
                                <div class="payment-price">
                                    <div class="payment-price__label">Sale Discount</div>
                                    <div class="payment-price__value">-đ'.number_format($price*$sale).'</div>
                                </div>
                                <div class="payment-price">
                                    <div class="payment-price__label payment-price__label--PAY">Total</div>
                                    <div class="payment-price__value payment-price__value--PAY">đ'.number_format($total).'</div>
                                </div>
                            </div>
                            <div class="payment-confirm">
                                <div class="payment-confirm__container">
                                    <button type="button" class="btn btn-primary confirm-btn payment-confirm__btn" name="orderBtn" disabled>PLACE ORDER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        } else {
            echo '
                <div class="payment-modal">
                    <div class="row full-height">
                        <div class="col-8 p-5">
                            <div class="payment-header">
                                <h1 class="payment-header__title">CHECKOUT</h1>
                                <div class="payment-header__user">
                                    <i class="fa-solid fa-user"></i>
                                    '.$username.'
                                </div>
                            </div>
                            <div class="payment-content">
                                <h1 class="payment-content__title">REVIEW AND PLACE ORDER</h1>
                                <div class="payment-content__order">Verify your information and click Place Order</div>
                                <div class="form-check payment-method">
                                    <input class="form-check-input payment-method__input" name="methodCheck" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label payment-method__label" for="flexCheckChecked">
                                        <i class="fa-brands fa-paypal payment-method__icon"></i>
                                        PayPal
                                    </label>
                                    </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="payment-summary p-5">
                                <div class="payment-summary__heading">
                                    <div class="payment-summary__title">ORDER SUMMARY</div>
                                    <span class="payment-summary__close">
                                        <i class="fa-solid fa-xmark"></i>
                                    </span>
                                </div>
                                <div class="payment-summary__info">
                                    <img src="'.$icon.'" alt="" class="payment-summary__img">
                                    <div class="payment-summary__content">
                                        <h2 class="payment-summary__name">'.$name.'</h2>
                                        <p class="payment-summary__publisher">'.$publisher.'</p>
                                    </div>
                                </div>
                                <div class="payment-price">
                                    <div class="payment-price__label">Price</div>
                                    <div class="payment-price__value">đ0</div>
                                </div>
                                <div class="payment-price">
                                    <div class="payment-price__label">Sale Discount</div>
                                    <div class="payment-price__value">-đ0</div>
                                </div>
                                <div class="payment-price">
                                    <div class="payment-price__label payment-price__label--PAY">Total</div>
                                    <div class="payment-price__value payment-price__value--PAY">đ0</div>
                                </div>
                            </div>
                            <div class="payment-confirm">
                                <div class="payment-confirm__container">
                                    <button type="button" class="btn btn-primary confirm-btn payment-confirm__btn" name="orderBtn" disabled>PLACE ORDER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }
    }
?>
<script defer>
    // Display border and Active order button after choose pay method
    jQuery("input[name='methodCheck']").change(function(){
    if(jQuery(this).is(":checked")){
        jQuery(this).parent().addClass("border-blue"); 
        jQuery("button[name='orderBtn']").removeAttr('disabled')
    }
    else{
        jQuery(this).parent().removeClass("border-blue");  
        jQuery("button[name='orderBtn']").attr('disabled', true)
    } });

    // Close modal
    let closeBtn = document.querySelector('.payment-summary__close')
    let paymentModal = document.querySelector('.payment-modal')
    closeBtn.addEventListener('click', function() {
        paymentModal.style.display = "none";
    })
</script>
