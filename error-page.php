<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <?php 
        $title = "Error: Page Not Found";
        include "includes/head.php";
    ?>
    <link rel="stylesheet" href="css/error.css">
</head>

<body>

<img id="brokenImage" src="images/broken.png"/>
<h2>You found the Page Not Found Page.</h2>
<p>Let's get you back on track!</p>

<div id="header">
    <!-- insert logo here -->
    <!--For Media Query Nav-->
    <div id="burger">&#9776;</div>
    <?php if (isset($_SESSION["email"])) { ?>
        <ul id="navigation">
            <li><a href="index-loggedin.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="browse.php">Browse/Search</a></li>
            <li><a href="single-country.php">Countries</a></li>
            <li><a href="favorites.php">Favorites</a></li>
            <li><a href="includes/logout.php">Logout</a></li>
        </ul>
    <?php }else{ ?>
        <ul id="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="browse.php">Browse/Search</a></li>
            <li><a href="single-country.php">Countries</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signUp.php">Sign Up</a></li>
            <a href="index.php"><img src="images/logo.png" id="logo"></a>
        </ul>
    <?php } ?>
</div>


</body>







</html>