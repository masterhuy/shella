<?php
/* Smarty version 3.1.33, created on 2019-05-29 03:00:39
  from 'D:\xamppp\htdocs\jms_shella\themes\jms_shella\modules\jmspagebuilder\views\templates\hook\addoninstagram.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cee2e17de2e76_61600236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f812f16214b72bf94d77a85b29e302c6abc3d6ba' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\themes\\jms_shella\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstagram.tpl',
      1 => 1559013419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cee2e17de2e76_61600236 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-instagram">
	<div class="addon-title">
		<h3>
			<span class="text-underline">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'@Shella','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>

			</span>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow Us On Instagram','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>

		</h3>
	</div>
	<div class="instagram-carousel">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['insta_images']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
			<a class="grouped_elements" data-fancybox-group="gallery" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['img']->value['link'];?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instagram Image','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
"/>
			</a>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>

<?php }
}
