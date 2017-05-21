<?php /* Smarty version Smarty-3.1.6, created on 2017-02-12 18:28:04
         compiled from "../views/default\order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22786589dbaaa1e3687-65436175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '666b6bc8023c125a090718b73de3d72f4408aabe' => 
    array (
      0 => '../views/default\\order.tpl',
      1 => 1486913282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22786589dbaaa1e3687-65436175',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_589dbaaa1e368',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
    'sum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589dbaaa1e368')) {function content_589dbaaa1e368($_smarty_tpl) {?> <div class="main-right">  
            <div class="bread-crumbs">
                <a class="crumb-zag" href="index.html">Дом</a>
                <a class="crumb crumb-1" href="index.html">Корзина</a>
            </div>
            <h1 class="page-title">Оформление заказа</h1>
               <form id="formOrder" method="POST"> 
               <label>
                    Имя
                    <input name="name" class='order_inputs' id="name" type="text" value="" required>
               </label><br>
                <label>
                    мобильный телефон
                    <input name="phone"  class='order_inputs' id="phone" type="text" value="" required>
               </label><br>
                <label>
                    адрес
                    <textarea name="adres"  class='order_inputs' id="adres" type="text" value="Ваш адрес" required></textarea>
               </label><br>
                наличными 
                    <input type="radio"  class='order_inputs' name='typeofpaymet' value='1' required>
                картой
                    <input type="radio"  class='order_inputs' name='typeofpaymet' value='2'required>
               <div>
               сумма заказа:
               </div>
               <button class="btn btn-1" name="send" type="submit" onClick="saveOrder();" >Оформить заказ</button>
               </form>
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
                                <span id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>

                                </span>
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
                    </tr>
                    <?php } ?>
                    </table>
                    <div>сумма заказа <?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
.00 РУБ.</div>
                     
            </div>
        </div>
    </main><?php }} ?>