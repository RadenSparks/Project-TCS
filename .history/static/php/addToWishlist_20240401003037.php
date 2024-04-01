<?php 
session_start();
<<<<<<< HEAD
if (!isset($_SESSION['email']) || !isset($_GET['id'])) {
    header('Location: /Project-TCS/index.php?site=login');
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
        header('Location: /Project-TCS/index.php?site=details&id=' . $_GET['id']);
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();

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