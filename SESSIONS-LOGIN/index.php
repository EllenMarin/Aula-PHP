<?php

$users = [
    ['username' => 'maria', 'password' => '1234', 'name' => 'Maria Silva'],
    ['username' => 'joao', 'password' => '4321', 'name' => 'João Antonio'],
    ['username' => 'jose', 'password' => '9876', 'name' => 'José Cardoso'],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $filteredUsers = array_filter($users, fn($user) => $user['username'] === $username );
    $user = $filteredUsers[0] ?? null;

    if(!is_null($user) && $user['password'] === $password){
        session_start();
        $_SESSION['user'] = $user;

        header('Location: dashboard.php');
        exit;
    }
    
    header('HTTP/1.1 401 Unauthorized');
    $message = 'Usuário ou senha inválidos';
}
include 'views/login.view.phtml';
