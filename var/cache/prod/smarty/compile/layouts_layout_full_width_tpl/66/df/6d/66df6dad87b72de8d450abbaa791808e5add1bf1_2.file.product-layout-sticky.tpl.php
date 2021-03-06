<?php
/* Smarty version 3.1.33, created on 2019-07-23 05:36:21
  from 'D:\xamppp\htdocs\jms_shella\themes\jms_shella\templates\catalog\product-layout-sticky.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d36d51594dff6_70581703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66df6dad87b72de8d450abbaa791808e5add1bf1' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\themes\\jms_shella\\templates\\catalog\\product-layout-sticky.tpl',
      1 => 1563869737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails-horizontal.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_5d36d51594dff6_70581703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16113417265d36d5158c15d6_07395950', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17450562295d36d5158c5459_23475475', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17364599585d36d5158d0fd9_62296150', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_16113417265d36d5158c15d6_07395950 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_16113417265d36d5158c15d6_07395950',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_17450562295d36d5158c5459_23475475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_17450562295d36d5158c5459_23475475',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:type" content="product">
    <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
        <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }
}
}
/* {/block 'head'} */
/* {block 'product_flags'} */
class Block_1494307235d36d5158d4e52_60972959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <ul class="product-flags">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
                                            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover_tumbnails'} */
class Block_6809407495d36d5158e09d2_87235586 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-horizontal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_cover_tumbnails'} */
/* {block 'page_content'} */
class Block_4197684065d36d5158d4e55_48793803 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1494307235d36d5158d4e52_60972959', 'product_flags', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6809407495d36d5158e09d2_87235586', 'product_cover_tumbnails', $this->tplIndex);
?>

                            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19784578015d36d5158d4e59_99835637 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <section class="page-content" id="content">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4197684065d36d5158d4e55_48793803', 'page_content', $this->tplIndex);
?>

                        </section>
                    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_availability'} */
class Block_16325247945d36d5158e09d1_18045447 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
                        <span id="product-availability">
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
                                <span style="color:#fff; background:#25A799"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
                                <i class="material-icons product-last-items">&#xE002;</i>
                            <?php } else { ?>
                                <span style="color:#fff; background:#858585;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php }?>
                        </span>
                        <?php }?>
                    <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_cover'} */
class Block_3296582915d36d5158e86d1_50286298 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="product-cover">
                            <img class="zoom_01 js-qv-product-cover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
                        </div>
                    <?php
}
}
/* {/block 'product_cover'} */
/* {block 'page_title'} */
class Block_8363430115d36d5158f03d6_19081955 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_10231821585d36d5158f03d4_79073301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <h2 itemprop="name" class="pd-name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8363430115d36d5158f03d6_19081955', 'page_title', $this->tplIndex);
?>
</h2>
                        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_6737484015d36d5158ec554_10139841 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10231821585d36d5158f03d4_79073301', 'page_header', $this->tplIndex);
?>

                    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_9197321945d36d5158f03d4_69577595 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_4913602045d36d5158f4266_25925986 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-desc"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],350,"..." ));?>
</div>
                        <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_1506860665d36d5158ffde0_16773941 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
                            <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_miniature'} */
class Block_13959087905d36d51590b968_03766772 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
                                                                    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_14778138925d36d515903c65_42536246 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                                            <section class="product-pack">
                                                <h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
                                                <article>
                                                    <div class="card">
                                                        <div class="pack-product-container">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Products</th>
                                                                        <th>Price</th>
                                                                        <th>Quantity</th>
                                                                    </tr>
                                                                </thead>
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13959087905d36d51590b968_03766772', 'product_miniature', $this->tplIndex);
?>

                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </article>
                                            </section>
                                        <?php }?>
                                    <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_19200062345d36d51590b963_74365168 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_variants'} */
class Block_8928137265d36d51590f7e0_53972772 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_add_to_cart'} */
class Block_11726662375d36d51590f7e7_64946022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_5155566555d36d515913663_67826787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                                    <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_19251744025d36d5158ffde4_61776850 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                                    <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                                    <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14778138925d36d515903c65_42536246', 'product_pack', $this->tplIndex);
?>

                                    
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19200062345d36d51590b963_74365168', 'product_discounts', $this->tplIndex);
?>

                                    
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8928137265d36d51590f7e0_53972772', 'product_variants', $this->tplIndex);
?>


                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11726662375d36d51590f7e7_64946022', 'product_add_to_cart', $this->tplIndex);
?>


                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5155566555d36d515913663_67826787', 'product_refresh', $this->tplIndex);
?>

                                </form>
                            <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_description'} */
class Block_9921440925d36d515926ee4_86258231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <div class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                                            <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_7338114725d36d515926ee7_81745934 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_1221246095d36d51592ad68_10628054 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                                                    <div class="tab-pane fade in" id="attachments" role="tabpanel">
                                                        <section class="product-attachments">
                                                            <h3 class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h3>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
?>
                                                                <div class="attachment">
                                                                    <h4><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
                                                                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
                                                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
                                                                    </a>
                                                                </div>
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </section>
                                                    </div>
                                                <?php }?>
                                            <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
class Block_7170049005d36d515923065_64555432 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="panel-group" id="accordion">
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#descriptionn">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                                <i class="d-i-flex">
                                                    <svg aria-hidden="true" focusable="false"
                                                        role="presentation" class="icon icon-theme-188"
                                                        viewBox="0 0 24 24">
                                                        <path d="M7.158 12.206a.598.598 0 0 1-.186-.439.6.6 0 0 1 .186-.439.602.602 0 0 1 .439-.186h3.75v-3.75a.6.6 0 0 1 .186-.439.602.602 0 0 1 .439-.186c.169 0 .315.063.439.186a.605.605 0 0 1 .186.439v3.75h3.75c.169 0 .315.063.439.186a.605.605 0 0 1 .186.439.6.6 0 0 1-.186.439.601.601 0 0 1-.439.186h-3.75v3.75a.6.6 0 0 1-.186.439.601.601 0 0 1-.439.186.597.597 0 0 1-.439-.186.598.598 0 0 1-.186-.439v-3.75h-3.75a.598.598 0 0 1-.439-.186z"/>
                                                    </svg>
                                                </i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="descriptionn" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9921440925d36d515926ee4_86258231', 'product_description', $this->tplIndex);
?>

                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#product-details">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                            <i class="d-i-flex">
                                                <svg aria-hidden="true" focusable="false"
                                                    role="presentation" class="icon icon-theme-188"
                                                    viewBox="0 0 24 24">
                                                    <path d="M7.158 12.206a.598.598 0 0 1-.186-.439.6.6 0 0 1 .186-.439.602.602 0 0 1 .439-.186h3.75v-3.75a.6.6 0 0 1 .186-.439.602.602 0 0 1 .439-.186c.169 0 .315.063.439.186a.605.605 0 0 1 .186.439v3.75h3.75c.169 0 .315.063.439.186a.605.605 0 0 1 .186.439.6.6 0 0 1-.186.439.601.601 0 0 1-.439.186h-3.75v3.75a.6.6 0 0 1-.186.439.601.601 0 0 1-.439.186.597.597 0 0 1-.439-.186.598.598 0 0 1-.186-.439v-3.75h-3.75a.598.598 0 0 1-.439-.186z"/>
                                                </svg>
                                            </i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="product-details" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7338114725d36d515926ee7_81745934', 'product_details', $this->tplIndex);
?>

                                    </div>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#attachmentss">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                                <i class="d-i-flex">
                                                    <svg aria-hidden="true" focusable="false"
                                                        role="presentation" class="icon icon-theme-188"
                                                        viewBox="0 0 24 24">
                                                        <path d="M7.158 12.206a.598.598 0 0 1-.186-.439.6.6 0 0 1 .186-.439.602.602 0 0 1 .439-.186h3.75v-3.75a.6.6 0 0 1 .186-.439.602.602 0 0 1 .439-.186c.169 0 .315.063.439.186a.605.605 0 0 1 .186.439v3.75h3.75c.169 0 .315.063.439.186a.605.605 0 0 1 .186.439.6.6 0 0 1-.186.439.601.601 0 0 1-.439.186h-3.75v3.75a.6.6 0 0 1-.186.439.601.601 0 0 1-.439.186.597.597 0 0 1-.439-.186.598.598 0 0 1-.186-.439v-3.75h-3.75a.598.598 0 0 1-.439-.186z"/>
                                                    </svg>
                                                </i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="attachmentss" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1221246095d36d51592ad68_10628054', 'product_attachments', $this->tplIndex);
?>

                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>

                                                <i class="d-i-flex">
                                                    <svg aria-hidden="true" focusable="false"
                                                        role="presentation" class="icon icon-theme-188"
                                                        viewBox="0 0 24 24">
                                                        <path d="M7.158 12.206a.598.598 0 0 1-.186-.439.6.6 0 0 1 .186-.439.602.602 0 0 1 .439-.186h3.75v-3.75a.6.6 0 0 1 .186-.439.602.602 0 0 1 .439-.186c.169 0 .315.063.439.186a.605.605 0 0 1 .186.439v3.75h3.75c.169 0 .315.063.439.186a.605.605 0 0 1 .186.439.6.6 0 0 1-.186.439.601.601 0 0 1-.439.186h-3.75v3.75a.6.6 0 0 1-.186.439.601.601 0 0 1-.439.186.597.597 0 0 1-.439-.186.598.598 0 0 1-.186-.439v-3.75h-3.75a.598.598 0 0 1-.439-.186z"/>
                                                    </svg>
                                                </i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
                                                <div class="tab-pane fade in <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tabpanel" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

                                                </div>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_miniature'} */
class Block_3415730625d36d5159462f4_80494994 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
                                <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_2970865645d36d5159462f1_99121893 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                <section class="product-accessories clearfix">
                    <div class="addon-title">
                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accessories','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
                    </div>
                
                    <div class="products accessories-carousel customs-carousel-product">      
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                            <div class="item ajax_block_product">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3415730625d36d5159462f4_80494994', 'product_miniature', $this->tplIndex);
?>
  
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </section>
            <?php }?>
        <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_3451789435d36d51594a175_86829038 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_18708564425d36d51594dff8_52485120 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer_container'} */
class Block_18370035645d36d51594dff5_05685618 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_17364599585d36d5158d0fd9_62296150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17364599585d36d5158d0fd9_62296150',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_19784578015d36d5158d4e59_99835637',
  ),
  'page_content' => 
  array (
    0 => 'Block_4197684065d36d5158d4e55_48793803',
  ),
  'product_flags' => 
  array (
    0 => 'Block_1494307235d36d5158d4e52_60972959',
  ),
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_6809407495d36d5158e09d2_87235586',
  ),
  'product_availability' => 
  array (
    0 => 'Block_16325247945d36d5158e09d1_18045447',
  ),
  'product_cover' => 
  array (
    0 => 'Block_3296582915d36d5158e86d1_50286298',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_6737484015d36d5158ec554_10139841',
  ),
  'page_header' => 
  array (
    0 => 'Block_10231821585d36d5158f03d4_79073301',
  ),
  'page_title' => 
  array (
    0 => 'Block_8363430115d36d5158f03d6_19081955',
  ),
  'product_prices' => 
  array (
    0 => 'Block_9197321945d36d5158f03d4_69577595',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_4913602045d36d5158f4266_25925986',
  ),
  'product_customization' => 
  array (
    0 => 'Block_1506860665d36d5158ffde0_16773941',
  ),
  'product_buy' => 
  array (
    0 => 'Block_19251744025d36d5158ffde4_61776850',
  ),
  'product_pack' => 
  array (
    0 => 'Block_14778138925d36d515903c65_42536246',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_13959087905d36d51590b968_03766772',
    1 => 'Block_3415730625d36d5159462f4_80494994',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_19200062345d36d51590b963_74365168',
  ),
  'product_variants' => 
  array (
    0 => 'Block_8928137265d36d51590f7e0_53972772',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_11726662375d36d51590f7e7_64946022',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_5155566555d36d515913663_67826787',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_7170049005d36d515923065_64555432',
  ),
  'product_description' => 
  array (
    0 => 'Block_9921440925d36d515926ee4_86258231',
  ),
  'product_details' => 
  array (
    0 => 'Block_7338114725d36d515926ee7_81745934',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_1221246095d36d51592ad68_10628054',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_2970865645d36d5159462f1_99121893',
  ),
  'product_footer' => 
  array (
    0 => 'Block_3451789435d36d51594a175_86829038',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_18708564425d36d51594dff8_52485120',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_18370035645d36d51594dff5_05685618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="row product-detail sticky">
            <div class="pb-left-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="pd-left-content">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19784578015d36d5158d4e59_99835637', 'page_content_container', $this->tplIndex);
?>

                </div>
            </div>
            <div class="pb-right-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="container-cs">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16325247945d36d5158e09d1_18045447', 'product_availability', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3296582915d36d5158e86d1_50286298', 'product_cover', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6737484015d36d5158ec554_10139841', 'page_header_container', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9197321945d36d5158f03d4_69577595', 'product_prices', $this->tplIndex);
?>

            
                    <div class="product-information">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4913602045d36d5158f4266_25925986', 'product_description_short', $this->tplIndex);
?>


                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] > 0) {?>
                            <div class="specific_prices">
                                <div class="countdown-box">
                                    <div class="countdown"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'], ENT_QUOTES, 'UTF-8');?>
</div>
                                </div>
                            </div>
                        <?php }?>
                    
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1506860665d36d5158ffde0_16773941', 'product_customization', $this->tplIndex);
?>

                        <?php }?>
                        
                    
                        <div class="product-actions">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19251744025d36d5158ffde4_61776850', 'product_buy', $this->tplIndex);
?>

                        </div>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                        <ul class="other-info">
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
                                <!-- number of item in stock -->
                                <li id="product_reference">
                                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Code:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                                    <span class="editable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </li>
                            <?php }?>
                            <!-- availability or doesntExist -->
                            <li id="availability_statut">
                                <label id="availability_label">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                </label>
                                <span id="availability_value" class="label-availability">
                                    <?php if (intval($_smarty_tpl->tpl_vars['product']->value['quantity']) <= 0) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                    <?php } else { ?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                    <?php }?>
                                </span>
                            </li>
                            <li>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['additional_shipping_cost'] > 0) {?>
                                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping tax: '),$_smarty_tpl ) );?>
</label>
                                    <span class="shipping_cost"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['additional_shipping_cost'], ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php } else { ?>
                                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping tax:'),$_smarty_tpl ) );?>
</label>
                                    <span class="shipping_cost"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Free'),$_smarty_tpl ) );?>
</span>
                                <?php }?>
                            </li>
                        </ul>
                    </div>
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox_ld1s"></div>

                    <div id="more_info_block" class="tabs v2">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7170049005d36d515923065_64555432', 'product_tabs', $this->tplIndex);
?>

                    </div>
                </div>
            </div>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2970865645d36d5159462f1_99121893', 'product_accessories', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3451789435d36d51594a175_86829038', 'product_footer', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18708564425d36d51594dff8_52485120', 'product_images_modal', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18370035645d36d51594dff5_05685618', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
