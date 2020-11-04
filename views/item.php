
    <div class="d-flex justify-content-center align-items-center w-100">
        <div class="d-flex flex-column">
            <img class="m-4" src="<?= '../' . $images[0]['path'] ?>" alt="not images" width="500">
            <div class="d-flex">
                <? foreach ($images as $img): ?>
                    <img class="m-4" src="<?= '../' . $img['path'] ?>" alt="not" width="100">

                <? endforeach; ?>
            </div>
        </div>
        <div class="d-flex flex-column">
            <h2>title: <?= $item['product_name'] ?></h2>
            <p>description: <?= $item['product_description'] ?></p>
            <p>price: <?= $item['product_price'] ?></p>
            <p>views: <?= $item['product_views'] ?></p>
        </div>
        <form action="/basket/add_product" method="post">
            <input type="hidden" class="d-none" name="product[id]" value="<?= $item['id'] ?>">
            <input type="number" name="product[qyt]" value="1">
            <input type="submit" value="Добавить в корзину">
        </form>
    </div>

    <div class="d-flex flex-column justify-content-center align-items-center w-100">
        <h2>ОТЗЫВЫ</h2>
        <form class="d-flex flex-column" method="post" action="/product/item">
            <input type="hidden" name="item" value="<?= $item['id'] ?>">
            <label> Имя:
                <input type="text" name="username" width="300">
            </label>
            <label> Отзыв:
                <textarea name="review"> </textarea>
            </label>
            <input type="submit" value="добавить отзыв">
        </form>
    </div>

    <div class="d-flex flex-column justify-content-center align-items-center w-100">
        <? foreach ($reviews as $review) : ?>
            <h4 class="mt-2"><?= $review['username'] ?></h4>
            <p class="m-1"><?= $review['text'] ?></p>
        <? endforeach; ?>
    </div>



