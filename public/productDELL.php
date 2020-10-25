<?php
include_once '../config/main.php';
include_once ENGINE_DIR . 'request.php';
require_once ENGINE_DIR . 'sql.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $itemID = post('productId');
    $images = getImagesFromItem($itemID);
    foreach ($images as $image) {
        unlink($image['path']);
    }

}
$dellProd = dellProduct($itemID);
if ($dellProd) : ?>
    <div>
        <h2>Продукт успешно удалён</h2>
        <a href="./index.php"> <<<< back</a>
    </div>

<? else: ?>
    <div>
        <h2>ОШИБКА</h2>
        <a href="./index.php"> <<<< back</a>
    </div>
<? endif; ?>
