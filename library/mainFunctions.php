<?php
/*
 *   Основные функции
 */
/*Функция формирования шлавной страницы
 *
 *@param object $smarty шаблонизатор
 *@param string $controllerName название контроллера
 *@param string $actionName название функции обработки страницы
 */
function loadPage($smarty,$controllerName,$actionName='index'){
	include_once PathPrefix . $controllerName. PathPostfix;

	$function =$actionName . 'Action';
	$function($smarty);
}

/*Загрузка шаблона
 *
 *@param object $smarty шаблонизатор
 *@param string $templateName название файла шаблона
 */
function loadTemplate($smarty,$templateName){
    $smarty->display($templateName .TemplatePostfix);
}

/*
 *Функция отладки останавливает работу программы выводя значение
 * @param variant $value 
 */
function d($value=null,$die=1){
	echo 'Debug: <br/><pre>';
	print_r($value);
	echo '</pre>';
	if($die) die;
}

/*
 *Функция создает массив для Smarty
 * @param sql_query()
 */
function createSmartyRsArray($rs){
	$smartyRs=array();
	if(!empty($rs)){
    while($row=mysql_fetch_assoc($rs)){
    	$smartyRs[]=$row;
    }
}
    return $smartyRs;
}

