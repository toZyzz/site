<?php
/*
    Контроллер главной страницы
*/
  include_once'../models/CategoriesModel.php';
  include_once'../models/LoadimageModel.php';

/*
 *Формирование главноой страницы сайта
 *@param object $smarty шаблонизатор
 */
function indexAction($smarty){
	$catId = isset($_GET['id']) ? $_GET['id']:null;
	$catChildId = isset($_GET['child_id']) ? $_GET['child_id']:null;
	if($catId==null && catChildId==null) exit();
	$gallery='#';
	$aboutArtist='?controller=aboutartist';
	$contacts='?controller=contacts';
	$index='?controller=index';
	$rsCategories = getAllMainCatsWithChildren();
	$rsImages = getImagesById($catId);
	//d($rsImages,0);
	if($catId==null){
	$rsImages = getImagesByChildId($catChildId);
}
	$smarty->assign('pageTitle', 'Галерея художника');
	$smarty->assign('bodyClass','gallery');
	$smarty->assign('gallery', $gallery);
	$smarty->assign('aboutArtist', $aboutArtist);
	$smarty->assign('contacts',$contacts);
	$smarty->assign('index',$index);
	$smarty->assign('rsCategories',$rsCategories);
	$smarty->assign('rsImages',$rsImages);
    loadTemplate($smarty,'header');
   	loadTemplate($smarty,'gallery');
  	loadTemplate($smarty,'footer');
}