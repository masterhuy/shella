<?php
/* Smarty version 3.1.33, created on 2019-07-19 06:29:12
  from 'D:\xamppp\htdocs\jms_shella\themes\jms_shella\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d319b788b2091_04203718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46ff04c396f2bd2ebbc790796c4821ee84bae359' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\themes\\jms_shella\\templates\\page.tpl',
      1 => 1558585495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d319b788b2091_04203718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9233233715d319b788b2098_11727471', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_699780425d319b788b2092_21867834 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_15394100235d319b788b2099_41904261 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15902593075d319b788b2097_76555880 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content card card-block">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_699780425d319b788b2092_21867834', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15394100235d319b788b2099_41904261', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_18878807905d319b788b2090_22995608 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9233233715d319b788b2098_11727471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9233233715d319b788b2098_11727471',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_15902593075d319b788b2097_76555880',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_699780425d319b788b2092_21867834',
  ),
  'page_content' => 
  array (
    0 => 'Block_15394100235d319b788b2099_41904261',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_18878807905d319b788b2090_22995608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15902593075d319b788b2097_76555880', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18878807905d319b788b2090_22995608', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
