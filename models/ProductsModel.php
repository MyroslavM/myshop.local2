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