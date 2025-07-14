<?php
    require_once '../services/auth.php';
    $user = getAuthUser();

include '../views/dashboard.view.phtml';