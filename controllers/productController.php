<?php
/*
 *
 * контроллер сторінки товарів (/product/1/)
 *
 */

include_once '../models/ProductsModel.php';
include_once '../models/CategoriesModel.php';

/*
 *
 * формування сторінки продукта
 */

function indexAction($smarty){
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if($itemId == null) exit();

    //отримання даних
    $rsProduct = getProductById($itemId);

    //получити всі категорії
    $rsCategories = getAllMainCatsWithChildren();//набір даних категорій для головного меню сайта

    $smarty->assign('pageTitle', '');//заголовок
    $smarty->assign('rsCategories', $rsCategories);//формування лівого меню
    $smarty->assign('rsProduct', $rsProduct);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');
}