<?php
    session_start();
    $email = $_SESSION['email'];
    $conn = mysqli_connect("localhost", "root", "", "db_epicgamers") or die("Không thể kết nối!");
    mysqli_query($conn, "SET NAMES 'utf8'");
    if(isset($_GET['id']))
	{
        $id = $_GET['id'];
		mysqli_query($conn, "DELETE FROM cartitem WHERE gameid = '$id'") or die(mysqli_error($conn));
	}
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
?>