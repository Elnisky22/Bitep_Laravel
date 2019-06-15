<?php
    Session::forget('usuario');
    Session::save();

    header('location:/index');
    exit;
?>