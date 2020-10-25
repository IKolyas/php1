<?php

function transformArray(array $arr): array              // обработка массива с картинками перед загрузкой
{
    $images = [];
    foreach ($arr as $index => $val) {
        foreach ($val as $i => $v) {
            $images[$i][$index] = $v;
        }
    }
    return $images;
}

function uploadFile(array $files, string $destination)
{
    foreach ($files as $file) {
        $tmpPath = $file['tmp_name'];
        move_uploaded_file($tmpPath, $destination . $file['name']);
    }
    return true;
}