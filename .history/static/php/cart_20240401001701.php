<div class="container">
    <h2 class="title_cart">My cart</h2>
   <?php
    if(isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
        foreach($cart as $item) {
            eco ' '
        }
    }
   ?>
</div>