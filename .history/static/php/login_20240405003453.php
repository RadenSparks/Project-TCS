<?php
    session_start();
    $dsn = 'mysql:host=localhost;dbname=db_epicgamers;charset=utf8';
    $username = 'root';
    $password = '';
    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die('Connection error: ' . $e->getMessage());
    }


    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        echo $pass;
        $stmt = $conn->prepare("SELECT email, password FROM accounts WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
        } else {
            if ($pass == $row['password']) {
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $pass;
                if (isset($_POST['remember'])) {
                    $_SESSION['cookieEmail'] = $email;
                    $_SESSION['cookiePass'] = $pass;
                    $expire = time() + 60 * 60 * 24 * 30;
                    setcookie("email", $email, $expire);
                    setcookie("password", $pass, $expire);
                } else {
                    $_SESSION['cookieEmail'] = "";
                    $_SESSION['cookiePass'] = "";
                }
                // session_commit();
                echo '<script type="text/javascript">window.location="/Project-TCS/index.php"</script>';
            } else {
                echo '<script defer type="text/javascript">var errorNotify = document.querySelector(".error"); errorNotify.style.display = "block";</script>';
            }
        }
    }
?>