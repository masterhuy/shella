<?php
/* Smarty version 3.1.33, created on 2019-06-14 04:29:28
  from 'module:jmsblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d035ae89da8b2_20954600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b36993c0d34db5ea77cd8170bf4687eca675df27' => 
    array (
      0 => 'module:jmsblogviewstemplatesfron',
      1 => 1558585495,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d035ae89da8b2_20954600 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['sidebar']->value == 'left') {?> 
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-left-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'right') {?>
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-right-column.tpl");
} elseif ($_smarty_tpl->tpl_vars['sidebar']->value == 'no') {?>	
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-full-width.tpl");
}
$_smarty_tpl->_subTemplateRender("module:jmsblog/views/templates/front/".((string)$_smarty_tpl->tpl_vars['post_layout']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
