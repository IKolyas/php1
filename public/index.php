<?php
include_once '../config/main.php';
include_once ENGINE_DIR . 'requests.php';
include_once ENGINE_DIR . 'base.php';
session_start();
if (get('user')) {
    unset($_SESSION['user']);
    session_destroy();
}
if ($user = $_SESSION['user']) {
    $username = $user['login'];
}
$items = productsCatalog();
include_once VIEWS_DIR . 'index.php';

