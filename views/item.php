<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Images</title>
</head>
<body>
<header>
    <div class="fixed-top">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <form class="d-flex flex-column text-white" action="./productDELL.php" method="post"
                      enctype="multipart/form-data">
                    <input type="hidden" name="productId" value="<?= $item['id'] ?>">
                    <input type="submit" value="удалить продукт">
                </form>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
</header>

<main class="p-5">

    <div class="d-flex justify-content-center align-items-center w-100">
        <div class="d-flex flex-column">
            <img class="m-4" src="<?= $images[0]['path'] ?>" alt="not images" width="500">
            <div class="d-flex">
                <? foreach ($images as $img): ?>
                    <img class="m-4" src="<?= $img['path'] ?>" alt="not" width="100">

                <? endforeach; ?>
            </div>
        </div>
        <div class="d-flex flex-column">
            <h2>title: <?= $item['product_name'] ?></h2>
            <p>description: <?= $item['product_description'] ?></p>
            <p>price: <?= $item['product_price'] ?></p>
            <p>views: <?= $item['product_views'] ?></p>
            <a href="./index.php"><<< НА ГЛАВНУЮ</a>
        </div>
    </div>

    <div class="d-flex flex-column justify-content-center align-items-center w-100">
        <h2>ОТЗЫВЫ</h2>
        <form class="d-flex flex-column" method="post" action="">
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
</main>
<footer>

</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>





