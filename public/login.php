<?php
require_once '../config/main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "db.php";
require ENGINE_DIR . "requests.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = post('login');
    $password = hashPassword(post('password'));
    if($user = userAut($login, $password)) {
        session_start();
        $_SESSION['user'] = [
            'user_id' => $user['user_id'],
            'login' => $user['login'],
            'basket' => []
        ];
        redirect('/basket.php');
    } else {
        echo "Не авторизованы!";
    }
}
include_once VIEWS_DIR . 'login.php';

