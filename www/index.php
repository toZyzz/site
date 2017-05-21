<?php
include_once '../config/config.php'; //Инициализация настроек
include_once '../config/db.php';
include_once '../library/mainFunctions.php'; // Основные функции

//Определение контроллера с которым будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']): 'Index';

//Определение функции с которой будем рботать
$actionName = isset($_GET['action']) ? ($_GET['action']): 'index';

//$smarty->assign('sum', $_SESSION['sum_of_products']);

loadPage($smarty,$controllerName,$actionName);

