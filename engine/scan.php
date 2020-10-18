<?php
$baseDir = "./img";
function arrScanDir(string $dir): array
{
    $arrDir = [];
    $folder = scandir($dir);
    foreach ($folder as $key => $file) {
        if ($file == '.' || $file == '..') continue;
        if (!is_dir($dir . "/" . $file)) {
            $arrDir[] = $dir . "/" . $file;
        } else if (is_dir($dir . "/" . $file)) {
            $arrDir[$file] = arrScanDir($dir . "/" . $file);
        }
    }
    return $arrDir;
}