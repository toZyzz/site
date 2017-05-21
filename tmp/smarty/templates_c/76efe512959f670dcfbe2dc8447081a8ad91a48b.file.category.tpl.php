<?php /* Smarty version Smarty-3.1.6, created on 2017-02-16 22:38:19
         compiled from "../views/default\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:287855887165be9ab77-68658191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76efe512959f670dcfbe2dc8447081a8ad91a48b' => 
    array (
      0 => '../views/default\\category.tpl',
      1 => 1487273895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287855887165be9ab77-68658191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5887165c01fb2',
  'variables' => 
  array (
    'rsCategory' => 0,
    'category' => 0,
    'rsProducts' => 0,
    'item' => 0,
    'TemplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5887165c01fb2')) {function content_5887165c01fb2($_smarty_tpl) {?>                <div class="bread-crumbs">
                    <a class="crumb-zag" href="?controller=index">Дом</a>
                    <a class="crumb crumb-1" href="?controller=index">Каталог</a>
                    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                    <a class="crumb" href="#"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
                    <?php } ?>
                </div>
                <div class="main-right">
        	    	<div class="categoryName">
                        <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                        <p><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</p>
                        <?php } ?>
                    </div>
                    <div class="items clearfix">
                      <?php if (empty($_smarty_tpl->tpl_vars['rsProducts']->value)){?>
                      <p class="no-products">нет товара<p>
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