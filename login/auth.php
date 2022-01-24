<?php 
    session_start();

    if (!isset($_SESSION['user_id']) or empty($_SESSION['user_id'])){
        header("location: /login/login.php");
    }

?>