W<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: /Project-TCS/index.php?act=signin');
    exit; 
}

$dsn = 'mysql:host=localhost;dbname=db_epicgamers';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES 'utf8'");

    include 'addCartItem.php';
    
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        header('Location: /Project-TCS/index.php?act=details&id=' . $_GET['id']);
    }
    exit; 
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
