<section class="nav2" id="nav2">
    <div class="nav_2">
        <div class="nav2_left">
            <div class="nav2_left_search">
                <span><i class="fa fa-search"></i></span>
                <input type="text" name="search" id="search" placeholder="Search store">
            </div>
            <div class="nav2_left_list">
                <div class="nav2_list">
                    <a id="#nav-a" href="index.php?page=home" <?php echo(isset($_GET['page']) && $_GET['page'] == 'home' ? 'class="active"' : 'class="inactive"') ?>>Discover</a>
                </div>
                <div class="nav2_list">
                    <a id="#nav-a" href="index.php?page=products" <?php echo(isset($_GET['page']) && $_GET['page'] == 'products' ? 'class="active"' : 'class="inactive"') ?>>Browse</a>
                </div>
            </div>
        </div>
        <div class="nav2_right">
            <div class="nav2_right_list">
                <div class="nav2_list">
                    <a id="#nav-a" href="">Whislist</a>
                </div>
                <div class="nav2_list">
                    <a id="#nav-a" href="">Cart</a>
                </div>
            </div>
        </div>
    </div>
</section>