<?php /* Smarty version Smarty-3.1.6, created on 2017-02-16 23:11:00
         compiled from "../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11650588efb6d50d095-49338506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5df48fe23d6db1928059ffcf8dc8290e0a3146e' => 
    array (
      0 => '../views/default\\product.tpl',
      1 => 1487275858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11650588efb6d50d095-49338506',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588efb6dac9df',
  'variables' => 
  array (
    'rsCategory' => 0,
    'categ' => 0,
    'rsProduct' => 0,
    'TemplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588efb6dac9df')) {function content_588efb6dac9df($_smarty_tpl) {?>
        	    <div class="main-right">
                    <div class="bread-crumbs">
                        <a class="crumb-zag" href="?controller=index">Дом</a>
                        <a class="crumb crumb-1" href="?controller=index">Каталог</a>
                         <?php  $_smarty_tpl->tpl_vars['categ'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categ']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categ']->key => $_smarty_tpl->tpl_vars['categ']->value){
$_smarty_tpl->tpl_vars['categ']->_loop = true;
?>
                        <a class="crumb" href="?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['categ']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categ']->value['name'];?>
</a>
                         <?php } ?>
                        <a class="crumb" href="#"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</a>
                    </div>
                    <div class="item-item">
                        <img class="item-image" src="http://prshp/www/<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" width="400" height="460">
                        <div class="item-choose">
                            <p class="item-name"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</p>
                            <p class="cost"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 руб.</p>
                            <form class="choose" method= "POST">
                                <label>
                                Кол-во
                                    <input class="kolvo" id="quantity_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" name="kolvo" type="text" value='1'>
                                </label><br>
                                <label>
                                Вкус
                                    <input class="taste" name="taste" type="text">
                                </label>
                                  <button class="btn btn-1" type="submit" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;">В Корзину</a>
                                  <button class="btn btn-2" name="sender" type="submit">Быстрый заказ</button>
                            </form>
                        </div>
                        <div class= "main-description">
                    	<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>

                        </div>
                    </div>
        	    </div>
    	</div>
    </main>
 <?php }} ?>