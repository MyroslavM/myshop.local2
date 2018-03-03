<?php
//ініціалізація бази даних
$dblocation = "127.0.0.1";
$dbname = "myshop";
$dbuser = "root";
$dbpasswd = "";

//підключення бази даних
$db = mysql_connect($dblocation,$dbuser,$dbpasswd);

if(!$db){
    echo "Помилка підключення";
    exit();
}

mysql_set_charset('utf8');

if(  ! mysql_select_db($dbname, $db) ){
    echo "помилка доступу до БД: {$dbname}";
    exit();
}