<?php
session_start();
if (!isset($_SESSION['email']) || !isset($_GET['id'])) {
    header('Location: /TCS_Main/index.php?site=login');
    exit;
}

try {
    $conn = new PDO("mysql:host=localhost;dbname=db_epicgamers", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES 'utf8'");

    $stmt = $conn->prepare("SELECT * from wishlist w join accounts a on w.email = a.email where a.email = :email and w.gameid = :gameid");
    $stmt->bindParam(':email', $_SESSION['email']);
    $stmt->bindParam(':gameid', $_GET['id']);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Record exists in the wishlist
    } else {
        $insert_query = "INSERT INTO `wishlist` (`email`, `gameid`) VALUES (:email, :gameid)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bindParam(':email', $_SESSION['email']);
        $stmt->bindParam(':gameid', $_GET['id']);
        $stmt->execute();
    }

    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        header('Location: /TCS_Main/index.php?site=details&id=' . $_GET['id']);
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
