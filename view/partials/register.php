<section class="login">
        <div class="form_cont">
            <form method="post" action="/form_register" class="form" id="form-1" name="myForm">
                <div class="form_inner_cont">
                    <img id="epic_logo" src="./public/images/epic_logo.png" alt="">
                    <p class="form_text">
                        Sign Up
                    </p>
                    <div class="field country-name">
                        <div class="input-area">
                            <input class="input_full" type="text" id="country" name="country" placeholder="Country">
                            <!-- {{!-- <input class="input_full" type="text" name="name" placeholder="Display Name"> --}} -->
                        </div>
                        <div class="error error-txt">Country Name can't be blank</div>
                    </div>

                    <div class="input_half_cont">
                        <div class="field first_name">
                            <div class="input-area input_half_cont_in input_half_cont_left">
                                <input type="text" class="input_half" id="firstname" name="firstname" placeholder="First Name">
                                <!-- {{!-- <input type="text" class="input_half" name="lastname" placeholder="Last Name">
                                --}} -->
                            </div>
                            <div class="error error-txt">First Name can't be blank</div>
                        </div>

                        <div class="field last_name">
                            <div class="input-area input_half_cont_in input_half_cont_right">
                                <input type="text" class="input_half" id="lastname" name="lastname" placeholder="Last Name">
                            </div>
                            <div class="error error-txt">Last Name can't be blank</div>
                        </div>
                    </div>

                    <div class="field dis-name">
                        <div class="input-area">
                            <input class="input_full" type="text" id="name" name="name" placeholder="Display Name">
                        </div>
                        <div class="error error-txt">Display Name can't be blank</div>
                    </div>
                    <div class="field email">
                        <div class="input-area">
                            <input class="input_full" type="email" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="error error-txt">Email can't be blank</div>
                    </div>
                    <div class="field password">
                        <div class="input-area">
                            <input class="input_full" type="password" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="error error-txt">Password can't be blank</div>
                    </div>

                    <div class="rem_cont">
                        <div class="rem_cont_inner">
                            <div class="check_box">
                                <input class="" type="checkbox" name="remember_me" id="remember_me"
                                    value="pass">
                            </div>
                            <label id="rem_text" for="remember_me">I have read and agree to the <a class="link"
                                    href="">terms of
                                    services</a></label>
                        </div>
                    </div>
                    <button class="btn">
                        LOG IN NOW
                    </button>
                    <a class="link" href="">Privacy Policy</a>
                    <div class="redirect_sign">
                        <p class="gray">Dont't have an Epic Games account?<a class="link" href="/login"> Sign in</a>
                        </p>
                    </div>
                    <div>
                        <p class="gray">Back to<a class="link" href=""> all sign in option</a></p>
                    </div>
                </div>
            </form>
        </div>
    </section>



    
       
    