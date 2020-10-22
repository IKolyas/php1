<?php

function queryOne($connection, string $id)
{
    $query = "UPDATE gallery.images SET views = views + 1 where id = $id;";
    var_dump($query);
    return mysqli_query($connection, $query);
}

function queryAll($connection)
{
    $query = "SELECT * FROM gallery.images order by 'view' desc ;";
    return mysqli_query($connection, $query);
}

function addImage($connection, string $name, string $path)
{
    $query = "INSERT INTO gallery.images (name, path) VALUES ('$name','$path');";
    return mysqli_query($connection, $query);
}