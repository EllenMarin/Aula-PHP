<?php

require_once '../services/auth.php';
require_once '../core/http.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    try{
        attemptLogin($username, $password);
        redirect('/dashboard');

    } catch(Exception $e){
        status(401);
        $message = $e->getMessage();
        
    }

    
}
include '../views/login.view.phtml';
