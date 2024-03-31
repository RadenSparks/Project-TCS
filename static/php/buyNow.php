<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: /TCS_Main/index.php?site=login');
    }

    $dsn = 'mysql:host=localhost;dbname=db_epicgamers';
    $username = 'root';
    $password = '';

    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET NAMES 'utf8'");

        $email = $_SESSION['email'];
        $id = $_POST['id'];

        $searchPrice = $conn->prepare("SELECT price FROM game WHERE gameid = :gameid");
        $searchPrice->bindParam(':gameid', $id);
        $searchPrice->execute();

        if ($searchPrice->rowCount() > 0) {
            $total = $searchPrice->fetchColumn();
            $date = date('Y-m-d H:i:s');
            $insertCartQuery = "INSERT INTO `cart`(`email`, `purchasedate`, `status`) values (:email, :date, 0)";
            $stmt = $conn->prepare($insertCartQuery);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':date', $date);
            $stmt->execute();
            $newCartId = $conn->lastInsertId();

            $insertCartItemQuery = "INSERT INTO `cartitem`(`cartid`, `quantity`, `gameid`) VALUES (:cartid, 1, :gameid)";
            $stmt = $conn->prepare($insertCartItemQuery);
            $stmt->bindParam(':cartid', $newCartId);
            $stmt->bindParam(':gameid', $id);
            $stmt->execute();

            $insertPaymentQuery = "INSERT INTO `payment` (`email`, `cartid`, `total`, `paymentdate`) VALUES (:email, :cartid, :total, current_timestamp())";
            $stmt = $conn->prepare($insertPaymentQuery);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':cartid', $newCartId);
            $stmt->bindParam(':total', $total);
            $stmt->execute();

            header('Location: /TCS/index.php?site=home');
        } else {
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
} else {
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}
?>
