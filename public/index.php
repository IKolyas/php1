<?php
include_once '../config/main.php';
include_once ENGINE_DIR . 'sql.php';

$items = productsCatalog();
include_once VIEWS_DIR . 'itemsList.php';

