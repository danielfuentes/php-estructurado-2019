<?php
    include_once('controladores/controlador_session_cookie.php');
    session_start();
    session_destroy();
    setcookie("password", "", -1);
    header('Location:login.php');