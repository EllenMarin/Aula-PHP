<?php
    session_start();

    if(!isset($_SESSION['user'])){
        header('HTTP/1.1 401 Unauthorized');
        header('Location: /');
        exit;
    }
    $user = $_SESSION['user'] ?? null;

include 'views/dashboard.view.phtml';