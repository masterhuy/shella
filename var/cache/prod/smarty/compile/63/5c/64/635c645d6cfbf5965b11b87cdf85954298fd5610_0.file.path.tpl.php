<?php
/* Smarty version 3.1.33, created on 2019-07-22 03:24:55
  from 'D:\xamppp\htdocs\jms_shella\modules\jmstestimonials\views\templates\hook\path.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3564c7314cd4_74918396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '635c645d6cfbf5965b11b87cdf85954298fd5610' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\modules\\jmstestimonials\\views\\templates\\hook\\path.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3564c7314cd4_74918396 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.jms-blog-nav{
	margin-bottom:10px;
}
.jms-blog-menu{
	position: relative;
	margin-bottom: 20px;
	padding: 0 10px;
	border: solid 1px #d3d8db;
	background-color: #fff;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	list-style: none;
}
.jms-blog-menu li{
	float:left;
}

.jms-blog-menu li:hover,.jms-blog-menu li.active {
	background: #333;
}

.jms-blog-menu li a{
	color: #757575;
    display: block;
    padding: 10px 20px;
    text-decoration: none !important;
}
.jms-blog-menu li:hover a,.jms-blog-menu li.active a{
	color: #fff;
	text-dicoration:none;
}
</style>
<div class="jms-blog-nav">
	<ul class="jms-blog-menu clearfix">
		<li class="<?php if ($_smarty_tpl->tpl_vars['view']->value == 'items') {?>active<?php }?>">
			<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=jmstestimonials&view=items">Items</a>
		</li>
		<li class="<?php if ($_smarty_tpl->tpl_vars['view']->value == 'config') {?>active<?php }?>">
			<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=jmstestimonials&view=config">Config</a>
		</li>
	</ul>
</div><?php }
}
