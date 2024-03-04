<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/epic_logo.png" type="image/x-icon">
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
    <link rel="stylesheet" href="/css/11_log_register.css">
</head>

<body>
    <section class="login">
        <div class="form_cont">
            <form id="form" action="/login" method="post">
                <div class="form_inner_cont">
                    <img id="epic_logo" src="/images/logo/epic.png" alt="">
                    <p class="form_text">
                        Sign in with an Epic Games account
                    </p>
                    {{!-- <input class="input_full" type="email" name="email" id="" placeholder="Email Address"> --}}
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
                    {{!-- <input class="input_full" type="password" name="password" id="" placeholder="Password"> --}}
                    <div class="rem_cont">
                        <div class="rem_cont_inner">
                            <div class="check_box">
                                <input class="input_full" type="checkbox" name="remember_me" id="remember_me"
                                    value="pass">
                            </div>
                            <label id="rem_text" for="remember_me">Remember me</label>
                        </div>
                        <a class="link" href="">Forget Your Password</a>
                    </div>
                    <button class="btn" onclick="submitForm()" type="submit">
                        LOG IN NOW
                    </button>
                    <a class="link" href="">Privacy Policy</a>
                    <div class="redirect_sign">
                        <p class="gray">Dont't have an Epic Games account? <a class="link" href="/register">Sign Up</a>
                        </p>
                    </div>
                    <div>
                        <p class="gray">Back to <a class="link" href="">all sign in option</a></p>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="/js/login_val.js"></script>
</body>

</html>