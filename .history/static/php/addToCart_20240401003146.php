<<<<<<< HEAD
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: /Project-TCS/index.php?site=login');
    exit; // It's a good practice to add an exit after a header redirect
}

$dsn = 'mysql:host=localhost;dbname=db_epicgamers';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES 'utf8'");


<?php    
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location: /Project-TCS/index.php?site=login');
    }
    

    include 'addCartItem.php';
    
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
<<<<<<< HEAD
    } else {
        header('Location: /Project-TCS/index.php?site=details&id=' . $_GET['id']);

    }else{
        header('Location: /Project-TCS/index.php?site=details&id='.$_GET['id']);

    }
?>