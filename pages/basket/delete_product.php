<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = post('product');
    $itemID = $product['id'];
    foreach ($_SESSION['user']['basket'] as $index => $item) {
        if ($index == $itemID) {
            unset($_SESSION['user']['basket'][$index]);
        }
    }

    redirect('/basket');
}