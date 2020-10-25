<?php
include_once '../config/main.php';
include_once ENGINE_DIR . 'request.php';
include_once ENGINE_DIR . 'sql.php';

$reviews = [];
$itemID = (int)get('id');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    incrementProductViews($itemID);   // ++views
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reviewUsername = post('username');
    $reviewText = post('review');
    addReview($itemID, $reviewUsername, $reviewText);
}

$item = getProductById($itemID);
$images = getImagesFromItem($itemID);
$reviews = getReviews($itemID);

?>

<? include_once VIEWS_DIR . 'item.php'; ?>



