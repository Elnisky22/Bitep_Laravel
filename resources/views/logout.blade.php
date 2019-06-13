<?php
    session_start();
    unset($_SESSION["usuario"]);
    session_destroy();
    //view('home');
    header('location:/');
    exit;
?>