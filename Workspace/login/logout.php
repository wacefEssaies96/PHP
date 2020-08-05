<?php 
    session_start();
    session_destroy();
    unset($_SESSION['nom']);
    unset($_SESSION['email']);
    header("Location: login.php");
?>
