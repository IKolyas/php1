<a href="index.php">go to index</a>
<?php foreach ($basket as $item) : ?>
    <div class="my-2">
        <h2><?= $item['product_name'] ?></h2>
        <p><?= $item['product_price'] ?></p>
        <label> количество
            <input type="number" value="<? $item['count'] ?>">
        </label>
    </div>
    <form action="basket.php" method="post">
        <input type="text" name="delete_id" value="<?= $item['id'] ?>" class="d-none">
        <input type="submit" value="удалить">
    </form>
<? endforeach; ?>

