<?php

$total = $_GET['total'] ?? null;
$num1 = $_GET['num1'] ?? null;
$num2 = $_GET['num2'] ?? null;
$op = $_GET['op'] ?? null;
$error = $_GET['error'] ?? null;

function markSelectedOperation(string $currentOperation){
    global $op;

    if(is_null($op) || $op !== $currentOperation){
        return '';
    }

    return 'selected';
}

include 'views/form.view.phtml';