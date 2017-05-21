<?php /* Smarty version Smarty-3.1.6, created on 2017-05-21 20:05:42
         compiled from "../views/default\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4087591f17058dee56-92490505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef6a15bc34ac435c3aea67ce7711e03dab45f8ca' => 
    array (
      0 => '../views/default\\gallery.tpl',
      1 => 1495386341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4087591f17058dee56-92490505',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_591f170597f10',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'rsImages' => 0,
    'TemplateWebPath' => 0,
    'slide_image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591f170597f10')) {function content_591f170597f10($_smarty_tpl) {?>            <nav class="gallery_navigation">
                <ul class="list">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li>
                        <a id="_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="up_link navigate_link" href="?controller=gallery&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?>
                        <ul class="under_list">
                            <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
                            <li>
                                <a id="__<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
" class="down_link navigate_link" href="?controller=gallery&child_id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php }?>
                    </li>
                    <?php } ?>
                </ul>
            </nav>
            <div class="picture_window">
                <div class="picture_navigate">
                    <a id="picture_up" class="up" href="#"></a>
                    <div id="slid" class="pictures_slider">
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['slide_image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide_image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsImages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide_image']->key => $_smarty_tpl->tpl_vars['slide_image']->value){
$_smarty_tpl->tpl_vars['slide_image']->_loop = true;
?>
                            <li class="first_image">
                                 <img class="metka" width="100%" src="/www/<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
img/imgStorage/<?php echo $_smarty_tpl->tpl_vars['slide_image']->value['link'];?>
">
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <a id="picture_down" href="#"></a>
                </div>
                <div class="watch_block">
                    <div class="picture_image"><img width="100%" src="img/кар1.jpg"></div>
                    <div class="description">
                        <p class="name"><span class="bold">Название: </span>Деревенская дорога</p>
                        <p class="year"><span class="bold">Год: </span>2010</p>
                        <p class="size"><span class="bold">Размер: </span> 50x60</p>
                    </div>
                    <div class="gallery_paginator">
                        <a class="paginator_left" href="#" >Влево</a>
                        <a class="paginator_right" href="#" >Вправо</a>
                    </div>
                </div>
            </div>
        </div>
    </main><?php }} ?>