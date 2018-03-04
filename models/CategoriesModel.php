<?php
//мадель для таблиці категорій


    function getChildrenForCat($catID)
    {
        $sql = "SELECT *
                FROM categories
                WHERE
                parent_id = {$catID}";
        d($sql);
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