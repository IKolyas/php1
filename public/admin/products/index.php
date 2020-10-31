<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '..\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "requests.php";
session_start();
if (!isset($_SESSION['user'])) {
    redirect('/login.php');
}

$items = productsCatalog();

include VIEWS_DIR . 'admin/index.php';