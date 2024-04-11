<?php
include_once "./static/model/query.php";
$data = [];
$search = null;
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#000000">
    <meta name="description" content="Web site created using create-react-app">
    <link rel="stylesheet" href="./static/css/homestyle.css">
    <link rel="stylesheet" href="./static/css/browsestyle.css">
    <link rel="stylesheet" href="./static/css/detailstyle.css">
    <link rel="stylesheet" href="./static/css/cartstyle.css">
    <link rel="stylesheet" href="./static/css/header.css">
    <link rel="stylesheet" href="./static/css/searchbar.css">
    <!-- <link rel="stylesheet" href="./static/css/base.css"> -->
    <link rel="stylesheet" href="./static/css/sliders.css">
    <link rel="stylesheet" href="./static/css/content.css">
    <link rel="stylesheet" href="./static/css/footer.css">
    <title>TCS</title>
    <meta name="title" content="TCS">
    <meta name="description" content="A gaming platform where users can buy and get different kinds of games.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://epic-games-clone.vercel.app/">
    <meta property="og:title" content="TCS">
    <meta property="og:description" content="A gaming platform where users can buy and get different kinds of games.">
    <meta property="og:image" content="https://epic-games-clone.vercel.app/og-image.png">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://epic-games-clone.vercel.app/">
    <meta property="twitter:title" content="TCS">
    <meta property="twitter:description" content="A gaming platform where users can buy and get different kinds of games.">
    <meta property="twitter:image" content="https://epic-games-clone.vercel.app/og-image.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>

<body>

    <div id="root">
        <div class="App">
            <div id="header" class="header_header__main__div__1miNF">
                <div class="header_header__first__3S80d"><a href="./index.php">
                        <div class="header_header__logo__36Cdj"><img src="./static/image/img-layoutold/logo.png" alt="epic" style="height: 55px;"></div>
                    </a>
                    <div class="header_header__navigations__wRzWm">
                        <div class="header_header__navigations__div__2pSIS"><a href="./index.php">
                                <p class="header_onhover__color__white__3u48K">STORE</p>
                            </a></div>
                        <div class="header_header__navigations__div__2pSIS">
                            <p class="header_onhover__color__white__3u48K">FAQ</p>
                        </div>
                        <div class="header_header__navigations__div__2pSIS">
                            <p class="header_onhover__color__white__3u48K">HELP</p>
                        </div>
                        <div class="header_header__navigations__div__2pSIS">
                        </div>
                    </div>
                </div>
                <div class="header_header__second__2Cbwd">
                    <div class="header_padding__left__RHyxc header_icon__2CeRL header_padding__right__EBNcD header_display__none__R6tIm header_onhover__color__white__3u48K">
                        <img src="https://epic-games-clone.vercel.app/icons/header_global.svg" alt="global">
                    </div>
                    <a <?php if(!isset($_SESSION['email'])) echo 'href="./index.php?act=signin"' ?>>
                        <div class="header_header__second__user__32ejS header_padding__left__RHyxc header_padding__right__EBNcD header_display__none__R6tIm}">
                            <div class="header_padding__left__RHyxc header_padding__right__EBNcD header_icon__2CeRL header_onhover__color__white__3u48K header_display__none__R6tIm">
                                <img src="https://epic-games-clone.vercel.app/icons/header_user_offline.svg" alt="offline user">
                            </div>
                            <!-- <div id="header_header__rewrite__2vMyA"
                                class="header_padding__right__EBNcD header_display__none__R6tIm">
                                <p class="header_onhover__color__white__3u48K">SIGN IN</p>
                            </div> -->
                            <?php
                            
                            try {
                                $conn = openConnection();

                                if (isset($_SESSION['email'])) {
                                    $email = $_SESSION['email'];
                                    $username = strtoupper(explode('@', $email)[0]);
                                    $dashboardHtml = "";
                                    
                                    $accountResult = getAccountResultByEmail($conn, $_SESSION['email']);
                                    if ($accountResult->num_rows > 0) {
                                        $account = $accountResult->fetch_assoc();
                                        if($account['isadmin']){
                                            $dashboardHtml = '<li class="user-menu__item">
                                            <a href="index.php?act=dashboard&entity=game&page=1" class="user-menu__link">DASHBOARD</a>
                                        </li>';
                                        }
                                    }
                                    echo '
                                    <div class="nav-item nav-item--no-animation logged-in header_header__rewrite__2vMyA">
                                        <span class="btn nav-link">' . $username . '
                                            <i style="padding: 0 5px" class="fa-solid fa-caret-down fa-sm"></i>
                                            <div class="user-menu">
                                                <ul class="user-menu__list">
                                                    <li class="user-menu__item">
                                                        <a href="./index.php?act=accountsetting" class="user-menu__link">ACCOUNT</a>
                                                    </li>
                                                    '.$dashboardHtml.'
                                                    <li class="user-menu__item">
                                                        <a href="/Project-TCS/static/php/logout.php" class="user-menu__link">SIGN OUT</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </span>
                                    </div>
            ';
                                } else {
                                    echo '
                                    <div id="header_header__rewrite__2vMyA"
                                    class="header_padding__right__EBNcD header_display__none__R6tIm">
                                    <p class="header_onhover__color__white__3u48K href="./index.php?act=signin">SIGN IN</p>
                                </div>
                        ';
                                }
                            } catch (PDOException $e) {
                                echo "Connection failed: " . $e->getMessage();
                            }
                            ?>

                        </div>
                    </a>
                    <div class="header_padding__left__RHyxc header_display__none__R6tIm header_download_btn__2HnRe">
                        <button class="header_header__button__Icswa header_onhover__color__blue__3o3Va">DOWNLOAD</button>
                    </div>
                    <div class="header_toggle__3WbMr" style="background-color: rgb(0, 120, 242);">
                        <span></span><span></span><span></span>
                    </div>
                </div>
            </div>
            <div class="sub-navbar_main__hR7Dc"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="sub-navbar_icon__lKP2r" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                    </path>
                </svg>
                <div class="sub-navbar_accordion__3sUXA">
                    <p>Discover</p><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="sub-navbar_icon_a__cW4aE" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z">
                        </path>
                    </svg>
                </div><a href="/wishlist"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="sub-navbar_icon__lKP2r" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4 8-8z">
                        </path>
                    </svg></a>
            </div>
            <div class="sub-navbar_main_desktop__19-YT">
                <div class="sub-navbar_left__1pAwu">
                    <form id="form" method="post">
                        <div class="sub-navbar_search_box__8UOVU">
                            <input type="submit" class="icon_search" name="icon_search" value=".">


                            <input type="text" id="search" autocomplete="" name="search" placeholder="Search" value="" name="content_search">
                        </div>
                    </form>
                    <a href="./index.php">
                        <div class="sub-navbar_option_desktop__1z-9D">Discover</div>
                    </a>
                    <a href="./index.php?act=browse">
                        <div class="sub-navbar_option_desktop__1z-9D">Browse</div>
                    </a>
                    <a href="/">
                        <div class="sub-navbar_option_desktop__1z-9D">News</div>
                    </a>
                </div>
                <div class="sub-navbar_right__1pAwu">
                    <a href="./index.php?act=wishlist">
                        <div class="sub-navbar_wishlist__RmSJY">Wishlist</div>
                    </a>
                    <span class="count-product" id="wish-item-count">
                        <?php

                        if (!isset($_SESSION['email'])) {
                            echo 0;
                        } else {
                            $conn = openConnection();

                            $conn->begin_transaction();

                            $accountResult = queryResult($conn, 'SELECT * from accounts a where a.email = ? and active = 1 LIMIT 1', 's', $_SESSION['email']);
                            $account = $accountResult->fetch_assoc();
                            $accountId = $account["accountid"];
                            $wishItemResult = queryResult($conn, 'SELECT * from wishlist w WHERE w.accountid = ?', 'i', $accountId);
                            echo $wishItemResult->num_rows;
                        }
                        ?>
                    </span>
                    <a href="./index.php?act=cart">
                        <div class="sub-navbar_cart__RmSJY">Cart</div>
                    </a>
                    <span class="count-product" id="cart-item-count">
                        <?php

                        if (!isset($_SESSION['email'])) {
                            echo 0;
                        } else {
                            $conn = openConnection();

                            $conn->begin_transaction();

                            $accountResult = queryResult($conn, 'SELECT * from accounts a where a.email = ? and active = 1 LIMIT 1', 's', $_SESSION['email']);
                            $account = $accountResult->fetch_assoc();
                            $accountId = $account["accountid"];

                            $cartResult = queryResult($conn, 'SELECT * FROM cart c join accounts a on c.accountid = a.accountid WHERE status = 1 and a.accountid = ? LIMIT 1', 'i', $accountId);
                            $cart = $cartResult->fetch_assoc();

                            if ($cartResult->num_rows > 0) {
                                $cartId = $cart['cartid'];
                                $cartItemResult = queryResult($conn, 'SELECT * FROM cartitem ci join game g on ci.gameid = g.gameid WHERE ci.cartid = ?', 'i', $cartId);
                                echo $cartItemResult->num_rows;
                            }else{
                                echo 0;
                            }
                        }
                        ?>
                    </span>
                </div>
            </div>

            <div class="search-product">
                <div class="bottom-start">
                    <span>
                        <div class="search">
                            <ul class="product-list">
                                <?php
                                foreach ($data as $index => $item) {
                                    if (count($data) > 0) {
                                        if ($index >= 0 && $index <= 3) {
                                            echo ' <li>
                                        <div>
                                            <a href="./index.php?act=detail&&id=' . $item['gameid'] . '">
                                                <div class="games-search">
                                                    <div class="image-search">
                                                        <img src="./static/img/icon/' . $item['icon'] . '" alt="">
                                                    </div>
                                                    <div class="name-searchs">
                                                        <span class="name-search-product">' . $item['gamename'] . '</span>
    
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>';
                                        }
                                    }
                                }
                                ?>

                                <li>
                                    <div>
                                        <a href="#">
                                            <div class="games-search">

                                                <div class="name-searchs">
                                                    <span class="name-search-product" style="text-decoration: underline; opacity: 0.5">View More</span>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </span>
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    // Lắng nghe sự kiện onkeyup của phần tử
                    const searchProduct = document.querySelector('.search-product');
                    const search = document.getElementById('search');
                    search.addEventListener('input', () => {
                        const inputValue = search.value;
                        if (inputValue == '') {
                            searchProduct.style.display = 'none';
                        } else {
                            searchProduct.style.display = 'block';
                        }
                    })
                    $('#search').on("keyup", function() {
                        // Lấy dữ liệu của input
                        var getName = $(this).val();
                        console.log(getName);
                        console.log(searchProduct, 'ss');

                        // alert(getName);
                        $.ajax({
                            // Sử dụng Method POST để truyền dữ liệu đi
                            method: 'POST',
                            url: 'static/php/searchajax.php',
                            // truyền dữ liệu để qua bên file đc chỉ định ở (URL)
                            // Dùng nó để lấy dữ liệu người dùng nhập vào. Chuyển file nên cx ko cùng
                            // context của biến => không thể truy cập được.
                            data: {
                                search: getName
                            },
                            // Nếu mà thành công thì dữ liệu được trả về
                            // Và hiện thị ở phần đã được chỉ định (HTML)
                            success: function(response) {
                                $(".product-list").html(response);
                            }
                        });
                    });
                });
            </script>