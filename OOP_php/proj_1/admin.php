<?php
    session_start();

    require_once('OOP_php/proj_1/inc/functions.php');
    require_once('OOP_php/proj_1/inc/config.php');
    
    ensure_is_user_authenticated();

    echo $_SESSION['email'];

?>