<?php
session_start();
if(!isset($_SESSION['email']) || !isset($_GET['id'])){
    header('Location: /Project_TCS/index.php?site=login');
}
$email = $_SESSION['email'];

try {
    $conn = new PDO("mysql:host=localhost;dbname=db_epicgamers", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES utf8");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $conn->prepare("DELETE FROM wishlist WHERE gameid = :id and email = :email");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':email', $_SESSION['email']);
        $stmt->execute();
    }

    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

} catch(PDOException $e) {
    echo "Không thể kết nối: " . $e->getMessage();
}
?>
