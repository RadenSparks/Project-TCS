<?php
session_start();
if(!isset($_SESSION['email']) || !isset($_GET['id'])){
    header('Location: /Project-TCS/index.php?site=login');
}
$email = $_SESSION['email'];
$conn = mysqli_connect("localhost", "root", "", "db_epicgamers") or die("Không thể kết nối!");
mysqli_query($conn, "SET NAMES 'utf8'");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM wishlist WHERE gameid = '$id' and email='" . $_SESSION['email'] . "'") or die(mysqli_error($conn));
}
if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
