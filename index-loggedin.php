<html>

<head>
    <?php 
        $title = "Home - Logged in";
        include "includes/head.php";
    ?>
    <link rel="stylesheet" href="css/index-loggedin.css">
</head>

<body>
    <main class="container">
        <div id="header">
            <!-- insert logo here -->
            <!--For Media Query Nav-->
            <div id="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul id="navigation">
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Browse/Search</a></li>
                <li><a href="">Countries</a></li>
                <li><a href="">Cities</a></li>
                <li><a href="">Login</a></li>
                <li><a href="">Sign Up</a></li>
            </ul>
        </div>
        <div class="main " id="main-loggedin">
            <div id="userInfo">
                user info
            </div>
            <div id="favoritedImages">Favorited Images</div>
            <div id="search">search</div>
            <div id="images">images</div>
        </div>
    </main>
</body>
<script src="js/template.js"></script>
</html>