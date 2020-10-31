
<a href="/admin/products/edit.php">Создать</a>
<table>
    <?php foreach ($items as $item): ?>
    <tr>
        <td>
            <?= $item['id'] ?>
        </td>
        <td>
        <a href="/admin/products/edit.php?id=<?=$item['id']?>">
                <?= $item['product_name'] ?>
        </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>