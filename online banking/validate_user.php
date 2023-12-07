<?php
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION['isuserValid'])){
        header("location:login.php");
    }
    
?>