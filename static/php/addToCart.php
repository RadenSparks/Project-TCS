<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: /TCS_Main/index.php?site=login');
    exit; // It's a good practice to add an exit after a header redirect
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
        header('Location: /TCS_Main/index.php?site=details&id=' . $_GET['id']);
    }
    exit; 
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
