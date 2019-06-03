<?php
/* Smarty version 3.1.33, created on 2019-05-29 03:00:47
  from 'D:\xamppp\htdocs\jms_shella\themes\jms_shella\modules\jmspagebuilder\views\templates\hook\addonalert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cee2e1f64f2c2_45066726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bae3913bb5dcbd947077988208a0c08c93d1b1a' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\themes\\jms_shella\\modules\\jmspagebuilder\\views\\templates\\hook\\addonalert.tpl',
      1 => 1558596223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cee2e1f64f2c2_45066726 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-alertbox">
	<div class="alert alert-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alert_type']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['box_class']->value, ENT_QUOTES, 'UTF-8');
}?> d-flex flex-center">
		<?php echo $_smarty_tpl->tpl_vars['alert_message']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['show_close_btn']->value) {?>
		  	<a href="#" class="close d-flex flex-center" data-dismiss="alert" aria-label="close">
		  		<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-190" viewBox="0 0 24 24">
                    <path d="M7.718 15.966a.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449l3.32-3.301-3.32-3.301a.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.131.176.28.176.449a.65.65 0 0 1-.176.449l-3.32 3.301 3.32 3.301c.117.131.176.28.176.449a.65.65 0 0 1-.176.449.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127l-3.301-3.32-3.301 3.32a.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .813.813 0 0 1-.215-.127z"/>
                </svg>
		  	</a>
		<?php }?>
	</div>
</div>


<?php }
}
