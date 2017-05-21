<?php /* Smarty version Smarty-3.1.6, created on 2017-02-06 18:20:48
         compiled from "../views/default\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12372589823df33b2e0-18507956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba49ac498b8cf2b9e90bf9a7a8f97ee29f5cd8d0' => 
    array (
      0 => '../views/default\\cart.tpl',
      1 => 1486394446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12372589823df33b2e0-18507956',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_589823df40e21',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
    'itemsQuantity' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589823df40e21')) {function content_589823df40e21($_smarty_tpl) {?><div class="bread-crumbs">
                <a class="crumb-zag" href="index.html">Дом</a>
                <a class="crumb crumb-1" href="index.html">Корзина</a>
            </div>
            <h1 class="page-title">Корзина</h1>
            <div class= "products-in-cart">
            </div>
                <?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value){?>
                В корзине пусто
                <?php }else{ ?>
                    <h2>Ваш заказ</h2>
                    <table>
                        <tr>
                            <td>№</td>
                            <td>Наименование</td>
                            <td>Количество</td>
                            <td>Цена товара</td>
                            <td>Общая цена</td>
                        </tr>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
                    <tr>
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
                            <td>
                                <a href="?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                            </td>
                            <td>
                                <input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['itemsQuantity']->value[];?>
" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/>
                            </td>
                            <td>
                                <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                                </span>
                            </td>
                            <td>
                                <span id='itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'>
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                                </span>
                            </td>
                    </tr>
                    <?php } ?>
                    </table>
                 <?php }?>
            </div>
        </div>
    </main><?php }} ?>