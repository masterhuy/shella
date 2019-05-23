<div class="btn-group compact-hidden blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if} dropdown {if isset($jpb_addtocart) && $jpb_addtocart == 'ajax_cartbottom'}shoppingcart-bottom{/if}" id="cart_block" data-refresh-url="{$refresh_url}">
	<a href="#cart-cl" class="cart-icon type1" data-toggle="collapse">
		<svg aria-hidden="true" focusable="false" role="presentation"
             class="icon icon-theme-109" viewBox="0 0 24 24">
            <path d="M19.884 21.897a.601.601 0 0 1-.439.186h-15a.6.6 0 0 1-.439-.186.601.601 0 0 1-.186-.439v-15a.6.6 0 0 1 .186-.439.601.601 0 0 1 .439-.186h3.75c0-1.028.368-1.911 1.104-2.646.735-.735 1.618-1.104 2.646-1.104s1.911.368 2.646 1.104c.735.736 1.104 1.618 1.104 2.646h3.75a.6.6 0 0 1 .439.186.601.601 0 0 1 .186.439v15a.604.604 0 0 1-.186.439zM18.819 7.083h-3.125v2.5a.598.598 0 0 1-.186.439c-.124.124-.271.186-.439.186s-.315-.062-.439-.186a.6.6 0 0 1-.186-.439v-2.5h-5v2.5a.598.598 0 0 1-.186.439c-.124.124-.271.186-.439.186s-.315-.062-.439-.186a.6.6 0 0 1-.186-.439v-2.5H5.069v13.75h13.75V7.083zm-8.642-3.018a2.409 2.409 0 0 0-.733 1.768h5c0-.69-.244-1.279-.732-1.768s-1.077-.732-1.768-.732-1.279.244-1.767.732z"/>
        </svg>
        <span class="text-bag">{l s='Bag' d='Shop.Theme.Actions'}</span>
		<span class="ajax_cart_quantity">({$cart.products_count})</span>
	</a>
	<div class="text-custom">
		<span class="cart_block_total ajax_block_cart_total">{$cart.totals.total.value}</span>
	</div>
	<a href="#cart-cl" class="btn-xs tab-title" data-toggle="collapse">		 
		<span><span class="box-cart ajax_cart_quantity"> {$cart.products_count}</span> {l s='item(s) in your cart' mod='blockcart'}<i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>
	</a>
	<div id="cart-cl" class="collapse">
		<div class="shoppingcart-box">
			<div class="shoppingcart-content">
				<span class="ajax_cart_no_product" {if $cart.products_count != 0}style="display:none"{/if}>{l s='There is no product' d='Shop.Theme.Actions'}</span>
				<ul class="list products cart_block_list">
					{foreach from=$cart.products item=product}
						<li>{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</li>
					{/foreach}
				</ul>
			</div>
			<div class="cart-prices">
				<div class="checkout-info">
					{foreach from=$cart.subtotals item="subtotal"}
						<div class="{$subtotal.type} cart-prices-line">
							<span class="label">{$subtotal.label}</span>
							<span class="value">{$subtotal.value}</span>
						</div>
					{/foreach}
				</div>
				<div class="cart-button">
					<a class="button_order_cart btn-active" href="{$cart_url}" title="{l s='Check out' d='Shop.Theme'}" rel="nofollow">
						{l s='View cart' d='Shop.Theme.Actions'}
					</a>
					<a class="button_order_cart btn-black" href="{$urls.pages.order}" title="{l s='Check out' d='Shop.Theme'}" rel="nofollow">
						{l s='Checkout' d='Shop.Theme.Actions'}
					</a> 
				</div>
			</div>
		</div>
	</div>
</div>
