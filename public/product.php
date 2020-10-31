<?php
include_once '../config/main.php';
include_once ENGINE_DIR . 'base.php';
include_once ENGINE_DIR . 'requests.php';

$reviews = [];
$itemID = (int)get('id');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    incrementProductViews($itemID);   // ++views
} else {
    $reviewUsername = post('username');
    $reviewText = post('review');
    addReview($itemID, $reviewUsername, $reviewText);
}

$item = getProductById($itemID);
$images = getImagesFromItem($itemID);
$reviews = getReviews($itemID);

?>

<? include_once VIEWS_DIR . 'item.php'; ?>



