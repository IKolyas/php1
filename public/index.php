<?php
include_once '../config/main.php';
require ENGINE_DIR . "autoload.php";

session_start();
if(!$requestUri = preg_replace(['#^/#','#[?].*#'],"",  $_SERVER['REQUEST_URI'])){
    $requestUri = DEFAULT_CONTROLLER;
}

$parts = explode("/", $requestUri);
$page = $parts[0];
$action = $parts[1] ?? DEFAULT_ACTION;
$scriptName = PAGES_DIR . $page . "/" . $action . ".php";
include $scriptName;

