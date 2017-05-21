<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://yurgin/www/{$TemplateWebPath}css/normalize.css">
    <link rel="stylesheet" type="text/css" href="http://yurgin/www/{$TemplateWebPath}css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="/www/js/main.js" type="text/javascript"></script>
    <title>{$pageTitle}</title>
    <style>
        @font-face {
        font-family: Handbook; /* Гарнитура шрифта */
        src: url(http://yurgin/www/{$TemplateWebPath}fonts/10446.ttf); /* Путь к файлу со шрифтом */
    }
    </style>
</head>
<body class ="{$bodyClass}">
    <div class="container clearfix">
        <header class="head_artist">
            <h1 class="index_head">Александр Юргин</h1>
            <nav class="main_navigation">
                <ul>
                    <li>
                        <a class="navigate_link1" href="{$index}">На главную</a>
                    </li>
                    <li>
                        <a class="navigate_link" href="{$gallery}">Галерея</a>
                    </li>
                    <li>
                        <a class="navigate_link" href="{$aboutArtist}">О художнике</a>
                    </li>
                    <li>
                        <a class="navigate_link" href="{$contacts}">Контакты</a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
    <main class="index_main">
        <div class="container clearfix">