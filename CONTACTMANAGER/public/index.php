<?php

use Flag\Core\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$app->start();

//$app->addRoute(path: '/login', callback: [UsersController::class, 'login]);