<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php
        $default_header = "Limegrove Cinemas";
        if (isset($title)) {
            echo "Limegrove Cinemas - " . $title;
        } else {
            echo $default_header;
        }
        ?>
    </title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="movie-web-template/assets/css/styles.css">

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e9662c41f5.js" crossorigin="anonymous"></script>

    <!-- Firebase -->
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-analytics.js"></script>

    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyCCu4hTwBGc1lFfUou5Le66XppigQ8CwxQ",
            authDomain: "movie-template-g.firebaseapp.com",
            databaseURL: "https://movie-template-g.firebaseio.com",
            projectId: "movie-template-g",
            storageBucket: "movie-template-g.appspot.com",
            messagingSenderId: "251745268129",
            appId: "1:251745268129:web:c610bd1ff7fdd6c92ddbe0",
            measurementId: "G-N6RYDSL82F"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();

        <
        /head>

        <
        body >

            <
            nav class = "navbar navbar-expand-lg navbar-light bg-light" >
            <
            button class = "navbar-toggler"
        type = "button"
        data - toggle = "collapse"
        data - target = "#navbarSupportedContent"
        aria - controls = "navbarSupportedContent"
        aria - expanded = "false"
        aria - label = "Toggle navigation" >
            <
            i class = "fas fa-bars" > < /i> <
            /button>

            <
            div class = "collapse navbar-collapse"
        id = "navbarSupportedContent" >
            <
            ul class = "navbar-nav mr-auto" >
            <
            a class = "navbar-brand"
        href = "index.php" > < img src = "assets/images/lgcgreenlogo.png"
        alt = "Cinema Logo"
        style = "width: auto;height: 150px" > < /a>

            <
            /ul>

            <
            ul class = "navbar-nav navbar-right" >

            <
            li class = "nav-item active p-r-10" >
            <
            a class = "nav-link"
        href = "index.php" > Home < span class = "sr-only" > (current) < /span></a >
            <
            /li> <
            li class = "nav-item dropdown p-r-10" >
            <
            a class = "nav-link dropdown-toggle"
        href = "movie.php"
        id = "navbarDropdown"
        role = "button"
        data - toggle = "dropdown"
        aria - haspopup = "true"
        aria - expanded = "false" >
            Movies <
            /a> <
            div class = "dropdown-menu"
        aria - labelledby = "navbarDropdown" >
            <
            a class = "dropdown-item"
        href = "movie.php" > Popular < /a> <
            a class = "dropdown-item disabled"
        href = "#" > Recently Added < /a> <
            a class = "dropdown-item disabled"
        href = "#" > Soon Added < /a> <
            /div> <
            /li>

            <
            li class = "nav-item " >
            <
            a class = "nav-link"
        href = "aboutus.php" > About Us < /a> <
            /li>

            <
            li class = "nav-item p-r-10" >
            <
            a class = "nav-link"
        href = "contactus.php" > Contact Us < /a> <
            /li>

            <
            li class = "nav-item p-r-10" >
            <
            a class = "nav-link"
        href = "blog.php" > Blog < /a> <
            /li> <
            /ul>

            <
            /div> <
            /nav>