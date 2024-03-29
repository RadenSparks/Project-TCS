<?php    
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location: /Project-TCS/index.php?site=login');
    }
    
    include 'addCartItem.php';
    
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }else{
        header('Location: /Project-TCS/index.php?site=details&id='.$_GET['id']);
    }
?>