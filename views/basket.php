<div class="d-flex flex-column">

    <?php
    if (is_array($items)) :
        foreach ($items as $item) : ?>
            <div class="my-2">
                <h2><?= $item['product_name'] ?></h2>
                <p><?= $item['product_price'] ?></p>
                <form action="/basket/quantity" method="post">
                    <input type="hidden" name="product[id]" value="<?= $item['id'] ?>">
                    <input type="number" name="product[qyt]" value="<?= $item['qyt'] ?>">
                    <input type="submit" value="изменить количество">
                </form>
            </div>
            <div class="d-flex">
                <form action="/basket/delete_product" method="post">
                    <input type="hidden" name="product[id]" value="<?= $item['id'] ?>">
                    <input type="submit" value="удалить">
                </form>
            </div>

        <? endforeach;
    endif; ?>
    <form action="/orders">
        <input type="submit" value="создать заказ">
    </form>
</div>
