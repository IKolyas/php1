<div>
    <h2>Добавить товар</h2>

    <form class="d-flex flex-column text-black" action="admin/product_add" method="post"
          enctype="multipart/form-data">
        <label>Name:
            <input type="text" name="product[product_name]">
        </label>
        <label>Описание:
            <input type="text" name="product[product_description]"></label>
        <label>Цена:
            <input type="number" name="product[product_price]"></label>
        <br>
        <label>Images:
            <input type="file" name="image[]" multiple></label>
        <br>
        <input type="submit" value="добавить товар">
    </form>
</div>