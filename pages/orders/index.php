<?php

if (count($_SESSION['user']['basket'])) {
    $items = basketProducts();
    $orders = [];
    foreach ($items as $item) {
        $orders[] = [
            'user_id' => (int)$_SESSION['user']['user_id'],
            'product_id' => (int)$item['id'],
            'count' => (int)$item['qyt'],
            'sum' => (int)$item['qyt'] * (int)$item['product_price']
        ];
    }
    array_walk($orders, 'addOrder');
    $_SESSION['user']['basket'] = [];
}

$ordersList = getOrdersByUserID($_SESSION['user']['user_id']);
$sum = null;
foreach ($ordersList as $prodSum) {
    $sum += $prodSum['SUM(sum)'];
}
echo render('orders', ['ordersList' => $ordersList, 'sum' => $sum]);


