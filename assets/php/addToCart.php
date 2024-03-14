<?php    
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location: /Project-TCS/index.php?site=login');
    }
    $conn = mysqli_connect("localhost", "root", "", "db_epicgames") or die("Không thể kết nối!");
    mysqli_query($conn, "SET NAMES 'utf8'");
    $check = mysqli_query($conn, "SELECT c.email, ci.gameid FROM cart c JOIN cartitem ci ON c.cartid = ci.cartid WHERE status = 1 and c.email = '".$_SESSION['email']."' and ci.gameid = '".$_GET['id']."'") or die(mysqli_error($conn));
    if (mysqli_num_rows($check) > 0) {
        $cart_item_query = "INSERT INTO `cartitem`(`cartid`, `quantity`, `gameid`) VALUES ('".mysqli_insert_id($conn)."','1','".$_GET['id']."')";
        mysqli_close($conn);
    } else {
        $date = date('Y-m-d H:i:s');
        $cart_query = "INSERT INTO `cart`(`email`, `purchasedate`, `status`) values ('".$_SESSION['email']."','".$date."', '1')";
        // mysqli_query($conn, "INSERT INTO cart(email, gameid) VALUES ('".$_SESSION['email']."', '".$_GET['id']."')") or die(mysqli_error($conn));
        mysqli_query($conn, $cart_query) or die(mysqli_error($conn));
        $cart_item_query = "INSERT INTO `cartitem`(`cartid`, `quantity`, `gameid`) VALUES ('".mysqli_insert_id($conn)."', '1','".$_GET['id']."')";
        mysqli_query($conn, $cart_item_query) or die(mysqli_error($conn));
        
    }
    
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }else{
        header('Location: /Project-TCS/index.php?site=details&id='.$_GET['id']);
    }
?>