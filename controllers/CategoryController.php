<?php
/*
 * контроллер строрінки категорії
 *
 */

//підключаємо моделі



include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/*
 *
 * формування сторінки категорії
 *
 */
/**
 * @param $smarty
 */
function indexAction($smarty){
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if( $catId == null) exit();

    $rsProducts = null;
    $rsChildCats = null;
    $rsCategory = getCatById($catId);//визначає яка категорія(головна чи дочірня)
    //d($rsCategory);
    //якщо категорія головна то отримуємо дочірні
    //інаккше показати весь товар
    if($rsCategory ['parent_id'] == 0){
        $rsChildCats = getChildrenForCat($catId);
    } else{
        $rsProducts = getProductsByCat($catId);
    }


    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'Товари категорії '  . $rsCategory['name']);

    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsChildCats', $rsChildCats);


    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');
}