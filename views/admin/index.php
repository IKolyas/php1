
<div class="d-flex flex-column">
    <?php include VIEWS_DIR . '/admin/edit.php'?>
    <h2>Список товаров</h2>
    <?php foreach ($items as $item): ?>
    <div class="d-flex my-2 justify-content-between">
        <p><?= $item['product_name'] ?></p>
        <form action="/admin/product_dell" method="post">
            <input type="hidden" name="product_dell" value="<?= $item['product_id'] ?>">
            <input type="submit" value="удалить">
        </form>
    </div>
        <? endforeach; ?>
</div>