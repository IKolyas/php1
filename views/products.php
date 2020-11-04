<? foreach ($items as $item):?>
    <div class="card m-2" style="width: 18rem;">
        <img src="<?= $item['path'] ?>" class="card-img-top" alt="<?= $item['title'] ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $item['product_name'] ?></h5>
            <p class="card-text"><?= $item['product_price'] ?> rub</p>

            <form action="product/item" method="post" class="my-3">
                <input type="hidden" name="item" value="<?= $item['product_id'] ?>">
                <input type="submit" value="смотреть товар">
            </form>

        </div>
    </div>
<? endforeach; ?>
