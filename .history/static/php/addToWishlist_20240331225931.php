<?php 
session_start();
if(!isset($_SESSION['email']) || !isset($_GET['id'])){
    header('Location: /Project-TCS/index.php?site=login');
}
$conn = mysqli_connect("localhost", "root", "", "db_epicgamers") or die("Không thể kết nối!");
mysqli_query($conn, "SET NAMES 'utf8'");
$check = mysqli_query($conn, "SELECT * from wishlist w join accounts a on w.email = a.email where a.email = '" . $_SESSION['email'] . "' and w.gameid = " . $_GET['id']);
if (mysqli_num_rows($check) > 0) {

}else{    
    $insert_query = "INSERT INTO `wishlist` (`email`, `gameid`) VALUES ('". $_SESSION['email'] ."',".$_GET['id'].")";
    mysqli_query($conn, $insert_query) or die(mysqli_error($conn));
}

if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}else{
    header('Location: /Project-TCS/index.php?site=details&id='.$_GET['id']);
}

?>