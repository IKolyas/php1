<?php

function addOrder(array $order)
{
    $sql = "INSERT INTO `order`(user_id, product_id, count, sum) 
            VALUES ({$order['user_id']}, {$order['product_id']}, {$order['count']}, {$order['sum']});";
    return execute($sql);
}

function getOrdersByUserID(int $id) {
    $sql = "SELECT user_id, SUM(count), SUM(sum), product_id, date FROM `order` WHERE user_id = {$id} group by product_id ";

    return queryAll($sql);
}
function deleteOrdersByUserID(int $id) {
    $sql = "DELETE FROM `order` where user_id = {$id}";

    return execute($sql);
}