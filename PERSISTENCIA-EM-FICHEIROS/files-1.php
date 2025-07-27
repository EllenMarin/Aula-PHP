<?php

$path = 'file.txt';
$mode = 'a+';

$fh = fopen($path, $mode);

//atraves de um pedido de http escrever conteudo no meu filesystem
//fwrite($fh, "Hello World\n");

//fputs($fh, "Hello World\n");

for ($i = 0; $i < 10; $i++){
    $text = "Line $i\n";
    fwrite($fh, $text);
}

fclose($fh);