<?php
/* Smarty version 3.1.33, created on 2019-06-16 21:47:19
  from 'D:\xamppp\htdocs\jms_shella\themes\jms_shella\templates\layouts\layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d06f12701c5c0_87706154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b31056f796017a4162fed7d0ed54178233c3f246' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\themes\\jms_shella\\templates\\layouts\\layout-left-column.tpl',
      1 => 1558585495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d06f12701c5c0_87706154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12077865315d06f126f378c6_25856292', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_332350715d06f12701c5c9_82987102', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_12077865315d06f126f378c6_25856292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_12077865315d06f126f378c6_25856292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_13862589305d06f12701c5c1_99507848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_332350715d06f12701c5c9_82987102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_332350715d06f12701c5c9_82987102',
  ),
  'content' => 
  array (
    0 => 'Block_13862589305d06f12701c5c1_99507848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="left-column col-sm-12 col-md-9 col-lg-9 col-xs-12">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13862589305d06f12701c5c1_99507848', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
