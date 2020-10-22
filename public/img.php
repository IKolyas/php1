<?php
include_once '../config/dbConnect.php';
include_once '../engine/db.php';
$connection = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE_NAME);
$id = mysqli_escape_string($connection, $_GET['id']);
queryOne($connection, $id);
mysqli_close($connection);

