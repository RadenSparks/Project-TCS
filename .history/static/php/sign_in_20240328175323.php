
<?php
    include_once "../model/connectdb.php";
    include_once "../model/account.php";
    $data = account();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/sign_in.css">
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
      <form id="login-form">
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
                <img src="../img/googleicon.png" alt="">
                Login with Google
            </button>
            <input class="button" type="submit" name="submit" value="Login now">
        </div>
        <div class="policy_swapfunc">
            <div class="policy"><a href="#">Privacy Policy</a></div>
            <p>Don't have an Epic Games account? <a>Sign up</a></p>
        </div>
      </form>
    </div>

    <?php
   
        if(isset($_POST['submit']) && $_POST['submit']) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            foreach($data as $index => $item) {
                if($email == $item['email']) {
                    if($password == $item['password']) {
                        include_once ""
                    }
                }
            }
        }
    ?>
</body>
</html>