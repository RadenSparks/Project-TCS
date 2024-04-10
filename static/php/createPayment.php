<?php
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

    $check = $conn->prepare("SELECT * FROM your_table WHERE your_condition");
    $check->execute();

    if ($check->rowCount() > 0) {
    } else {
    }

    header('Location: /Project-TCS/index.php?act=home=' . $_GET['id']);
    exit;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
