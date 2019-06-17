<?php
/* Smarty version 3.1.33, created on 2019-06-17 02:47:32
  from 'D:\xamppp\htdocs\jms_shella\admin4672dprho\themes\default\template\controllers\cms\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d07378445f3e4_32507133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f020eb99e07265689d4204f74d6ddc228bd94cc' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\admin4672dprho\\themes\\default\\template\\controllers\\cms\\helpers\\form\\form.tpl',
      1 => 1556635595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d07378445f3e4_32507133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6211516545d07378444bb61_54960291', "input");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8103278655d0737844576e1_67029744', "script");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19052317575d0737844576e5_06216980', "leadin");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15346470205d07378445b562_67148542', "input");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_6211516545d07378444bb61_54960291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_6211516545d07378444bb61_54960291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == "link_rewrite") {?>
		<?php echo '<script'; ?>
 type="text/javascript">
		<?php if (isset($_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) && $_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) {?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
		<?php } else { ?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
		<?php }?>
		<?php echo '</script'; ?>
>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "script"} */
class Block_8103278655d0737844576e1_67029744 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_8103278655d0737844576e1_67029744',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function() {
		$('#active_on').bind('click', function(){
			toggleDraftWarning(false);
		});
		$('#active_off').bind('click', function(){
			toggleDraftWarning(true);
		});
	});
<?php
}
}
/* {/block "script"} */
/* {block "leadin"} */
class Block_19052317575d0737844576e5_06216980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_19052317575d0737844576e5_06216980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div style="<?php if ($_smarty_tpl->tpl_vars['active']->value) {?>display:none<?php }?>">
		<p class="alert alert-warning">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your page will be saved as a draft','d'=>'Admin.Design.Notification'),$_smarty_tpl ) );?>

		</p>
	</div>
<?php
}
}
/* {/block "leadin"} */
/* {block "input"} */
class Block_15346470205d07378445b562_67148542 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_15346470205d07378445b562_67148542',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select_category') {?>
		<select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
			<?php echo $_smarty_tpl->tpl_vars['input']->value['options']['html'];?>

		</select>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
}
