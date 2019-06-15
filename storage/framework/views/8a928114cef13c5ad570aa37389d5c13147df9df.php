<?php
    //session_start();
    
    //dd(Session::get('usuario'));
    Session::forget('usuario');
    
    //dd(Session::get('usuario'));
    //Session::flush();
    //unset($_SESSION["usuario"]);
    //session_destroy();
    //view('home');
    //header('location:/');
    route('index.index');
    //exit;
?><?php /**PATH C:\xampp\htdocs\laravel\Bitep_Laravel\resources\views/logout.blade.php ENDPATH**/ ?>