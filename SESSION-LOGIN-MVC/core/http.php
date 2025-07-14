<?php

//redirecionamento de url
function redirect(string $url): void{
    header("Location: $url");
    die();
}
//status de erro
function status(int $code): void{
    switch($code){
        case 400: header('HTTP/1.1 400 Bad Request'); break;
        case 401: header('HTTP/1.1 401 Unauthorized'); break;
        case 403: header('HTTP/1.1 403 Forbidden'); break;
        case 404: header('HTTP/1.1 404 Not Found'); break;
    }
}