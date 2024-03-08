<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/images/epic_logo.png" type="image/x-icon">
    <title>Sign in with an Epic Games account</title>
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
    <link rel="stylesheet" href="public/css/11_log_register.css">4
</head>

<body>
    <section class="login">
        <div class="form_cont">
            <form method="post" action="/form_register" class="form" id="form" name="myForm">
                <div class="form_inner_cont">
                    <img id="epic_logo" src="public/images/logo/epic.png" alt="">
                    <p class="form_text">
                        Register an Epic Games account
                    </p>
                    <div class="field country-name">
                        <div class="input-area">
                            <input class="input_full" type="text" name="country" placeholder="Country">
                        </div>
                        <div class="error error-txt">Country Name can't be blank</div>
                    </div>

                    <div class="input_half_cont">
                        <div class="field first_name">
                            <div class="input-area input_half_cont_in input_half_cont_left">
                                <input type="text" class="input_half" name="firstname" placeholder="First Name">                                
                            </div>
                            <div class="error error-txt">First Name can't be blank</div>
                        </div>

                        <div class="field last_name">
                            <div class="input-area input_half_cont_in input_half_cont_right">
                                <input type="text" class="input_half" name="lastname" placeholder="Last Name">
                            </div>
                            <div class="error error-txt">Last Name can't be blank</div>
                        </div>
                    </div>

                    <div class="field dis-name">
                        <div class="input-area">
                            <input class="input_full" type="text" name="name" placeholder="Display Name">
                        </div>
                        <div class="error error-txt">Display Name can't be blank</div>
                    </div>
                    <div class="field email">
                        <div class="input-area">
                            <input class="input_full" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="error error-txt">Email can't be blank</div>
                    </div>
                    <div class="field password">
                        <div class="input-area">
                            <input class="input_full" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="error error-txt">Password can't be blank</div>
                    </div>

                    <div class="rem_cont">
                        <div class="rem_cont_inner">
                            <div class="check_box">
                                <input class="input_full" type="checkbox" name="remember_me" id="remember_me"
                                    value="pass">
                            </div>
                            <label id="rem_text" for="remember_me">I have read and agree to the <a class="link"
                                    href="">terms of
                                    services</a></label>
                        </div>
                    </div>
                    <button class="btn" onclick="submitForm()" type="submit">
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



    <script src="public/js/register_val.js"></script>
    <script>


    </script>
</body>

</html>