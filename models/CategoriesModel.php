<?php
//мадель для таблиці категорій


    function getChildrenForCat($catID)
    {
        $sql = "SELECT *
                FROM categories
                WHERE
                parent_id = {$catID}";

        $rs = mysql_query($sql);

        return createSmartyRsArray($rs);
    }

///получити головні категорії+ дочірні
function getAllMainCatsWithChildren(){
    $sql = 'SELECT * 
            FROM categories   
            WHERE parent_id = 0';

    $rs = mysql_query($sql);

    $smartyRs = array();
    while ($row = mysql_fetch_assoc($rs)){

        $rsChildren = getChildrenForCat($row['ID']);

        if($rsChildren){
            $row['children'] = $rsChildren;
        }

        $smartyRs[] = $row;
    }

    return $smartyRs;
}
//получити данні категорії по ID
function getCatById($catId)
{
    $catId = intval($catId);
    $sql = "SELECT *
            FROM categories
            WHERE
            id = '{$catId}'";

    $rs = mysql_query($sql);

    return mysql_fetch_assoc($rs);
}