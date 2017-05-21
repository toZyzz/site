<?php
/*
    Контроллер главной страницы
*/
 /* include_once'../models/CategoriesModel.php';
  include_once'../models/ProductsModel.php';
function testAction(){
	echo 'IndexController.php > testAction';
}*/
/*
 *Формирование главноой страницы сайта
 *@param object $smarty шаблонизатор
 */
function indexAction($smarty){
    $gallery='?controller=gallery';
	$aboutArtist='?controller=aboutartist';
	$contacts='#';
	$index='?controller=index';
	$smarty->assign('gallery', $gallery);
	$smarty->assign('aboutArtist', $aboutArtist);
	$smarty->assign('contacts',$contacts);
	$smarty->assign('index',$index);
/*
	$rsCategories = getAllMainCatsWithChildren();
	$rsProducts = getTopProducts(12);*/
	$smarty->assign('pageTitle', 'Контакты Алескандра Юргина');
	$smarty->assign('bodyClass','contacts');
    loadTemplate($smarty,'header');
    loadTemplate($smarty,'contacts');
  	loadTemplate($smarty,'footer');
}