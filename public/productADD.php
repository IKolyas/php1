<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "requests.php";
require_once ENGINE_DIR . "files.php";
require_once ENGINE_DIR . "base.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //получаем данные из post
    $product = post('product');

    // трансформируем массив в удобный нам формат
    $images = transformArray(files('image'));

    // добавляем продукт в базу
    var_dump($product);
    addProduct($product['product_name'], $product['product_description'], $product['product_price']);


    // получаем id последнего товара
    $productID = productId();

    // перебор массива с картинками и добавление их в базу images
    // primary key привязка к id продукта
    foreach ($images as $image) {
        addImage($productID['MAX(id)'], $image['name'], './img/' . $image['name']);
    }

    //грузим картинки к товару
    $addProductIMG = uploadFile($images, IMG_DIR);

    //проверяем и выдаём сообщение об успешной загрузке
    include_once VIEWS_DIR . 'prodOK.php';
}

