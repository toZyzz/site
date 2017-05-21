<?php
/*
 Модель для таблицы категорий
*/

//получить данные подкатегорий
function getChildrenForCat($catId){
	$sql = "SELECT * from childrens_for_category
	where id_parents='{$catId}'";
	$rs=mysql_query($sql);
    $smartyRs =array();
    return createSmartyRsArray($rs);
}


function getAllMainCatsWithChildren(){
    $sql = 'select *from categories';
    $rs=mysql_query($sql);
    $smartyRs= array();
    while($row=mysql_fetch_assoc($rs)){
    	$rsChildren=getChildrenForCat($row['id']);
    	if($rsChildren){
    		$row['children']=$rsChildren;
    	}
    	$smartyRs[]=$row;
    }
    return $smartyRs;
}
/*
 Получить данные категории по id
*/
//сделано для получения дочерних категорий в данном проекте их нет
function getCatById($catId){
	$catId = intval($catId);
	$sql = "select *from categories where id='{$catId}'";
    $rs=mysql_query($sql);
    return createSmartyRsArray($rs);
}
