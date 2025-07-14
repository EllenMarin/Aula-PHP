<?php

session_start();     //inicia nova sessão
session_destroy();   //destroi/remove dados de  sessão do servidor
session_unset();     //remove todas variáveis de sessão da memória
setcookie(('PHPSESSID'), '', time() - 1, '/');  //remove cookies de sessão do navegador
header('Location: /');  //redireciona usuário para outra ágina após logout