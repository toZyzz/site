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
	$contacts='?controller=contacts';
/*  $rsCategories = getAllMainCatsWithChildren();
	$rsProducts = getTopProducts(12);*/
	$smarty->assign('pageTitle', 'Александр Юргин');
	$smarty->assign('gallery', $gallery);
	$smarty->assign('aboutArtist', $aboutArtist);
	$smarty->assign('contacts',$contacts);
	$smarty->assign('bodyClass','index');
	//$smarty->assign('wayToScript','/www/js/mainSlider.js');
	//$smarty->assign('rsCategories', $rsCategories);
	//$smarty->assign('rsProducts', $rsProducts);
	//$smarty->assign('catalog',$catalog);
	//$smarty->assign('aboutshop',$aboutshop);
	//$smarty->assign('contact',$contact);
  //  $smarty->assign('deliverypayment',$deliverypayment);
 //   $smarty->assign('waytopaginator','/www/js/paginator.js');
//	loadTemplate($smarty,'header');
//	loadTemplate($smarty,'leftcolumn');
  //	loadTemplate($smarty,'index');
  	loadTemplate($smarty,'index');
  	loadTemplate($smarty,'footer');

}