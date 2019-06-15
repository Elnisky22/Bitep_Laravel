<?php
    Session::forget('usuario');
    Session::save();

    header('location:/index');
    exit;
?><?php /**PATH C:\xampp\htdocs\laravel\Bitep_Laravel\resources\views/logout.blade.php ENDPATH**/ ?>