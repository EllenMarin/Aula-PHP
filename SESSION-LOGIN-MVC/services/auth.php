<?php

require_once '../core/http.php';

$users = [
    'maria' => [
        'password' => '1234', 
        'name' => 'Maria Silva',
        'roles' => ['USER']
    ],
    'joao' => [
        'password' => '4321', 
        'name' => 'João Antonio',
        'roles' => ['ADMIN']
    ],
    'jose' => [
        'password' => '9876', 
        'name' => 'José Cardoso',
        'roles' => ['USER']
    ],

];

function attemptLogin(string $username, string $password){
    global $users;
    $user = $users[$username] ?? null;

    if (is_null($user) || $user['password'] !== $password){
        throw new Exception('Invalid username or password');
    }
    $_SESSION['user'] = $user;
}

function getAuthUser(){

    if(!isset($_SESSION['user'])){
        redirect('/', 403);
    }
    return $_SESSION['user'];
}