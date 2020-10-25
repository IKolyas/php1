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
                <form class="d-flex flex-column text-white" action="./productADD.php" method="post"
                      enctype="multipart/form-data">
                    <p>Name:</p>
                    <input type="text" name="product_name">
                    <p>Описание:</p>
                    <input type="text" name="product_description">
                    <p>Цена:</p>
                    <input type="number" name="product_price">
                    <br>
                    <p>Images:</p>
                    <input type="file" name="image[]" multiple>
                    <br>
                    <input type="submit">
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
    <div class="d-flex justify-content-center align-items-center mt-5">

        <? foreach ($items as $item): ?>
            <div class="card m-2" style="width: 18rem;">
                <img src="<?= $item['path'] ?>" class="card-img-top" alt="<?= $item['title'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $item['product_name'] ?></h5>
                    <p class="card-text"><?= $item['product_price'] ?> rub</p>
                    <a href="./product.php?id=<?= $item['product_id'] ?>" class="btn btn-primary">смотреть</a>
                </div>
            </div>
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

