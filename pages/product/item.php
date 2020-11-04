<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $itemID = (int)post('item');
    incrementProductViews($itemID);
    $reviewUsername = post('username');
    $reviewText = post('review');
    if (isset($reviewText) && isset($reviewUsername)) {
        addReview($itemID, $reviewUsername, $reviewText);
    }
}
echo render('item', [
    'item' => getProductById($itemID),
    'images' => getImagesFromItem($itemID),
    'reviews' => getReviews($itemID)
]);
