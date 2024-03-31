<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: /Project-TCS/index.php?site=login');
    }

    $conn = mysqli_connect("localhost", "root", "", "db_epicgames") or die("Không thể kết nối!");
    mysqli_query($conn, "SET NAMES 'utf8'");

    $email = $_SESSION['email'];
    $id = $_POST['id'];


    $searchPrice = mysqli_query($conn, "SELECT price FROM game WHERE gameid = '$id'");
    if (mysqli_num_rows($searchPrice) > 0) {
        $total = mysqli_fetch_array($searchPrice)['price'];
        $date = date('Y-m-d H:i:s');
        $insertCartQuery = "INSERT INTO `cart`(`email`, `purchasedate`, `status`) values ('" . $email . "','" . $date . "', 0)";
        mysqli_query($conn, $insertCartQuery) or die(mysqli_error($conn));
        $newCartId = mysqli_insert_id($conn);

        $insertCartItemQuery = "INSERT INTO `cartitem`(`cartid`, `quantity`, `gameid`) VALUES ('" . $newCartId . "', 1,'" . $id . "')";
        mysqli_query($conn, $insertCartItemQuery) or die(mysqli_error($conn));

        $insertPaymentQuery = "INSERT INTO `payment` (`email`, `cartid`, `total`, `paymentdate`) VALUES ('" . $email . "', '" . $newCartId . "', " . $total . ", current_timestamp())";
        mysqli_query($conn, $insertPaymentQuery) or die(mysqli_error($conn));

        header('Location: /Project-TCS/index.php?site=home');
    } else {
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
}else{
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}
?>