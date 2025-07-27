<?php

    //FILE_APPEND para "somar" o novo conteudo no final do conteudo anterior

    file_put_contents('another-file.txt', "Hello another file!\n", FILE_APPEND);

    //para apresentar o conteudo do ficheiro
    $content = file_get_contents("another-file.txt");
    //para apresentar o conteudo do ficheiro com quebras de linha
    echo nl2br($content);

    $picture = file_get_contents('gato.jpeg');
    $filename = uniqid() . '.jpeg';
    file_put_contents($filename, $picture);
