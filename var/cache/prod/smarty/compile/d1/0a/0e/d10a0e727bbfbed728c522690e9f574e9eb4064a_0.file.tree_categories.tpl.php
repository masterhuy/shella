<?php
/* Smarty version 3.1.33, created on 2019-05-24 05:43:09
  from 'D:\xamppp\htdocs\jms_shella\admin4672dprho\themes\default\template\helpers\tree\tree_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce7bcad8e9172_95559505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd10a0e727bbfbed728c522690e9f574e9eb4064a' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\admin4672dprho\\themes\\default\\template\\helpers\\tree\\tree_categories.tpl',
      1 => 1556635595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce7bcad8e9172_95559505 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {
echo $_smarty_tpl->tpl_vars['header']->value;
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<ul id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
" class="cattree tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var currentToken="<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
";
	<?php if (isset($_smarty_tpl->tpl_vars['use_checkbox']->value) && $_smarty_tpl->tpl_vars['use_checkbox']->value == true) {?>
		function checkAllAssociatedCategories($tree)
		{
			$tree.find(":input[type=checkbox]").each(
				function()
				{
					$(this).prop("checked", true);
					$(this).parent().addClass("tree-selected");
				}
			);
		}

		function uncheckAllAssociatedCategories($tree)
		{
			$tree.find(":input[type=checkbox]").each(
				function()
				{
					$(this).prop("checked", false);
					$(this).parent().removeClass("tree-selected");
				}
			);
		}
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['use_search']->value) && $_smarty_tpl->tpl_vars['use_search']->value == true) {?>
		$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-categories-search").bind("typeahead:selected", function(obj, datum) {
		    $("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
").find(":input").each(
				function()
				{
					if ($(this).val() == datum.id_category)
					{
						<?php if ((!(isset($_smarty_tpl->tpl_vars['use_checkbox']->value) && $_smarty_tpl->tpl_vars['use_checkbox']->value == true))) {?>
							$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
 label").removeClass("tree-selected");
						<?php }?>
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents('ul.tree').each(function(){
							$(this).show();
							$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
						});
					}
				}
			);
		});
	<?php }?>
	$(document).ready(function () {
		$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
").tree("collapseAll");

		<?php if (isset($_smarty_tpl->tpl_vars['selected_categories']->value)) {?>
			<?php $_smarty_tpl->_assignInScope('imploded_selected_categories', implode('","',$_smarty_tpl->tpl_vars['selected_categories']->value));?>
			var selected_categories = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_categories']->value;?>
");

			$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
").find(":input").each(
				function()
				{
					if ($.inArray($(this).val(), selected_categories) != -1)
					{
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents('ul.tree').each(function(){
							$(this).show();
							$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
						});
					}
				}
			);
		<?php }?>
	});
<?php echo '</script'; ?>
>
<?php }
}
