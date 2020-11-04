<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = post('login');
    $password = hashPassword(post('password'));
    if($user = userAut($login, $password)) {
        $_SESSION['user'] = [
            'user_id' => $user['user_id'],
            'login' => $user['login'],
            'basket' => []
        ];
        redirect('/admin');
    } else {
        echo "Не авторизованы!";
    }
}
include_once VIEWS_DIR . 'login.php';

