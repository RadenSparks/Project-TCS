<?php
session_start();
if (!isset($_SESSION['email']) || !isset($_GET['id'])) {
    header('Location: /Project-TCS/index.php?act=signin');
    exit;
}

try {
    $conn = new PDO("mysql:host=localhost;dbname=db_epicgamers", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES 'utf8'");

    $stmt = $conn->prepare("SELECT * from wishlist w join accounts a on w.accountid = a.accountid where a.email = :email and w.gameid = :gameid");
    $stmt->bindParam(':email', $_SESSION['email']);
    $stmt->bindParam(':gameid', $_GET['id']);
    $stmt->execute();
    

    if ($stmt->rowCount() == 0) {
        $user_stmt = $conn->prepare("SELECT * from accounts a where a.email = :email LIMIT 1");
        $user_stmt->bindParam(':email', $_SESSION['email']);
        $user_stmt->execute();
        if($user_stmt->rowCount() > 0){
            $user_row = $user_stmt->fetch(PDO::FETCH_ASSOC);
            $accountId = $user_row['accountid'];
            $insert_query = "INSERT INTO `wishlist` (`accountid`, `gameid`) VALUES (:accountid, :gameid)";
            $stmt = $conn->prepare($insert_query);
            $stmt->bindParam(':accountid', $accountId);
            $stmt->bindParam(':gameid', $_GET['id']);
            $stmt->execute();
        }        
    }

    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        header('Location: /Project-TCS/index.php?act=details&id=' . $_GET['id']);
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
