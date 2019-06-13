<?php
    session_start();
    unset($_SESSION["usuario"]);
    session_destroy();
    //view('home');
    header('location:/');
    exit;
?><?php /**PATH C:\xampp\htdocs\laravel\Bitep_Laravel\resources\views/logout.blade.php ENDPATH**/ ?>