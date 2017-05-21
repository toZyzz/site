<?php
/*
 Модель для таблицы категорий
*/

//получить данные подкатегорий
function getImagesById($catId){
	$sql = "SELECT id,link from pictures
	where id_category='{$catId}'";
	$rs=mysql_query($sql);
    $smartyRs =array();
    return createSmartyRsArray($rs);
}

function getImagesByChildId($catChildId){
	$sql = "SELECT id,link from pictures
	where id_child_category='{$catChildId}'";
	$rs=mysql_query($sql);
    $smartyRs =array();
    return createSmartyRsArray($rs);
}
