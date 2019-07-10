<?php
/* Smarty version 3.1.33, created on 2019-07-09 04:55:31
  from 'D:\xamppp\htdocs\jms_shella\modules\jmsajaxsearch\views\templates\hook\search-ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2456839d5936_22707423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16857a61a41dfb665b9e94252342fecc2e10677e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\modules\\jmsajaxsearch\\views\\templates\\hook\\search-ajax.tpl',
      1 => 1559105760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2456839d5936_22707423 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="result_div">
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <div class="results">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                    
                    <div class="item clearfix">     
                        <?php if ($_smarty_tpl->tpl_vars['show_image']->value == 1) {?>
                        <div class="left-img">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="product_image">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['id_image'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="img-responsive" />
                            </a>
                        </div>
                        <?php }?>	
                        <div class="right-info">
                            <a class="product-link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],35,'...' ));?>

                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['show_desc']->value == 1) {?>
                                <p class="desc"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['desc'],$_smarty_tpl->tpl_vars['desc_count']->value,'...' ));?>
</p>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['show_price']->value == 1) {?>
                            <div class="content_price">
                                <span class="price new"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['no_text']->value;?>

    <?php }?>
</div><?php }
}
