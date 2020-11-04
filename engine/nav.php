<?php
function drawMenu()
{
    $menu = [
        [
            'label' => 'Главная',
            'link' => '/'
        ],
        [
            'label' => 'Корзина',
            'link' => '/basket'
        ],
        [
            'label' => 'Заказы',
            'link' => '/orders'
        ],
        [
            'label' => 'Панель управления',
            'link' => '/admin'
        ],
    ];
    if ($user = $_SESSION['user']) {
        echo 'HELLO, ' . $user['login'] . '<br>';
        echo '<a href="/login/out">EXIT</a>';

    }
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li><a href=\"{$item['link']}\">{$item['label']}</a></li>";
    }
    echo "</ul>";
}