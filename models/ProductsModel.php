<?php
//Модель для таблиці продукти (products)
//
//
//

function getLastProducts($limit = null)
{
    $sql = "SELECT *
            FROM products
            ORDER BY ID DESC ";
    if($limit){
        $sql .= " LIMIT {$limit}";
    }

    $rs = mysql_query($sql);

    return createSmartyRsArray($rs);
}

function getProductsByCat($itemId)
{
    $itemId = intval($itemId);
    $sql = "SELECT *
            FROM products
            WHERE category_id = {$itemId}";

    $rs = mysql_query($sql);//викликаємо запит

    return createSmartyRsArray($rs);//перетворюємо в масив сматрі
}