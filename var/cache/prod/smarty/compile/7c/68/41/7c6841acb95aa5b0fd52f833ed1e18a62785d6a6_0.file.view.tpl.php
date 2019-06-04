<?php
/* Smarty version 3.1.33, created on 2019-06-03 21:37:38
  from 'D:\xamppp\htdocs\jms_shella\admin4672dprho\themes\default\template\controllers\dashboard\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf5cb623250d4_22800508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c6841acb95aa5b0fd52f833ed1e18a62785d6a6' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\admin4672dprho\\themes\\default\\template\\controllers\\dashboard\\helpers\\view\\view.tpl',
      1 => 1556635595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf5cb623250d4_22800508 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	var dashboard_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminDashboard');?>
';
	var adminstats_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminStats');?>
';
	var no_results_translation = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No result','js'=>1),$_smarty_tpl ) );?>
';
	var dashboard_use_push = '<?php echo intval($_smarty_tpl->tpl_vars['dashboard_use_push']->value);?>
';
	var read_more = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>

<div id="dashboard">
	<div class="row">
		<div class="col-lg-12">
<?php if ($_smarty_tpl->tpl_vars['warning']->value) {?>
			<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</div>
<?php }?>
			<div id="calendar" class="panel">
				<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value ));?>
" method="post" id="calendar_form" name="calendar_form" class="form-inline">
					<div class="btn-group">
						<button type="button" name="submitDateDay" class="btn btn-default submitDateDay<?php if (isset($_smarty_tpl->tpl_vars['preselect_date_range']->value) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'day') {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day','d'=>'Admin.Global'),$_smarty_tpl ) );?>

						</button>
						<button type="button" name="submitDateMonth" class="btn btn-default submitDateMonth<?php if ((!isset($_smarty_tpl->tpl_vars['preselect_date_range']->value) || !$_smarty_tpl->tpl_vars['preselect_date_range']->value) || (isset($_smarty_tpl->tpl_vars['preselect_date_range']->value) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'month')) {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Month','d'=>'Admin.Global'),$_smarty_tpl ) );?>

						</button>
						<button type="button" name="submitDateYear" class="btn btn-default submitDateYear<?php if (isset($_smarty_tpl->tpl_vars['preselect_date_range']->value) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'year') {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Year','d'=>'Admin.Global'),$_smarty_tpl ) );?>

						</button>
						<button type="button" name="submitDateDayPrev" class="btn btn-default submitDateDayPrev<?php if (isset($_smarty_tpl->tpl_vars['preselect_date_range']->value) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'prev-day') {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day','d'=>'Admin.Global'),$_smarty_tpl ) );?>
-1
						</button>
						<button type="button" name="submitDateMonthPrev" class="btn btn-default submitDateMonthPrev<?php if (isset($_smarty_tpl->tpl_vars['preselect_date_range']->value) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'prev-month') {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Month','d'=>'Admin.Global'),$_smarty_tpl ) );?>
-1
						</button>
						<button type="button" name="submitDateYearPrev" class="btn btn-default submitDateYearPrev<?php if (isset($_smarty_tpl->tpl_vars['preselect_date_range']->value) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'prev-year') {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Year','d'=>'Admin.Global'),$_smarty_tpl ) );?>
-1
						</button>
						<!--
						<button type="submit" name="submitDateRealTime" class="hide btn btn-default submitDateRealTime <?php if ($_smarty_tpl->tpl_vars['dashboard_use_push']->value) {?>active<?php }?>" value="<?php echo !intval($_smarty_tpl->tpl_vars['dashboard_use_push']->value);?>
">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Real Time'),$_smarty_tpl ) );?>

						</button> -->
					</div>
					<input type="hidden" name="datepickerFrom" id="datepickerFrom" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['date_from']->value ));?>
" class="form-control">
					<input type="hidden" name="datepickerTo" id="datepickerTo" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['date_to']->value ));?>
" class="form-control">
					<input type="hidden" name="preselectDateRange" id="preselectDateRange" value="<?php if (isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['preselect_date_range']->value,'html' ));
}?>" class="form-control">
					<div class="form-group pull-right">
						<button id="datepickerExpand" class="btn btn-default" type="button">
							<i class="icon-calendar-empty"></i>
							<span class="hidden-xs">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From','d'=>'Admin.Global'),$_smarty_tpl ) );?>

								<strong class="text-info" id="datepicker-from-info"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['date_from']->value ));?>
</strong>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To','d'=>'Admin.Global'),$_smarty_tpl ) );?>

								<strong class="text-info" id="datepicker-to-info"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['date_to']->value ));?>
</strong>
								<strong class="text-info" id="datepicker-diff-info"></strong>
							</span>
							<i class="icon-caret-down"></i>
						</button>
					</div>
					<?php echo $_smarty_tpl->tpl_vars['calendar']->value;?>

				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-lg-3" id="hookDashboardZoneOne">
			<?php echo $_smarty_tpl->tpl_vars['hookDashboardZoneOne']->value;?>

		</div>
		<div class="col-md-8 col-lg-7" id="hookDashboardZoneTwo">
			<?php echo $_smarty_tpl->tpl_vars['hookDashboardZoneTwo']->value;?>

			<div id="dashaddons" class="row-margin-bottom">
				<a href="https://addons.prestashop.com/en/209-dashboards?utm_source=back-office&amp;utm_medium=dashboard&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" class="_blank">
					<i class="icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add more dashboard modules','d'=>'Admin.Dashboard.Feature'),$_smarty_tpl ) );?>

				</a>
			</div>
		</div>
		<div class="col-md-12 col-lg-2">
			<section class="dash_news panel">
				<h3><i class="icon-rss"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop News','d'=>'Admin.Dashboard.Feature'),$_smarty_tpl ) );?>
</h3>
				<div class="dash_news_content"></div>
				<div class="text-center"><h4><a href="http://www.prestashop.com/blog/" onclick="return !window.open(this.href);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Find more news','d'=>'Admin.Dashboard.Feature'),$_smarty_tpl ) );?>
</a></h4></div>
			</section>
			<section id="dash_version" class="visible-lg">
				<iframe style="overflow:hidden;border:none" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['new_version_url']->value,'html','UTF-8' ));?>
" ></iframe>
			</section>
			<section class="dash_links panel">
				<h3><i class="icon-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Useful links",'d'=>'Admin.Dashboard.Feature'),$_smarty_tpl ) );?>
</h3>
					<dl>
						<dt><a href="http://doc.prestashop.com/display/PS17?utm_source=back-office&amp;utm_medium=dashboard&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Official Documentation",'d'=>'Admin.Dashboard.Feature'),$_smarty_tpl ) );?>
</a></dt>
						<dd><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"User, Developer and Designer Guides",'d'=>'Admin.Dashboard.Feature'),$_smarty_tpl ) );?>
</dd>
					</dl>
					<dl>
						<dt><a href="http://www.prestashop.com/forums?utm_source=back-office&amp;utm_medium=dashboard&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"PrestaShop Forum",'d'=>'Admin.Dashboard.Feature'),$_smarty_tpl ) );?>
</a></dt>
						<dd><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Connect with the PrestaShop community",'d'=>'Admin.Dashboard.Feature'),$_smarty_tpl ) );?>
</dd>
					</dl>
					<dl>
						<dt><a href="https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=dashboard&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"PrestaShop Addons",'d'=>'Admin.Dashboard.Feature'),$_smarty_tpl ) );?>
</a></dt>
						<dd><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Enhance your store with templates & modules",'d'=>'Admin.Dashboard.Feature'),$_smarty_tpl ) );?>
</dd>
					</dl>
					<dl>
						<dt><a href="https://github.com/PrestaShop/PrestaShop/issues" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Bug Tracker",'d'=>'Admin.Global'),$_smarty_tpl ) );?>
</a></dt>
						<dd><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Report issues in the Bug Tracker",'d'=>'Admin.Dashboard.Feature'),$_smarty_tpl ) );?>
</dd>
					</dl>
					<dl>
						<dt><a href="http://www.prestashop.com/en/contact-us?utm_source=back-office&amp;utm_medium=dashboard&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Contact Us!",'d'=>'Admin.Dashboard.Feature'),$_smarty_tpl ) );?>
</a></dt>
						<dd></dd>
					</dl>
			</section>
		</div>
	</div>
</div>
<?php }
}
