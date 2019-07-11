<?php
/* Smarty version 3.1.33, created on 2019-07-11 00:54:38
  from 'D:\xamppp\htdocs\jms_shella\themes\jms_shella\templates\customer\_partials\login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d26c10ea4e589_15935100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a052cff6df4377993fea11d12c1ac39d07d07fc' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\themes\\jms_shella\\templates\\customer\\_partials\\login-form.tpl',
      1 => 1562315985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5d26c10ea4e589_15935100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>


<form id="login-form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">

  <section>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19257985515d26c10ea46888_85995198', 'form_fields');
?>

    
  </section>

  <footer class="form-footer text-xs-center clearfix">
    <input type="hidden" name="submitLogin" value="1">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_653429605d26c10ea4a707_02522333', 'form_buttons');
?>


    <a class="return-to-store" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return to store','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>

    <div class="forgot-password">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot Your Password?','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

      </a>
    </div>	
  </footer>
</form>
<?php }
/* {block 'form_field'} */
class Block_1047142375d26c10ea46889_00017837 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
class Block_19257985515d26c10ea46888_85995198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_fields' => 
  array (
    0 => 'Block_19257985515d26c10ea46888_85995198',
  ),
  'form_field' => 
  array (
    0 => 'Block_1047142375d26c10ea46889_00017837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1047142375d26c10ea46889_00017837', 'form_field', $this->tplIndex);
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'form_fields'} */
/* {block 'form_buttons'} */
class Block_653429605d26c10ea4a707_02522333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_653429605d26c10ea4a707_02522333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <button class="btn-default active w-100 mb-20" data-link-action="sign-in" type="submit" class="form-control-submit">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
    <?php
}
}
/* {/block 'form_buttons'} */
}
