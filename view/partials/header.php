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

    <link rel="stylesheet" href="public/css/3_carousel.css">
    <link rel="stylesheet" href="public/css/3_carousel2.css">
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="public/css/swiper-bundle.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="public/css/4_card_slider.css">
    <link rel="stylesheet" href="public/css/5_free_games.css">
    <link rel="stylesheet" href="public/css/rest.css">
    <link rel="stylesheet" href="public/css/9_media_index.css">
    <link rel="stylesheet" href="public/css/11_log_register.css">
    <!-- Header -->
    <link rel="stylesheet" href="public/css/1_nav.css">
    <!-- Nav bar -->
    <link rel="stylesheet" href="public/css/2_nav2.css">
    <!-- Footer -->
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


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

    <header class="header">
        <div class="logo_ul">
            <img id="epic_logo" src="public/images/epic_logo.png" alt="">
            <nav class="navbar navbar_1" id="navbar_1">
                <div class="nav_bar ">
                    <a id="nav_a" href="#store">STORE</a>
                    <a id="nav_a" href="#faq">FAQ</a>
                    <a id="nav_a" href="#help">HELP</a>
                    <a id="nav_a" href="#unreal_engine">UNREAL ENGINE</a>
                </div>
            </nav>
        </div>

        <div class="container form_hidden" id="ham" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>

        <div class="signup_link" id="signup_link2">
            <div class="singup">
                <a id="singup1" href="./index.php?act=signup">SIGNUP</a>
            </div>
            <div class="download_link">
                <a id="download_link1" href="">DOWNLOAD</a>
            </div>
        </div>

        <div class="dropdown form_hidden" id="drop_down">
            <a href="/login">ACCOUNT</a>
            <a href="">MY ACHEIEVMENT</a>
            <a href="">REDEEM CODE</a>
            <a href="">COUPONS</a>
            <a href="">SIGN OUT</a>
        </div>
    </header>

    <nav class="navbar navbar_flex form_hidden" id="navbar_2">
        <div class="nav_bar">
            <a id="nav_a" href="#store">STORE</a>0
            <a id="nav_a" href="#faq">FAQ</a>
            <a id="nav_a" href="#help">HELP</a>
            <a id="nav_a" href="#unreal_engine">UNREAL ENGINE</a>
        </div>

        <div class="signup_link form_hidden" id="signup_link1">
            <div class="singup">
                <a id="singup2" href="#">SIGNsssssUP</a>
            </div>
            <div class="download_link">
                <a href="#download_link">DOWNLOAD</a>
            </div>
        </div>
    </nav>