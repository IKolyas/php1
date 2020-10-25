<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "sql.php";
require_once ENGINE_DIR . "files.php";
require_once ENGINE_DIR . "request.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //получаем данные из post
    $productName = post('product_name');
    $productDescription = post('product_description');
    $productPrice = post('product_price');

    // трансформируем массив в удобный нам формат
    $images = transformArray(files('image'));

    // добавляем продукт в базу
    addProduct($productName, $productDescription, $productPrice);


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

