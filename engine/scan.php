<?php
$baseDir = "./img";
function arrScanDir(string $dir)
{
    $folder = scandir($dir);
    $connection = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE_NAME);

    foreach ($folder as $key => $file) {
        if ($file == '.' || $file == '..') continue;
        if (is_dir($dir . "/" . $file)) {
            arrScanDir($dir . "/" . $file);
        } else {
            $name = $file;
            $path = $dir . "/" . $file;
            addImage($connection, $name, $path);
        }
    }
    mysqli_close($connection);
}
arrScanDir($baseDir);
