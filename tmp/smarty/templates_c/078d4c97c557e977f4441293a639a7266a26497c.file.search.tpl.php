<?php /* Smarty version Smarty-3.1.6, created on 2017-02-18 11:28:33
         compiled from "../views/default\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:966558a7faae5e4c51-31887101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078d4c97c557e977f4441293a639a7266a26497c' => 
    array (
      0 => '../views/default\\search.tpl',
      1 => 1487406509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '966558a7faae5e4c51-31887101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a7faae77723',
  'variables' => 
  array (
    'search_name' => 0,
    'rsProducts' => 0,
    'item' => 0,
    'TemplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a7faae77723')) {function content_58a7faae77723($_smarty_tpl) {?>                <div class="bread-crumbs">
                    <a class="crumb-zag" href="?controller=index">Дом</a>
                    <a class="crumb crumb-1" href="#">Поиск</a>
                </div>
                <div class="main-right">
        	    	    <div class="search-for-name">
                       Вы ищете: <?php echo $_smarty_tpl->tpl_vars['search_name']->value;?>
   
                    </div>
                    <div class="items clearfix">
                      <?php if (empty($_smarty_tpl->tpl_vars['rsProducts']->value)){?>
                      <p class="no-products">нет такого товара <p>
                      <?php }else{ ?>
                      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                      <div class="index-item">
                            <a href="?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><img src="http://prshp/www/<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" ></a>
                            <p class="cost"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 руб.</p>
                            <a class="btn" href="?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Подробнее</a>
                            <p class="name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p>
                        </div>
                      <?php } ?>
                      <?php }?>
                    </div>
        	    </div>
    		    
    	</div>
    </main><?php }} ?>