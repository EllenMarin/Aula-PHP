<?php

if($_SERVER['REQUEST_METHOD']!== 'POST'){
    
    header('HTTP/1.1 405 Method Not Allowed');
    die('Only POST method is allowed');
}

require_once 'services/calculator.php';

$total = 0; 

$num1 = (float)$_POST['num1'];
$num2 = (float)$_POST['num2'];
$op = $_POST['op'];
try {
    switch($op){
        case 'sum':
            $total = sum($num1, $num2);
            break;
        case 'sub':
            $total = sub($num1, $num2);
            break;
        case 'multiply':
            $total = multiply($num1, $num2);
            break;
        case 'division':
            $total = division($num1, $num2);
            break;
        case 'power':
            $total = power($num1, $num2);
            break;
    }
    header("Location: index.php?total=$total&num1=$num1&num2=$num2&op=$op");
}catch (Exception $e){
    $message = $e->getMessage();
    header('HTTP/1.1 400 Bad Request');
    header("Location: index.php?error=$message");

}

 
