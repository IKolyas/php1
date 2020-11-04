<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $itemID = post('product_dell');
    $images = getImagesFromItem($itemID);
    foreach ($images as $image) {
        unlink($image['path']);
    }
    dellProduct($itemID);
}
redirect('/admin');


