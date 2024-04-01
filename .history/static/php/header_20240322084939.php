<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- custom css & js-->
    <link rel="stylesheet" href="./static/css/style.css">


    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- font-awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Epic Games Store</title>
    <link rel="icon" type="image/x-icon" href="epicFavIcon.ico">
</head>

<body class="d-flex flex-column justify-content-center align-items-center">
        <!-- 
        
            section-1 navbar 
    
        -->
    <nav class="nav-1 navbar d-flex justify-content-between p-0">
        <ul class="d-flex align-items-center p-0 m-0">
            <li><img class='navIcon ms-2' src="static/img/navIcon.png" alt=""></li>
            <li class="nav-1-links ms-2 store-link">store</li>
            <li class="nav-1-links">faq</li>
            <li class="nav-1-links">help</li>
            <li class="nav-1-links">unreal engine</li>
        </ul>
        <ul class="d-flex align-items-center m-0 gap-3">
            <li><img class="symbols" src="static/img/globe.png" alt=""></li>
            <li class="d-flex align-items-center gap-2 me-2"><img class="symbols mx-1"
                    onclick="window.open('form.html', '');" src="static/img/profile.png" alt=""><a href="form.html"
                    target="_blank">sign in</a></li>
            <li><button class="download border border-0">download</button></li>
        </ul>
    </nav>