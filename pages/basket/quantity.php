<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item = post('product');
    $itemID = $item['id'];
    $quantity = $item['qyt'];
    foreach ($_SESSION['user']['basket'] as $key => $val) {
            if ($itemID == $key) {
                $_SESSION['user']['basket'][$key] = $quantity;
            }
        }
    redirect('/basket');
}