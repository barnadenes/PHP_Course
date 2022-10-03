<?php
    session_start();

    require_once('OOP_php/inc/functions.php');
    require_once('OOP_php/inc/config.php');
    
    ensure_is_user_authenticated();

    echo $_SESSION['email'];

?>