<div class="fixed-top">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <form class="d-flex flex-column text-white" action="../../productADD.php" method="post"
                  enctype="multipart/form-data">
                <p>Name:</p>
                <input type="text" name="product[product_name]">
                <p>Описание:</p>
                <input type="text" name="product[product_description]">
                <p>Цена:</p>
                <input type="number" name="product[product_price]">
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