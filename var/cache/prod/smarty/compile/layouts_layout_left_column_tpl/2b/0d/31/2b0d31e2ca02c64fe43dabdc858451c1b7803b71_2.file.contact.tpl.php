<?php
/* Smarty version 3.1.33, created on 2019-07-11 00:52:57
  from 'D:\xamppp\htdocs\jms_shella\themes\jms_shella\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d26c0a9e7d971_53012940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b0d31e2ca02c64fe43dabdc858451c1b7803b71' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\themes\\jms_shella\\templates\\contact.tpl',
      1 => 1558585495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d26c0a9e7d971_53012940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4879967605d26c0a9e75c72_59570146', 'page_header_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4673806365d26c0a9e75c74_47673815', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7182016635d26c0a9e79af4_50709129', 'right_column');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_4879967605d26c0a9e75c72_59570146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_4879967605d26c0a9e75c72_59570146',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_4673806365d26c0a9e75c74_47673815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_4673806365d26c0a9e75c74_47673815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_content'} */
/* {block 'right_column'} */
class Block_7182016635d26c0a9e79af4_50709129 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_7182016635d26c0a9e79af4_50709129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="right-column" class="col-xs-12 col-sm-3">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayRightColumn'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'right_column'} */
}
