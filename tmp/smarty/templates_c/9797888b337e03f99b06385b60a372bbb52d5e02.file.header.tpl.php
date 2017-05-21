<?php /* Smarty version Smarty-3.1.6, created on 2017-05-20 11:02:08
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19701587d2ce0a41b58-19400052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1495267275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19701587d2ce0a41b58-19400052',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587d2ce0dcc02',
  'variables' => 
  array (
    'TemplateWebPath' => 0,
    'pageTitle' => 0,
    'bodyClass' => 0,
    'index' => 0,
    'gallery' => 0,
    'aboutArtist' => 0,
    'contacts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d2ce0dcc02')) {function content_587d2ce0dcc02($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://yurgin/www/<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
css/normalize.css">
    <link rel="stylesheet" type="text/css" href="http://yurgin/www/<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="/www/js/main.js" type="text/javascript"></script>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <style>
        @font-face {
        font-family: Handbook; /* Гарнитура шрифта */
        src: url(http://yurgin/www/<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
fonts/10446.ttf); /* Путь к файлу со шрифтом */
    }
    </style>
</head>
<body class ="<?php echo $_smarty_tpl->tpl_vars['bodyClass']->value;?>
">
    <div class="container clearfix">
        <header class="head_artist">
            <h1 class="index_head">Александр Юргин</h1>
            <nav class="main_navigation">
                <ul>
                    <li>
                        <a class="navigate_link1" href="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">На главную</a>
                    </li>
                    <li>
                        <a class="navigate_link" href="<?php echo $_smarty_tpl->tpl_vars['gallery']->value;?>
">Галерея</a>
                    </li>
                    <li>
                        <a class="navigate_link" href="<?php echo $_smarty_tpl->tpl_vars['aboutArtist']->value;?>
">О художнике</a>
                    </li>
                    <li>
                        <a class="navigate_link" href="<?php echo $_smarty_tpl->tpl_vars['contacts']->value;?>
">Контакты</a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
    <main class="index_main">
        <div class="container clearfix"><?php }} ?>