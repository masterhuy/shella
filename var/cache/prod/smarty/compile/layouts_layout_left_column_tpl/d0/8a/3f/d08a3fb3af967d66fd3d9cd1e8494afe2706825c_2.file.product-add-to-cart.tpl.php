<?php
/* Smarty version 3.1.33, created on 2019-06-10 00:33:41
  from 'D:\xamppp\htdocs\jms_shella\themes\jms_shella\templates\catalog\_partials\product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfddda5d62317_88492428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd08a3fb3af967d66fd3d9cd1e8494afe2706825c' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\themes\\jms_shella\\templates\\catalog\\_partials\\product-add-to-cart.tpl',
      1 => 1558585495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfddda5d62317_88492428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart">
    <?php if (isset($_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17703400045cfddda5d4ea90_07649329', 'product_quantity');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18061657335cfddda5d5e497_21692036', 'product_minimal_quantity');
?>

    <?php }?>
</div>
<?php }
/* {block 'product_quantity'} */
class Block_17703400045cfddda5d4ea90_07649329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_17703400045cfddda5d4ea90_07649329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-quantity">
                <div class="customs">
                    <div class="qty">
                      <input
                        type="text"
                        name="qty"
                        id="quantity_wanted"
                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
                        class="input-group"
                        min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
                      />
                    </div>
                </div>
      		    
                <div class="add">
    				<button title="<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>" class="product-btn add-to-cart cart-button <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?>" data-button-action="add-to-cart" type="submit" 
                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
                          disabled
                        <?php }?>>
                        <span class="la la-spin la-spinner"></span>
				        <span class="la la-check"></span>
    					<span class="text-addcart">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </span>		
    					<span class="text-outofstock">
                            <i class="la la-ban"></i>
                        </span>
    				</button>
                    <?php if (isset($_smarty_tpl->tpl_vars['jpb_wishlist']->value) && $_smarty_tpl->tpl_vars['jpb_wishlist']->value) {?>                          
                        <a class="addToWishlist product-btn" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html' )), ENT_QUOTES, 'UTF-8');?>
', false, 1); return false;" data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist'),$_smarty_tpl ) );?>
">
                            <i class="icon-heart"></i>
                        </a>
                    <?php }?>
                </div>
            </div>
            <div class="clearfix"></div>
        <?php
}
}
/* {/block 'product_quantity'} */
/* {block 'product_minimal_quantity'} */
class Block_18061657335cfddda5d5e497_21692036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_minimal_quantity' => 
  array (
    0 => 'Block_18061657335cfddda5d5e497_21692036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p class="product-minimal-quantity">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

                <?php }?>
            </p>
        <?php
}
}
/* {/block 'product_minimal_quantity'} */
}
