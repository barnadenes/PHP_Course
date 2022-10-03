<?php

    session_start();
    session_unset();
    session_destroy();

    require_once('OOP_php/inc/functions.php');

    redirect('login.php');
    die();
    
?>    

