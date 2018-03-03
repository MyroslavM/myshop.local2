<?php
//мадель для таблиці категорій
function getAllMainCatsWithChildren(){
    $sql = 'SELECT * FROM categories WHERE parent_id = 0';

    $rs = mysql_query($sql);

    $smartyRs = array();
    while ($row = mysql_fetch_assoc($rs)){
        //echo "id = ". $row['id'] . '<br>';

         $smartyRs[] = $row;

    }

    return $smartyRs;
}