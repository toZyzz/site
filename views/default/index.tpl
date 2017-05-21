<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://yurgin/www/{$TemplateWebPath}css/normalize.css">
    <link rel="stylesheet" type="text/css" href="http://yurgin/www/{$TemplateWebPath}css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<title>{$pageTitle}</title>
	<style>
        @font-face {
        font-family: Handbook; /* Гарнитура шрифта */
        src: url(http://yurgin/www/{$TemplateWebPath}fonts/10446.ttf); /* Путь к файлу со шрифтом */
    }
	</style>
</head>
<body id='dod' class ="index" style="background-image: url(http://yurgin/www/{$TemplateWebPath}img/картина1.jpg); ">
    <div class="container clearfix">
        <header class="head clearfix">
    	    <h1 class="index_head">Александр Юргин</h1>
    	    <div class="paginator">
                <a id='picture_0' class='pushed' href="#1">Первый слайд</a>
       	        <a id='picture_1' href="#2">Второй слайд</a>
      	        <a id='picture_2' href="#3">Третий слайд</a>
       	        <a id='picture_3' href="#">Четвёртый слайд</a>
       	        <a id='picture_4' href="#">Пятый слайд</a>
       	    </div>
        </header>
    </div>
    <main class="index_main">
        <div class="container clearfix">
    	    <nav class="main_navigation">
    		    <ul>
        	        <li>
        	            <a class="navigate_link1" href="{$gallery}">Галерея</a>
        	        </li>
        	        <li>
        	            <a class="navigate_link" href="{$aboutArtist}">О художнике</a>
        	        </li>
        	        <li>
        	            <a class="navigate_link" href="{$contacts}">Контакты</a>
        	        </li>
        	    </ul>
    	    </nav>
    	</div>
    </main>
