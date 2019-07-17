{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="addon-alertbox">
	<div class="alert alert-{$alert_type}{if $box_class} {$box_class}{/if} d-flex flex-center">
		<div class="d-i-block p-relative sm-d-flex">
			{$alert_message nofilter}
			{if $show_close_btn}
				<a href="#" class="close d-flex flex-center" data-dismiss="alert" aria-label="close">
					<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-theme-190" viewBox="0 0 24 24">
						<path d="M7.718 15.966a.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449l3.32-3.301-3.32-3.301a.65.65 0 0 1-.176-.449c0-.169.059-.318.176-.449a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176l3.301 3.32 3.301-3.32a.65.65 0 0 1 .449-.176c.169 0 .318.059.449.176.117.131.176.28.176.449a.65.65 0 0 1-.176.449l-3.32 3.301 3.32 3.301c.117.131.176.28.176.449a.65.65 0 0 1-.176.449.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .846.846 0 0 1-.215-.127l-3.301-3.32-3.301 3.32a.846.846 0 0 1-.215.127.596.596 0 0 1-.468 0 .813.813 0 0 1-.215-.127z"/>
					</svg>
				</a>
			{/if}
		</div>
	</div>
</div>


