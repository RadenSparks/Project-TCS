<?php
include_once "../model/query.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    
    try {
        $conn = openConnection();
        $result = new stdClass();
        $result->status = false;

        if (isset($_POST['email']) && isset($_POST['pass'])) {
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $accountResult = getAccountResultByEmail($conn, $email);            
            
            if ($accountResult->num_rows > 0) {
                $account = $accountResult->fetch_assoc();
                if ($pass == $account['password']) {
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
                    $result->status = true;                    
                } 
            }
        }        
        echo json_encode($result);
    } catch (Exception $e) {
        $error = new stdClass();
        $error->status = false;
        $error->message = $e->getMessage();
        $error->stack = $e->getTraceAsString();
        echo json_encode($error);
    }
} else {
    $result = new stdClass();
    $result->status = false;
    echo json_encode($result);
}