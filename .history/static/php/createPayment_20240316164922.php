<?php    
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location: /Project-TCS/index.php?site=login');
    }
    
    $conn = mysqli_connect("localhost", "root", "", "db_epicgames") or die("Không thể kết nối!");
    mysqli_query($conn, "SET NAMES 'utf8'");
    
    if(mysqli_num_rows($check) > 0){

    }else{

    }
    
    header('Location: /Project-TCS/index.php?site=home='.$_GET['id']);
?>