<?php
$dsn = 'mysql:host=localhost;dbname=db_epicgamers';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES 'utf8'");

    if (isset($_GET['id']) && isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $username = strtoupper(str_replace('@gmail.com', '', $email));
        $gameid = $_GET['id'];
        $stmt = $conn->prepare("SELECT * FROM game WHERE gameid = :gameid");
        $stmt->bindParam(':gameid', $gameid);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $name = $row['gamename'];
            $price = $row['price'];
            $sale = $row['sale'];
            $publisher = $row['publisher'];
            $icon = $row['icon'];
            $total = $price - $price * $sale;
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
                                    ' . $username . '
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
                                    <img src="' . $icon . '" alt="" class="payment-summary__img">
                                    <div class="payment-summary__content">
                                        <h2 class="payment-summary__name">' . $name . '</h2>
                                        <p class="payment-summary__publisher">' . $publisher . '</p>
                                    </div>
                                </div>
                                <div class="payment-price">
                                    <div class="payment-price__label">Price</div>
                                    <div class="payment-price__value">đ' . number_format($price) . '</div>
                                </div>
                                <div class="payment-price">
                                    <div class="payment-price__label">Sale Discount</div>
                                    <div class="payment-price__value">-đ' . number_format($price * $sale) . '</div>
                                </div>
                                <div class="payment-price">
                                    <div class="payment-price__label payment-price__label--PAY">Total</div>
                                    <div class="payment-price__value payment-price__value--PAY">đ' . number_format($total) . '</div>
                                </div>
                            </div>
                            <div class="payment-confirm" name="orderBtn" hidden>
                                <div class="payment-confirm__container">
                                    <div id="paypal-button-container"></div>
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
                                    ' . $username . '
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
                                    <img src="' . $icon . '" alt="" class="payment-summary__img">
                                    <div class="payment-summary__content">
                                        <h2 class="payment-summary__name">' . $name . '</h2>
                                        <p class="payment-summary__publisher">' . $publisher . '</p>
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
                                    <div id="paypal-button-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    ';
                }
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
        
        <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD&commit=true&disable-funding=paylater"></script>
        <link rel="stylesheet" href="./static/js/css/themes/semantic.css">
        <link rel="stylesheet" href="./static/js/css/alertify.css">
        <script src="./static/js/alertify.js"></script>
<script>
    paypal.Buttons({
        style: {
            layout: 'horizontal',
            color: 'blue',
            shape: 'rect',
            tagline: false
        },
        onApprove: function (data, actions) {
            return actions.order.capture().then(function (details) {
                alertify.alert("Transaction process successfully !", function () {
                    const urlParams = new URLSearchParams(window.location.search);
                    const id = urlParams.get('id');                    
                    window.location = "/Project-TCS/static/php/buyNow.php?id=" + id;
                }).set({
                    title: ''
                }).set({
                    labels: {
                        ok: 'Ok'
                    }
                });
                // Call your backend to save the transaction details
            });

        },
        onError: function (err) {
            alertify.alert('Error during processing payment! Please try again later').set({
                title: ''
            }).set({
                labels: {
                    ok: 'Ok'
                }
            });
        },
        createOrder: function (data, actions) {
            return actions.order.create({
                "purchase_units": [{
                    "amount": {
                        "currency_code": "VND",
                        "value": "<?php echo $total ?>"
                    },
                    "reference_id": generateUUID()
                }],
                "intent": "CAPTURE"
            });
        }
    }).render('#paypal-button-container');

    function generateUUID() { // Public Domain/MIT
        var d = new Date().getTime(); //Timestamp
        var d2 = ((typeof performance !== 'undefined') && performance.now && (performance.now() * 1000)) || 0; //Time in microseconds since page-load or 0 if unsupported
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
            var r = Math.random() * 16; //random number between 0 and 16
            if (d > 0) { //Use timestamp until depleted
                r = (d + r) % 16 | 0;
                d = Math.floor(d / 16);
            } else { //Use microseconds since page-load if supported
                r = (d2 + r) % 16 | 0;
                d2 = Math.floor(d2 / 16);
            }
            return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
        });
    }
</script>
<script defer>
    // Display border and Active order button after choose pay method
    jQuery("input[name='methodCheck']").change(function () {
        if (jQuery(this).is(":checked")) {
            jQuery(this).parent().addClass("border-blue");
            jQuery("div[name='orderBtn']").removeAttr('hidden')

        } else {
            jQuery(this).parent().removeClass("border-blue");
            jQuery("div[name='orderBtn']").attr('hidden', 'hidden')
        }
    });

    // Close modal
    let closeBtn = document.querySelector('.payment-summary__close')
    let paymentModal = document.querySelector('.payment-modal')
    closeBtn.addEventListener('click', function () {
        paymentModal.style.display = "none";
    })
</script>