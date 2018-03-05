<?php

/**
 *  Контроллер главной страницы
 * 
 */

//підключаємо моделі
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function testAction(){
	echo 'IndexController.php > testAction';
}

/**
 * Формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор
 */ 
function indexAction($smarty){

    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = getLastProducts(16);

    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rsCategories);

	loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}
