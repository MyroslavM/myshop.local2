<?php /* Smarty version Smarty-3.1.6, created on 2018-03-03 16:36:48
         compiled from "../views/default\leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50694f68d958b3de87-05074239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd86026e14cd6d235743b3882c7fc10799a2fe413' => 
    array (
      0 => '../views/default\\leftcolumn.tpl',
      1 => 1520084206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50694f68d958b3de87-05074239',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4f68d958bafb0',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f68d958bafb0')) {function content_4f68d958bafb0($_smarty_tpl) {?>	

<div id="leftColumn">


<div id="leftMenu">
	<div class="menuCaption">Меню:</div>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a> <br />
		<?php } ?>
</div>  

</div><?php }} ?>