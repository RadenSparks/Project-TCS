<?php
$dsn = 'mysql:host=localhost;dbname=db_epicgamers';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES 'utf8'");

    $check = $conn->prepare("SELECT * FROM cart c WHERE status = 1 and c.email = :email LIMIT 1");
    $check->bindParam(':email', $_SESSION['email']);
    $check->execute();

    if ($check->rowCount() > 0) {
        $row = $check->fetch(PDO::FETCH_ASSOC);
        $id = $row["cartid"];
        $cart_item_query = "INSERT INTO `cartitem`(`cartid`, `quantity`, `gameid`) VALUES (:cartid, 1, :gameid)";
        $stmt = $conn->prepare($cart_item_query);
        $stmt->bindParam(':cartid', $id);
        $stmt->bindParam(':gameid', $_GET['id']);
        $stmt->execute();
    } else {
        $date = date('Y-m-d H:i:s');
        $cart_query = "INSERT INTO `cart`(`email`, `purchasedate`, `status`) values (:email, :date, 1)";
        $stmt = $conn->prepare($cart_query);
        $stmt->bindParam(':email', $_SESSION['email']);
        $stmt->bindParam(':date', $date);
        $stmt->execute();
        $cart_item_query = "INSERT INTO `cartitem`(`cartid`, `quantity`, `gameid`) VALUES (:cartid, 1, :gameid)";
        $stmt = $conn->prepare($cart_item_query);
        $stmt->bindParam(':cartid', $conn->lastInsertId());
        $stmt->bindParam(':gameid', $_GET['id']);
        $stmt->execute();
    }

    $conn = null; // Close the connection
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
