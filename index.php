<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/images/epic_logo.png" type="image/x-icon">
    <title>Epic Games Clone</title>
    <meta name="description" content="It is Clone of official website of Epic games .IT develop for educational purpose only.">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://epic-clone-akash.vercel.app/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Epic Games Clone">
    <meta property="og:description" content="It is Clone of official website of Epic games .IT develop for educational purpose only.">
    <meta property="og:image" content="https://epic-clone-akash.vercel.app/images/website.webp">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="epic-clone-akash.vercel.app">
    <meta property="twitter:url" content="https://epic-clone-akash.vercel.app/">
    <meta name="twitter:title" content="Epic Games Clone">
    <meta name="twitter:description" content="It is Clone of official website of Epic games .IT develop for educational purpose only.">
    <meta name="twitter:image" content="https://epic-clone-akash.vercel.app/images/website.webp">

    <link rel="stylesheet" href="public/css/1_nav.css">
    <link rel="stylesheet" href="public/css/2_nav2.css">
    <link rel="stylesheet" href="public/css/3_carousel.css">
    <link rel="stylesheet" href="public/css/3_carousel2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="public/css/swiper-bundle.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="public/css/4_card_slider.css">
    <link rel="stylesheet" href="public/css/5_free_games.css">
    <link rel="stylesheet" href="public/css/rest.css">
    <link rel="stylesheet" href="public/css/9_media_index.css">
    <style>
        body::-webkit-scrollbar {
            display: none;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky+.carousel {
            padding-top: 9rem;
        }

        .slideshow-container {
            max-width: 1130px;
            max-height: 710px;
            position: relative;
            margin-top: 2rem;
            margin-left: 15rem;
            width: 95rem;
        }
    </style>
</head>

<body>
<?php
    include "./view/partials/navbar.php";

    include "./view/partials/nav2.php";

    include "./view/partials/carousel.php";

    include "./view/partials/card_slider.php";

    include "./view/partials/suggest.php";

    include "./view/partials/free_games.php";

    include "./view/partials/card_slider.php";

    include "./view/partials/suggest.php";

    ?>

    <section class="explore_section">
        <div class="ex_sec">
            <div class="explore_img">
                <img id="explore_img" src="public/images/banner/explore.jpg" alt="">
            </div>
            <div class="explore_info">
                <div class="exploreInfo_inner_cont">
                    <a id="explore_title_text" href="">Explore Our Catalog</a>
                    <p id="explore_details">Browse by genre, features, price, and more to find your next favorite game.
                    </p>
                    <button id="button_browse">
                        BROWSE ALL
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script src="public/js/index.js"></script>
    <script src="public/js/carosel.js"></script>
    <script src="public/js/swiper-bundle.min.js"></script>
    <script src="public/js/card_slider.js"></script>
    <script>

    </script>
</body>

</html>