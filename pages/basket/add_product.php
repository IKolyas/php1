<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = post('product');
    $item = getProductById($product['id']);
    $qyt = $product['qyt'];
    $item['qyt'] = $qyt;

    if (array_key_exists($item['id'], $_SESSION['user']['basket'])) {
        $_SESSION['user']['basket'][$item['id']] += $qyt;
    } else {
        $_SESSION['user']['basket'][$item['id']] = $qyt;
    }
}
redirect('/basket');