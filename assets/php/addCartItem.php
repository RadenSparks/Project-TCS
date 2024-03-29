<?php
$conn = mysqli_connect("localhost", "root", "", "db_epicgames") or die("Không thể kết nối!");
mysqli_query($conn, "SET NAMES 'utf8'");
$check = mysqli_query($conn, "SELECT * FROM cart c WHERE status = 1 and c.email = '" . $_SESSION['email'] . "' LIMIT 1") or die(mysqli_error($conn));

if (mysqli_num_rows($check) > 0) {
    $id = mysqli_fetch_array($check)["cartid"];
    $cart_item_query = "INSERT INTO `cartitem`(`cartid`, `quantity`, `gameid`) VALUES ('" . $id . "','1','" . $_GET['id'] . "')";
    mysqli_query($conn, $cart_item_query) or die(mysqli_error($conn));
    mysqli_close($conn);
} else {
    $date = date('Y-m-d H:i:s');
    $cart_query = "INSERT INTO `cart`(`email`, `purchasedate`, `status`) values ('" . $_SESSION['email'] . "','" . $date . "', 1)";
    mysqli_query($conn, $cart_query) or die(mysqli_error($conn));
    $cart_item_query = "INSERT INTO `cartitem`(`cartid`, `quantity`, `gameid`) VALUES ('" . mysqli_insert_id($conn) . "', '1','" . $_GET['id'] . "')";
    mysqli_query($conn, $cart_item_query) or die(mysqli_error($conn));
}
