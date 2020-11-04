<?php
function basketProducts() {
    $IDs = array_filter(
        array_keys($_SESSION['user']['basket']),
        function ($element) {
            return is_int($element);
        }
    );
    $items = productsCatalog($IDs);
    foreach ($items as $keys => $item) {
        $items[$keys]['qyt'] = $_SESSION['user']['basket'][$item['id']];

    }
    return $items;
}