<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: /Project-TCS/index.php?act=login');
        exit;
    }

    try {
        $conn = new PDO("mysql:host=localhost;dbname=db_epicgamers", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET NAMES utf8");

        $email = $_SESSION['email'];
        $id = $_POST['id'];

        $searchPrice = $conn->prepare("SELECT price FROM game WHERE gameid = :id");
        $searchPrice->bindParam(':id', $id);
        $searchPrice->execute();

        if ($searchPrice->rowCount() > 0) {
            $total = $searchPrice->fetchColumn();
            $date = date('Y-m-d H:i:s');

            $insertCartQuery = $conn->prepare("INSERT INTO `cart`(`email`, `purchasedate`, `status`) values (:email, :date, 0)");
            $insertCartQuery->bindParam(':email', $email);
            $insertCartQuery->bindParam(':date', $date);
            $insertCartQuery->execute();
            $newCartId = $conn->lastInsertId();

            $insertCartItemQuery = $conn->prepare("INSERT INTO `cartitem`(`cartid`, `quantity`, `gameid`) VALUES (:cartid, 1, :gameid)");
            $insertCartItemQuery->bindParam(':cartid', $newCartId);
            $insertCartItemQuery->bindParam(':gameid', $id);
            $insertCartItemQuery->execute();

            $insertPaymentQuery = $conn->prepare("INSERT INTO `payment` (`email`, `cartid`, `total`, `paymentdate`) VALUES (:email, :cartid, :total, current_timestamp())");
            $insertPaymentQuery->bindParam(':email', $email);
            $insertPaymentQuery->bindParam(':cartid', $newCartId);
            $insertPaymentQuery->bindParam(':total', $total);
            $insertPaymentQuery->execute();

            header('Location: /Project-TCS/index.php?act=home');
            exit;
        } else {
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
                exit;
            }
        }
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
} else {
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit;
    }
}
?>
