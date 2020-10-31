<?php
include_once '../config/main.php';
include_once ENGINE_DIR . 'base.php';
include_once ENGINE_DIR . 'requests.php';


session_start();

$basket = $_SESSION['user']['basket'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($productID = post('delete_id')) {
        foreach ($_SESSION['user']['basket'] as  $index => $item) {
            if ($item['id'] = $productID) {
                unset($_SESSION['user']['basket'][$index]);
            }
        }
        redirect('basket.php');
    }
    elseif ($productID = post('id')) {
        $product = getProductById($productID);
        $_SESSION['user']['basket'][] = $product;
        redirect('basket.php');
    }


};

include_once VIEWS_DIR . 'basketVIew.php';