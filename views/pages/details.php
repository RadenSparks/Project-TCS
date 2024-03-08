<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/images/epic_logo.png" type="image/x-icon">
    <title>{{slider.game_name}}</title>
    <meta name="description" content="It is Clone of official website of Epic games .IT develop for educational purpose only.">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://epic-clone-akash.vercel.app/games/{{slider.game_name}}">
    <meta property="og:title" content="Epic Games Clone | {{slider.game_name}}">
    <meta property="og:description" content="It is Clone of official website of Epic games .IT develop for educational purpose only.">
    <meta property="og:image" content="https://epic-clone-akash.vercel.app{{slider.logo_img}}">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="epic-clone-akash.vercel.app">
    <meta property="twitter:url" content="https://epic-clone-akash.vercel.app/games/{{slider.game_name}}">
    <meta name="twitter:title" content="Epic Games Clone | {{slider.game_name}}">
    <meta name="twitter:description" content="It is Clone of official website of Epic games .IT develop for educational purpose only.">
    <meta name="twitter:image" content="https://epic-clone-akash.vercel.app{{slider.logo_img}}">
    <link rel="stylesheet" href="public/css/1_nav.css">
    <link rel="stylesheet" href="public/css/2_nav2.css">
    <link rel="stylesheet" href="public/css/3_carousel.css">
    <link rel="stylesheet" href="public/css/6_games_pg.css">
    <link rel="stylesheet" href="public/css/10_media_games.css">
    <style>
        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-behavior: smooth;
            scroll-padding-top: 20rem;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky+.carousel * {
            margin-top: 20rem;
        }

        #car {
            height: 65vh;
        }

        .carousel .dot {
            padding: 0;
        }

        #dot {
            height: 100%;
            width: 100%;
            border-radius: 1rem;
        }

        #pre_purchase {
            width: 100%;
            height: 5rem;
            color: var(--text_white);
        }




        .get_game::-webkit-scrollbar {
            overflow-y: hidden;
            scroll-behavior: none;
        }

        .get_game {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .get_game {
            height: 100vh;
            width: 100vw;
            z-index: 9999;
            top: -100vw;
            display: flex;
            position: absolute;
            justify-content: center;
            align-items: center;
        }

        .get_game.active {
            top: 0;
        }

        .get_game_cont {
            height: 100%;
            width: 77.5%;
            background: var(--text_white);
            display: flex;
            position: fixed;
        }

        .get_game_cont_left {
            height: 100%;
            width: 74%;
            padding: 2rem 1rem 2rem 2rem;
        }

        .get_nav {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            height: 6rem;
            border-bottom: 1px solid #dfdddd;
        }

        .text_checkout {
            height: 100%;
            width: 50%;
            display: flex;
            font-size: 1.4rem;
            font-weight: 500;
            justify-content: flex-start;
            align-items: center;
            border-bottom: 0.3rem solid var(--hover_blue);
        }
        .login_name {
            padding: 1rem;
            font-weight: 550;
            color: var(--hover_blue);
        }
        .rew_place_order_text {
            height: 5rem;
            display: flex;
            align-items: center;
            font-size: 1.4rem;
        }
        .warning {
            display: flex;
            align-items: center;
            height: 8rem;
            width: 98%;
            font-size: 1.3rem;
            padding: 2.5rem;
            background: #f2f2f2;
        }
        .get_game_aside {
            height: 100%;
            width: 26%;
            padding: 1.5rem;
            background: #f2f2f2;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .get_game_cont_right {
            flex-grow: 2;
            position: relative;
            overflow-y: hidden;
        }

        .order_text_cancel {
            height: 6rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.5rem;
            font-weight: 500;
        }

        .get_order_img {
            display: flex;
            margin-bottom: 2rem;
        }

        #get_order_img {
            width: 42%;
            border-radius: 0.5rem;
        }

        .get_order_img_det {
            width: 58%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            padding: 1rem;
        }

        .get_img_text {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .get_img_text_lit {
            font-size: 1.3rem;
        }

        .get_price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.4rem;
            color: var(--text_gray);
        }

        .dark {
            color: var(--black);
            font-weight: 500;
        }

        .creater_tag {
            height: 4rem;
            margin: 2rem 0;
        }

        #creater_tag {
            height: 100%;
            width: 100%;
            padding: 1rem 1rem 1rem 2rem;
            background: transparent;
            border: 1px solid #dcd4d4;
            border-radius: 0.4rem;
        }

        #creater_tag:hover {
            border: 1px solid black;
        }

        .get_help_contact_us {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            gap: 0.5rem;
        }

        .get_need_help {
            color: var(--text_gray);
        }

        .get_contact_us {
            color: var(--hover_blue);
            text-decoration: revert;
        }

        .get_contact_us:hover {
            text-decoration: none;
        }

        .get_right_bottom_cont {
            height: 10rem;
            margin: -1rem -1.4rem;
            padding: 2rem 1.5rem;
            background: #f2f2f2;
            box-shadow: 0 -4px 4px rgb(0 0 0 / 10%);
        }



        .order_place {
            height: 100%;
            width: 100%;
            border-radius: 0.4rem;
            color: var(--text_white);
            background: var(--hover_blue);
            font-weight: 600;
        }
    </style>
</head>

<body>


    <section class="get_game">
        <div class="get_game_cont">
            <div class="get_game_cont_left">
                <div class="get_nav">
                    <div class="text_checkout">
                        CHECKOUT
                    </div>
                    <div class="login_name">
                        AKKI PAWAR
                    </div>
                </div>
                <P class="rew_place_order_text">
                    REVIEW AND PLACE ORDER
                </P>
                <p class="warning">
                    Verify your information and click Place Order
                </p>
            </div>
            <aside class="get_game_aside">
                <div class="get_game_cont_right">
                    <div class="order_text_cancel">
                        <p class="order-text">
                            ORDER SUMMARY
                        </p>
                        <a href="   " class="order_cancel">
                            <i class="fa-solid fa-xmark"></i>X
                            {{!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z" />
                            </svg> --}}
                        </a>
                    </div>
                    <div class="get_order_content">
                        <div class="get_order_img">
                            <img id="get_order_img" src="{{slider.game_img}}" alt="">
                            <div class="get_order_img_det">
                                <p class="get_img_text">{{slider.game_name}}</p>
                                <p class="get_img_text_lit">A List Games</p>
                            </div>
                        </div>
                        <div class="get_price">
                            <p class="get_price_left">Price</p>
                            <p class="get_price_right">₹{{slider.cut_price}}</p>
                        </div>
                        <div class="get_price">
                            <p class="get_price_left">Sale Discount</p>
                            <p class="get_price_right">-₹{{slider.disccount_price}}</p>
                        </div>
                        <div class="get_price">
                            <p class="get_price_left dark">Total</p>
                            <p class="get_price_right dark">₹{{slider.after_price}}</p>
                        </div>
                        <div class="creater_tag">
                            <input id="creater_tag" name="creater-tag" type="text" placeholder="Enter a creator tag"
                                style="text-transform:uppercase">
                        </div>
                        <div class="get_help_contact_us">
                            <p class="get_need_help">Need Help?</p>
                            <a href="" class="get_contact_us">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="get_right_bottom_cont">
                    <button class="order_place">
                        PLACE ORDER
                    </button>
                </div>
            </aside>
        </div>
    </section>

    <?php 
        $rootDir =  dirname(__FILE__, 2);

        include $rootDir."/partials/navbar.php";

        include $rootDir."/partials/nav2.php";
    ?>

    <section class="game_main_title_big">
        <div class="game_big_title">
            {{slider.game_name}}
        </div>
    </section>

    <?php 
        include $rootDir."/partials/game_detail_carousel.php";

        include $rootDir."/partials/rating.php";
    ?>

    <script src="public/js/games.js"></script>
    <script src="public/js/carousel.js"></script>
    <script>

        let order = document.querySelector(".get_game");
        let order_bottom = document.querySelector(".get_right_bottom_cont");

        document.querySelector("#pre_purchase").onclick = () => {
            order.classList.toggle('active')
            order_bottom.classList.toggle('active')
        }

    </script>
</body>

</html>