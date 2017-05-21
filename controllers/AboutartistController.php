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
	$aboutArtist='#';
	$contacts='?controller=contacts';
	$index='?controller=index';
/*	$rsCategories = getAllMainCatsWithChildren();
	$rsProducts = getTopProducts(12);*/
	$smarty->assign('pageTitle', 'О художнике');
	$smarty->assign('bodyClass','aboutArtist');
	$smarty->assign('gallery', $gallery);
	$smarty->assign('aboutArtist', $aboutArtist);
	$smarty->assign('contacts',$contacts);
	$smarty->assign('index',$index);
	//$smarty->assign('contact',$contact);
  //  $smarty->assign('deliverypayment',$deliverypayment);
 //   $smarty->assign('waytopaginator','/www/js/paginator.js');
	loadTemplate($smarty,'header');
	loadTemplate($smarty,'aboutArtist');
  	loadTemplate($smarty,'footer');
}