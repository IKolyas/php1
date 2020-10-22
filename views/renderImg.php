<?php
$connection = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE_NAME);
foreach (queryAll($connection) as $item) : ?>
    <div class="d-flex flex-column align-items-center">
        <img
                id="<?= $item['id'] ?>"
                src="<?= $item['path'] ?>"
                alt="<?= $item['name'] ?>"
                class="imgs m-1">

        <p>Просмотры: <?= $item['views'] ?></p>
    </div>
<?php endforeach;
mysqli_close($connection);
?>

