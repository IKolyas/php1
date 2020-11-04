<div class="my-3 d-flex ">
    <span class="mx-2">
        всего: <?=count($ordersList)?> наименований
    </span>
    <span class="mx-2">
        на сумму: <?=$sum?> рублей
    </span>
    <span class="mx-2">
        дата: <?=$ordersList[0]['date']?>
    </span>
    <form action="/orders/dell_order">
        <input type="hidden" name="orders" value="<?=$ordersList?>">
        <input type="submit" value="ОТМЕНИТЬ">
    </form>
</div>
