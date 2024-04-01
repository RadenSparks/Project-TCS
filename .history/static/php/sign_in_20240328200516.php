
<?php
    include_once './static/model/connectdb.php';
    include_once './static/model/account.php';
    $data = account();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="../css/sign_in.css"> -->
    <link rel="stylesheet" href="./static/css/sign_in.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone"
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <div class="login_container">
      <form action="./index.php?act=login" method="post" id="login-form">
        <div class="tilte_login">
            <h2>Login</h2>
            <p>Sign in with on Epic Games account</p>
        </div>
        <div class="input_group">
            <div class="input_error">
                <input type="email" name="email" class="input_email" placeholder="Email" required>
                <div class="error_email"></div>
            </div>
            <div class="input_error">
                <input type="password" name="password" class="input_password" placeholder="Password" required>
                <div class="error_pass"></div>
            </div>
        </div>
        <div class="options_login">
            <div class="remember">
                <input type="checkbox"> Remember Me
            </div>
            <a href="#">Forget your password</a>
        </div>
        <div class="button_login">
            <button class="btn_gg" type="submit">
                <img src="./static/img/googleicon.png" alt="">
                Login with Google
            </button>
            <input class="button" type="submit" name="submit" value="Login now" onclick="return check()">
        </div>
        <div class="policy_swapfunc">
            <div class="policy"><a href="#">Privacy Policy</a></div>
            <p>Don't have an Epic Games account? <a>Sign up</a></p>
        </div>
      </form>
    </div>
    <script>
        function check() {
            let email = document.querySelector('.input_email');
            let password = document.querySelector('.input_password');
            if(email.value == "") {
                alert('Vui lòng điền email')
                email.focus();
                return false;
            }
            if(email.value == "") {
                alert('Vui lòng điền Password')
                email.focus();
                return false;
            }
            return true;
        }
    </script>
    <!-- <?php
         if (isset($_POST['submit']) && $_POST['submit']) {

            $email = $_POST['email'];
            // echo '<h1>'.$email.'</h1>';
            $password = $_POST['password'];
            foreach ($data as $index => $item) {
                //    echo '<h1>'.$item['email'].'</h1>';
                if ($email == $item['email']) {
                    if ($password == $item['password']) {
                        include_once "./static/php/home.php";
                    } 
                  
                } 
                // else {
                //     header("location: http://localhost/PHP1/epic-games-store.github.io-main/index.php?act=login");
                // }
            }
        }
    ?> -->
</body>
</html>