<div class="wishlist_main__1knbg">
                <div class="wishlist_containter__21Ms2">
                    <div class="wishlist_sub_navbar__2rEX4"></div>
                    <div class="wishlist_main_container__2Nwa6">
                        <p>Cart </p>
                        <div class="notificationbar_container__2Alh2">
                            <div><label
                                    class="MuiFormControlLabel-root MuiFormControlLabel-labelPlacementEnd css-1jaw3da"><span
                                        class="MuiSwitch-root MuiSwitch-sizeMedium css-lk1uhh"><span
                                            class="MuiSwitch-switchBase MuiSwitch-colorPrimary MuiButtonBase-root MuiSwitch-switchBase MuiSwitch-colorPrimary PrivateSwitchBase-root css-1nr2wod"><input
                                                class="MuiSwitch-input PrivateSwitchBase-input css-1m9pwf3"
                                                type="checkbox"><span
                                                class="MuiSwitch-thumb css-19gndve"></span></span><span
                                            class="MuiSwitch-track css-1ju1kxc"></span></span><span
                                        class="MuiTypography-root MuiTypography-body1 MuiFormControlLabel-label css-9l3uo3">Receive
                                        email notifications about my order.</span></label></div>
                            <div class="notificationbar_externalLink__2ANju">
                                <p class="notificationbar_heading__2E240">Manage all your communication preferences</p>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    class="notificationbar_icon__35Gvp" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="m13 3 3.293 3.293-7 7 1.414 1.414 7-7L21 11V3z"></path>
                                    <path
                                        d="M19 19H5V5h7l-2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-5l-2-2v7z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <?php
                            if(isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                                $showCart = $_SESSION['giohang'];
                                foreach($showCart as $index => $item) {
                                    extract($showCart)
                                    echo '  <a href="/games/61c3466f194f98e8c3efef5d">
                                    <div class="card_container__2ACRz">
                                        <div class="card_img_div__17rj-"><img
                                                src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_RedoutSpaceAssault_34BigThings_S2_1200x1600-603e70426ddcef1d2b173917f72e9f27?h=854&amp;resize=1&amp;w=640"
                                                alt="banner"></div>
                                        <div class="card_content__eAJbZ">
                                            <div class="card_title_div__Shss4">
                                                <div>
                                                    <div class="card_base__9OG5W">Base Game</div>
                                                    <p class="card_title__27SFW">Rebel Galaxy</p>
                                                </div>
                                                <div>
                                                    <p class="card_platform_heading__1Js10">Platform</p>
                                                    <p>Windows</p>
                                                </div>
                                            </div>
                                            <div class="card_price_div__miG5E">
                                                <div class="card_payment__2jJw2">
                                                    <div>
                                                        <div class="price-component_price__3s8s1">
                                                            <div class="price-component_blue_button__13OKH">-25%</div>
                                                            <div class="price-component_prev_price__2Pdz0">₹ 1179</div>
                                                            <div class="price-component_disounted_price__2aQkW">₹ 885</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card_btn_div__2z9yl">
                                                    <p class="card_btn_remove__3GDIr">Remove</p><button
                                                        class="card_btn_buy__127oT">BUY NOW</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>';
                                }
                              
                            }
                        ?>
                        <!-- <a href="/games/61c3466f194f98e8c3efef5c">
                            <div class="card_container__2ACRz">
                                <div class="card_img_div__17rj-"><img
                                        src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_Prey_ArkaneStudios_S2_1200x1600-98e869dbf74a7db4857c4242c044272d?h=854&amp;resize=1&amp;w=640"
                                        alt="banner"></div>
                                <div class="card_content__eAJbZ">
                                    <div class="card_title_div__Shss4">
                                        <div>
                                            <div class="card_base__9OG5W">Base Game</div>
                                            <p class="card_title__27SFW">Prey</p>
                                        </div>
                                        <div>
                                            <p class="card_platform_heading__1Js10">Platform</p>
                                            <p>Windows</p>
                                        </div>
                                    </div>
                                    <div class="card_price_div__miG5E">
                                        <div class="card_payment__2jJw2">
                                            <div>
                                                <div class="price-component_price__3s8s1">
                                                    <div class="price-component_blue_button__13OKH">-50%</div>
                                                    <div class="price-component_prev_price__2Pdz0">₹ 1000</div>
                                                    <div class="price-component_disounted_price__2aQkW">₹ 500</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card_btn_div__2z9yl">
                                            <p class="card_btn_remove__3GDIr">Remove</p><button
                                                class="card_btn_buy__127oT">BUY NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/games/61c3466f194f98e8c3efef5d">
                            <div class="card_container__2ACRz">
                                <div class="card_img_div__17rj-"><img
                                        src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_RedoutSpaceAssault_34BigThings_S2_1200x1600-603e70426ddcef1d2b173917f72e9f27?h=854&amp;resize=1&amp;w=640"
                                        alt="banner"></div>
                                <div class="card_content__eAJbZ">
                                    <div class="card_title_div__Shss4">
                                        <div>
                                            <div class="card_base__9OG5W">Base Game</div>
                                            <p class="card_title__27SFW">Rebel Galaxy</p>
                                        </div>
                                        <div>
                                            <p class="card_platform_heading__1Js10">Platform</p>
                                            <p>Windows</p>
                                        </div>
                                    </div>
                                    <div class="card_price_div__miG5E">
                                        <div class="card_payment__2jJw2">
                                            <div>
                                                <div class="price-component_price__3s8s1">
                                                    <div class="price-component_blue_button__13OKH">-25%</div>
                                                    <div class="price-component_prev_price__2Pdz0">₹ 1179</div>
                                                    <div class="price-component_disounted_price__2aQkW">₹ 885</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card_btn_div__2z9yl">
                                            <p class="card_btn_remove__3GDIr">Remove</p><button
                                                class="card_btn_buy__127oT">BUY NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/games/61c3466f194f98e8c3efef5e">
                            <div class="card_container__2ACRz">
                                <div class="card_img_div__17rj-"><img
                                        src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_WolfensteinTheOldBlood_MachineGames_S4_1200x1600-23a40cd1dccefeceb0c39b1f760bc79e?h=854&amp;resize=1&amp;w=640"
                                        alt="banner"></div>
                                <div class="card_content__eAJbZ">
                                    <div class="card_title_div__Shss4">
                                        <div>
                                            <div class="card_base__9OG5W">Base Game</div>
                                            <p class="card_title__27SFW">Wolfenstein: The Old Blood</p>
                                        </div>
                                        <div>
                                            <p class="card_platform_heading__1Js10">Platform</p>
                                            <p>Windows</p>
                                        </div>
                                    </div>
                                    <div class="card_price_div__miG5E">
                                        <div class="card_payment__2jJw2">
                                            <div>
                                                <div class="price-component_price__3s8s1">
                                                    <div class="price-component_blue_button__13OKH">-25%</div>
                                                    <div class="price-component_prev_price__2Pdz0">₹ 1179</div>
                                                    <div class="price-component_disounted_price__2aQkW">₹ 885</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card_btn_div__2z9yl">
                                            <p class="card_btn_remove__3GDIr">Remove</p><button
                                                class="card_btn_buy__127oT">BUY NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a> -->
                    </div>
                </div>
            </div>