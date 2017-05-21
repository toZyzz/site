<?php /* Smarty version Smarty-3.1.6, created on 2017-02-18 11:29:28
         compiled from "../views/default\carte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36858989b9f7495d8-81536723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de10e5994249ce7db129b0840d03fb75fcb32633' => 
    array (
      0 => '../views/default\\carte.tpl',
      1 => 1487402528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36858989b9f7495d8-81536723',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58989b9f81480',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
    'sum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58989b9f81480')) {function content_58989b9f81480($_smarty_tpl) {?>         <div class="main-right">  
            <div class="bread-crumbs">
                <a class="crumb-zag" href="index.html">Дом</a>
                <a class="crumb crumb-1" href="index.html">Корзина</a>
            </div>
            <h1 class="page-title">Корзина</h1>
                <?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value){?>
                В корзине пусто
                <?php }else{ ?>
                <form id="order" action="?controller=cart&action=order" method="POST">

                    <h2>Ваш заказ</h2>
                    <table>
                        <tr>
                            <td>№</td>
                            <td>Наименование</td>
                            <td>Количество</td>
                            <td>Цена товара</td>
                            <td>Общая цена</td>
                            <td>Действие</td>
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
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);" />
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
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['quantity'];?>

                                </span>
                            </td>
                            <td>
                                <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;">Удалить</a>
                                <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"  href="#" onclick="addToCartAfter(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" style="display:none; ">Восстановить</a>
                            </td>
                    </tr>
                    <?php } ?>
                    </table>
                     <div>сумма заказа <?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
.00 РУБ.</div>
                     <button class="btn btn-1" name="send" type="submit">Оформить заказ</button>
                     </form>
                 <?php }?>
            </div>
        </div>
    </main><?php }} ?>