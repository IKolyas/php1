<?php
if (!empty($_SESSION['user']['basket'])) {
    $items = basketProducts();
}

echo render('basket', ['items' => $items]);
