<?php

session_start();//запувкаємо сесію
//якщо в сесії нема масива для корзини то ми його створюємо
if( ! isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

include_once '../config/config.php';        // Инициализация настроек
include_once '../config/db.php';             //ініціалізація БД
include_once '../library/mainFunctions.php'; // Основные функции

// определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';


// определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';


loadPage($smarty, $controllerName, $actionName);











































/*
 * 
include_once '../config/config.php';        // Инициализация настроек
include_once '../library/mainFunctions.php'; // Основные функции
 * 
// Константы для обращения к контроллерам
define ('PathPrefix', '../controllers/');
define ('PathPostfix', 'Controller.php');
 
function loadPage($controllerName, $actionName = 'index'){
   
}  
 
 function loadPage($controllerName, $actionName = 'index')
{
    include_once PathPrefix . $controllerName . PathPostfix;
   
    $function = $actionName . 'Action';
    $function();
} 
 
  
 * 
 * /
 */