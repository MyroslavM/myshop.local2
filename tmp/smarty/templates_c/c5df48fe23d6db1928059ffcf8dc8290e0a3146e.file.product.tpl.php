<?php /* Smarty version Smarty-3.1.6, created on 2018-03-13 14:27:11
         compiled from "../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76945aa7ae68d6f605-00605690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5df48fe23d6db1928059ffcf8dc8290e0a3146e' => 
    array (
      0 => '../views/default\\product.tpl',
      1 => 1520940424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76945aa7ae68d6f605-00605690',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5aa7ae68dd301',
  'variables' => 
  array (
    'rsProduct' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa7ae68dd301')) {function content_5aa7ae68dd301($_smarty_tpl) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

<img width="575" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" alt="lol">
ЦІНА: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>


<a id="addCatr_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Додати в корзину">Додати в корзину</a>
<p>Опис<br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p><?php }} ?>