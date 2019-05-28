{*
* 2007-2017 PrestaShop
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
*  @copyright  2007-2017 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="addon-instagram">
	<div class="addon-title">
		<h3>
			<span class="text-underline">
				{l s='@Shella' d='Modules.JmsPagebuilder'}
			</span>
			{l s='Follow Us On Instagram' d='Modules.JmsPagebuilder'}
		</h3>
	</div>
	<div class="instagram-carousel">
		{foreach from=$insta_images item=img}
			<a class="grouped_elements" data-fancybox-group="gallery" target="_blank" href="{$img.link nofilter}">
				<img src="{$img.url nofilter}" alt="{l s='Instagram Image' d='Modules.JmsPagebuilder'}"/>
			</a>
		{/foreach}
	</div>
</div>

