<?php
require_once ENGINE_DIR . "/db.php";

//CREATE

function addProduct(string $name, string $description, string $price)
    // добавить товар
{
    $sql = "INSERT INTO products(product_name, product_description, product_price)
            VALUES ('{$name}','{$description}', {$price})";
    return execute($sql);
}

function addImage(int $product_id, string $title, string $path)
    // добавить фото товара
{
    $sql = "INSERT INTO images(product_id, title, path) VALUES ('{$product_id}', '{$title}','{$path}')";
    return execute($sql);
}

function addReview(int $productID, string $name, string $review)
    //добавить отзыв к товару
{
    $sql = "INSERT INTO reviews(product_id, username, text) VALUES ('{$productID}', '{$name}', '{$review}')";
    return execute($sql);
}

//READ
function productsCatalog()
    // получить каталог товаров с 1 картинкой для главной страницы
{
    $sql = "SELECT * FROM products prod LEFT JOIN                                 
    (SELECT * FROM images GROUP BY product_id) img ON prod.id = img.product_id ORDER BY prod.product_views DESC";
    return queryAll($sql);
}

function getImagesFromItem(int $id)
    // получить все картинки к продукту
{
    $sql = "SELECT * FROM images WHERE images.product_id = {$id}";
    return queryAll($sql);
}

function productId()
    // получить id последнего товара в таблице
{
    $sql = "SELECT MAX(id) FROM products ";
    return queryOne($sql);
}

function getProductById(int $id)
    // получить товар по ID
{
    $sql = "SELECT * FROM products WHERE id = {$id}";
    return queryOne($sql);
}

function getReviews(int $id)
    //отзывы о продукте
{
    $sql = "SELECT * FROM reviews WHERE product_id = {$id}";
    return queryAll($sql);
}

//UPDATE

function incrementProductViews(int $id)
    // добавление просмотра
{
    return execute("UPDATE products SET product_views = product_views + 1 WHERE id = {$id}");
}

//DELETE

function dellProduct(int $id)
    //отзывы о продукте
{
    return execute("DELETE FROM products WHERE id = {$id}");
}
