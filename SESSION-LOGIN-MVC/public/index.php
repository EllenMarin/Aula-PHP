<?php

    if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }

    $route = $_SERVER['PATH_INFO'] ?? '/';

    switch($route){
        case '/':
            require_once '../controllers/login.php';
            break;
        case '/dashboard':
            require_once '../controllers/dashboard.php';
            break;
        case '/logout':
            require_once '../controllers/logout.php';
            break;
        default:
            header('HTTP/1.1 404 Not Found');
            die('404 Not Found');
    }