<?php
/* Smarty version 3.1.33, created on 2019-06-03 03:48:31
  from 'D:\xamppp\htdocs\jms_shella\admin4672dprho\themes\default\template\helpers\tree\tree_node_item_checkbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf4d0cf2c1116_69869665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af0d3bd0eefb38125e82c55274e568acdb081713' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\admin4672dprho\\themes\\default\\template\\helpers\\tree\\tree_node_item_checkbox.tpl',
      1 => 1556635595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf4d0cf2c1116_69869665 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-name-disable<?php }?>">
		<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
