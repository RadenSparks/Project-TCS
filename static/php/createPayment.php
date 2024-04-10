<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: /Project-TCS/index.php?act=login');
    exit;
}

try {
    $conn = new PDO("mysql:host=localhost;dbname=db_epicgames", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES utf8");
    
    // Perform your query here using PDO prepared statements
    
    header('Location: /Project-TCS/index.php?act=home='.$_GET['id']);
    exit;
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
