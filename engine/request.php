<?php

function get(string $name)
{
    if (isset($_GET[$name])) {
        return $_GET[$name];
    }
    return null;
}

function post(string $name)
{
    if (isset($_POST[$name])) {
        return $_POST[$name];
    }
    return null;
}

function files(string $file)
{
    if (isset($_FILES[$file])) {
        return $_FILES[$file];
    }
    return null;
}

