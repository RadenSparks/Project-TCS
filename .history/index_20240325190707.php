<?php
    session_start();
    ob_start();
    include_once "./static/php/header.php";
    if(isset($_GET['act'])) {
        $act = $_GET['act'];

        switch($act) {
            case 'browse': 
                include_once
        }
    }

    include_once "./static/php/home.php";
    include_once "./static/php/footer.php";

?>