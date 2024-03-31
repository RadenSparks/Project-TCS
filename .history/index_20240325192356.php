<?php
session_start();
ob_start();
include_once "./static/php/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'browse':
            include_once "./static/php/browse.php";
            break;
        case 'signin':
            include_once "./static/php/sign_in.php";

        default:
            include_once "./static/php/home.php";
    }
} else {
    include_once "./static/php/home.php";
}

include_once "./static/php/home.php";
include_once "./static/php/footer.php";
