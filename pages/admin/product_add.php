<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $product = post('product');
    $images = transformArray(files('image'));
    addProduct($product['product_name'], $product['product_description'], $product['product_price']);
    $productID = productId();

    foreach ($images as $image) {
        addImage($productID['MAX(id)'], $image['name'], 'img/' . $image['name']);
    }

    $addProductIMG = uploadFile($images, IMG_DIR);
    redirect('/admin');
}

