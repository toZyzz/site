<?php
/*
  Подключение к базе данных
*/

  $dblocation ="127.0.0.1";
  $dbname="yurgin";
  $dbuser="root";
  $dbpassword="";
 //соединение с бд
  $db=mysql_connect( $dblocation,$dbuser, $dbpassword);
  if(! $db){
  	echo "Ошибка доступа к MySql";
  	exit();
  }
  mysql_set_charset('utf8');
  if(! mysql_select_db($dbname, $db)){
  	echo "Ошибка доступа к базе данных:" .$dbname;
  	exit();
  }
