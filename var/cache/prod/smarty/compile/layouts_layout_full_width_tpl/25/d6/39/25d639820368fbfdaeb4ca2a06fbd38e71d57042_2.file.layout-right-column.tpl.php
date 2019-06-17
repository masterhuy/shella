<?php
/* Smarty version 3.1.33, created on 2019-06-16 21:49:39
  from 'D:\xamppp\htdocs\jms_shella\themes\jms_shella\templates\layouts\layout-right-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06f1b30b2eb3_27155381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25d639820368fbfdaeb4ca2a06fbd38e71d57042' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\themes\\jms_shella\\templates\\layouts\\layout-right-column.tpl',
      1 => 1558585495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d06f1b30b2eb3_27155381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18398634445d06f1b30b2eb3_41835112', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13179725535d06f1b30b2eb8_80390854', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_18398634445d06f1b30b2eb3_41835112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_18398634445d06f1b30b2eb3_41835112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_8459281945d06f1b30b2eb9_72345501 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_13179725535d06f1b30b2eb8_80390854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_13179725535d06f1b30b2eb8_80390854',
  ),
  'content' => 
  array (
    0 => 'Block_8459281945d06f1b30b2eb9_72345501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="right-column col-xs-12 col-sm-12 col-md-9">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8459281945d06f1b30b2eb9_72345501', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
