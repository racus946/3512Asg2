<?php
/***
 * Destroys all the session automatically when directed to logout.php
 * Directs back to index.php
 */
    session_start();
    if(isset($_SESSION['email'])){
        session_unset();
        session_destroy();
        header("Location:../index.php");
        exit();
    }
?>