<?php
    $conn = mysqli_connect("localhost", "root", "", "db_epicgamers") or die("Không thể kết nối!");
    mysqli_query($conn, "SET NAMES 'utf8'");
    $gamesQuery = 'SELECT g.* from game g';
    // if(isset($_SESSION['email'])){
    //     $gamesQuery = 'SELECT g.*, a.email FROM game g LEFT JOIN wishlist w ON g.gameid = w.gameid LEFT JOIN accounts a ON a.accountid = w.accountid';        
    // }
    $allGames = mysqli_query($conn, $gamesQuery);    
?>

<div class="browse-page_main__by63m">
    <div class="browse-page_containter__2kkNw">
        <!-- Popular Genre -->
        <div class="popular-genre_container__1QPB0">
            <div class="top-category-slider_top__1dWHS">
                <div class="top-category-slider_heading_cont__3c9dp">
                    <p class="top-category-slider_heading__3pMgC">Popular Genre</p><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="top-category-slider_arrow__3bj58" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                        <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
                    </svg>
                </div>
                <div class="top-category-slider_icons__133YT">
                    <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z">
                                </path>
                            </g>
                        </svg></div>
                    <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z">
                                </path>
                            </g>
                        </svg></div>
                </div>
            </div>
            <div class="popular-genre_cards__1aazx">
                <div class="popular-genre_card__3CSzO"><img src="https://epic-games-clone.vercel.app/genre/action_games.svg" alt="Action Games">
                    <p class="popular-genre_card_text__1G4bs">Action Games</p>
                </div>
                <div class="popular-genre_card__3CSzO"><img src="https://epic-games-clone.vercel.app/genre/casual_games.svg" alt="Casual Games">
                    <p class="popular-genre_card_text__1G4bs">Casual Games</p>
                </div>
                <div class="popular-genre_card__3CSzO"><img src="https://epic-games-clone.vercel.app/genre/indie_games.svg" alt="Indie">
                    <p class="popular-genre_card_text__1G4bs">Indie</p>
                </div>
                <div class="popular-genre_card__3CSzO"><img src="https://epic-games-clone.vercel.app/genre/multiplayer_games.svg" alt="Multiplayer">
                    <p class="popular-genre_card_text__1G4bs">Multiplayer</p>
                </div>
                <div class="popular-genre_card__3CSzO"><img src="https://epic-games-clone.vercel.app/genre/open_games.svg" alt="Strategy">
                    <p class="popular-genre_card_text__1G4bs">Strategy</p>
                </div>
            </div>
        </div>
        <!-- Popular Genre -->
        <div class="browse-page_main_container__2gOV1">
            <div class="browse-page_data_wrapper__1VpUY">
                <!-- Sort By -->
                <div class="browse-page_filters_sorting_container__22jve">
                    <div class="browse-page_sorting__iOiJv">
                        <p class="browse-page_sorting_para__2zuko">Sort By: <span>New Release</span></p>
                    </div>
                    <div class="browse-page_filters__1LZLz">
                        <p>Filters</p><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="width: 18px; height: 18px;">
                            <path d="M16 120h480v48H16zm80 112h320v48H96zm96 112h128v48H192z"></path>
                        </svg>
                    </div>
                </div>
                <!-- Sort By -->
                <!-- All product -->
                <div class="browse-page_data_container__DQwrC">
                    <?php       
                        while ($row_sql = mysqli_fetch_assoc($allGames)) {    
                            include('game.php');
                        }        
                    ?>
                </div>
                <!-- All product -->
                <!-- Pagination -->
                <div class="top-category-slider_icons__133YT">
                    <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z">
                                </path>
                            </g>
                        </svg></div>
                    <div class="top-category-slider_icon__1CEFP"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z">
                                </path>
                            </g>
                        </svg></div>
                </div>
                <!-- Pagination -->
            </div>
            <div class="browse-page_filters_desktop__1X5ey">
                <div class="filters_filter_cont__3Mv0u">
                    <p class="filters_heading__17W27">Filters</p>
                    <div class="filters_search_box__1Kb15"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                            </path>
                        </svg><input type="text" placeholder="Keywords"></div>
                    <div class="filters_line__1dM7b"></div>
                    <div class="filters_filter__2lCM5">
                        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiAccordion-root MuiAccordion-rounded MuiAccordion-gutters css-1t37sij">
                            <div class="MuiButtonBase-root MuiAccordionSummary-root MuiAccordionSummary-gutters css-xglvsw" tabindex="0" role="button" aria-expanded="false">
                                <div class="MuiAccordionSummary-content MuiAccordionSummary-contentGutters css-17o5nyn">
                                    <p class="MuiTypography-root MuiTypography-body1 css-1w2nqsn" style="font-weight: 600; font-size: 11px; letter-spacing: 0.5px;">
                                        PRICE</p>
                                </div>
                                <div class="MuiAccordionSummary-expandIconWrapper css-1n3veo1"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-5zhuds" focusable="false" viewBox="0 0 24 24" aria-hidden="true" data-testid="ExpandMoreIcon">
                                        <path d="M16.59 8.59 12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                                    </svg></div>
                            </div>
                            <div class="MuiCollapse-root MuiCollapse-vertical MuiCollapse-hidden css-a0y2e3" style="min-height: 0px;">
                                <div class="MuiCollapse-wrapper MuiCollapse-vertical css-hboir5">
                                    <div class="MuiCollapse-wrapperInner MuiCollapse-vertical css-8atqhb">
                                        <div role="region" class="MuiAccordion-region">
                                            <div class="MuiAccordionDetails-root css-u7qq7e" style="padding: 8px 6px 16px;">
                                                <div class="filters_checkboxes__1kzoC">
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="radio" name="price" value="1">
                                                        <div class="filters_label__3mtaH">
                                                            <span>Free</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input type="radio" name="price" class="filters_input__3HsA6" value="750">
                                                        <div class="filters_label__3mtaH"><span>Under Rs.
                                                                750.00</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span></div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="radio" name="price" value="1500">
                                                        <div class="filters_label__3mtaH"><span>Under Rs.
                                                                1,500.00</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span></div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="radio" name="price" value="2500">
                                                        <div class="filters_label__3mtaH"><span>Under Rs.
                                                                2,500.00</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span></div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="radio" name="price" value="1099">
                                                        <div class="filters_label__3mtaH"><span>Rs. 1,099.00
                                                                and below</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filters_line__1dM7b"></div>
                    <div class="filters_filter__2lCM5">
                        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiAccordion-root MuiAccordion-rounded MuiAccordion-gutters css-1t37sij">
                            <div class="MuiButtonBase-root MuiAccordionSummary-root MuiAccordionSummary-gutters css-xglvsw" tabindex="0" role="button" aria-expanded="false">
                                <div class="MuiAccordionSummary-content MuiAccordionSummary-contentGutters css-17o5nyn">
                                    <p class="MuiTypography-root MuiTypography-body1 css-1w2nqsn" style="font-weight: 600; font-size: 11px; letter-spacing: 0.5px;">
                                        GENRE</p>
                                </div>
                                <div class="MuiAccordionSummary-expandIconWrapper css-1n3veo1"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-5zhuds" focusable="false" viewBox="0 0 24 24" aria-hidden="true" data-testid="ExpandMoreIcon">
                                        <path d="M16.59 8.59 12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                                    </svg></div>
                            </div>
                            <div class="MuiCollapse-root MuiCollapse-vertical MuiCollapse-hidden css-a0y2e3" style="min-height: 0px;">
                                <div class="MuiCollapse-wrapper MuiCollapse-vertical css-hboir5">
                                    <div class="MuiCollapse-wrapperInner MuiCollapse-vertical css-8atqhb">
                                        <div role="region" class="MuiAccordion-region">
                                            <div class="MuiAccordionDetails-root css-u7qq7e" style="padding: 8px 6px 16px;">
                                                <div class="filters_checkboxes__1kzoC">
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" id="genre" value="Action">
                                                        <div class="filters_label__3mtaH">
                                                            <span>Action</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" id="genre" value="Adventure">
                                                        <div class="filters_label__3mtaH">
                                                            <span>Adventure</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" id="genre" value="Strategy">
                                                        <div class="filters_label__3mtaH">
                                                            <span>Strategy</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" id="genre" value="Shooter">
                                                        <div class="filters_label__3mtaH">
                                                            <span>Shooter</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" id="genre" value="Puzzle">
                                                        <div class="filters_label__3mtaH">
                                                            <span>Puzzle</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" id="genre" value="Indie">
                                                        <div class="filters_label__3mtaH">
                                                            <span>Indie</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" id="genre" value="Casual">
                                                        <div class="filters_label__3mtaH">
                                                            <span>Casual</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" id="genre" value="Survival">
                                                        <div class="filters_label__3mtaH">
                                                            <span>Survival</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" id="genre" value="Horror">
                                                        <div class="filters_label__3mtaH">
                                                            <span>Horror</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filters_line__1dM7b"></div>
                    <div class="filters_filter__2lCM5">
                        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiAccordion-root MuiAccordion-rounded MuiAccordion-gutters css-1t37sij">
                            <div class="MuiButtonBase-root MuiAccordionSummary-root MuiAccordionSummary-gutters css-xglvsw" tabindex="0" role="button" aria-expanded="false">
                                <div class="MuiAccordionSummary-content MuiAccordionSummary-contentGutters css-17o5nyn">
                                    <p class="MuiTypography-root MuiTypography-body1 css-1w2nqsn" style="font-weight: 600; font-size: 11px; letter-spacing: 0.5px;">
                                        FEATURES</p>
                                </div>
                                <div class="MuiAccordionSummary-expandIconWrapper css-1n3veo1"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-5zhuds" focusable="false" viewBox="0 0 24 24" aria-hidden="true" data-testid="ExpandMoreIcon">
                                        <path d="M16.59 8.59 12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                                    </svg></div>
                            </div>
                            <div class="MuiCollapse-root MuiCollapse-vertical MuiCollapse-hidden css-a0y2e3" style="min-height: 0px;">
                                <div class="MuiCollapse-wrapper MuiCollapse-vertical css-hboir5">
                                    <div class="MuiCollapse-wrapperInner MuiCollapse-vertical css-8atqhb">
                                        <div role="region" class="MuiAccordion-region">
                                            <div class="MuiAccordionDetails-root css-u7qq7e" style="padding: 8px 6px 16px;">
                                                <div class="filters_checkboxes__1kzoC">
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" name="features" id="features" value="single-player">
                                                        <div class="filters_label__3mtaH"><span>Single
                                                                Player</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span></div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" name="features" id="features" value="controller-support">
                                                        <div class="filters_label__3mtaH"><span>Controller
                                                                Support</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span></div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" name="features" id="features" value="multiplayer">
                                                        <div class="filters_label__3mtaH">
                                                            <span>Multiplayer</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" name="features" id="features" value="co-op">
                                                        <div class="filters_label__3mtaH"><span>Co
                                                                Op</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span></div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" name="features" id="features" value="competitive">
                                                        <div class="filters_label__3mtaH">
                                                            <span>Competitive</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filters_line__1dM7b"></div>
                    <div class="filters_filter__2lCM5">
                        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiAccordion-root MuiAccordion-rounded MuiAccordion-gutters css-1t37sij">
                            <div class="MuiButtonBase-root MuiAccordionSummary-root MuiAccordionSummary-gutters css-xglvsw" tabindex="0" role="button" aria-expanded="false">
                                <div class="MuiAccordionSummary-content MuiAccordionSummary-contentGutters css-17o5nyn">
                                    <p class="MuiTypography-root MuiTypography-body1 css-1w2nqsn" style="font-weight: 600; font-size: 11px; letter-spacing: 0.5px;">
                                        PLATFORM</p>
                                </div>
                                <div class="MuiAccordionSummary-expandIconWrapper css-1n3veo1"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-5zhuds" focusable="false" viewBox="0 0 24 24" aria-hidden="true" data-testid="ExpandMoreIcon">
                                        <path d="M16.59 8.59 12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                                    </svg></div>
                            </div>
                            <div class="MuiCollapse-root MuiCollapse-vertical MuiCollapse-hidden css-a0y2e3" style="min-height: 0px;">
                                <div class="MuiCollapse-wrapper MuiCollapse-vertical css-hboir5">
                                    <div class="MuiCollapse-wrapperInner MuiCollapse-vertical css-8atqhb">
                                        <div role="region" class="MuiAccordion-region">
                                            <div class="MuiAccordionDetails-root css-u7qq7e" style="padding: 8px 6px 16px;">
                                                <div class="filters_checkboxes__1kzoC">
                                                    <div class="filters_checkbox__2ilP2"><input class="filters_input__3HsA6" type="checkbox" id="platforms" value="Windows">
                                                        <div class="filters_label__3mtaH">
                                                            <span>Windows</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="filters_checkbox__2ilP2"><input type="checkbox" id="platforms" class="filters_input__3HsA6" value="Mac">
                                                        <div class="filters_label__3mtaH"><span>Mac
                                                                Os</span><span class="filters_check__2S_A4"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z">
                                                                    </path>
                                                                </svg></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filters_line__1dM7b"></div>
                </div>
            </div>
        </div>
    </div>
</div>