<?php
/* Smarty version 3.1.33, created on 2019-07-04 03:02:13
  from 'D:\xamppp\htdocs\jms_shella\themes\jms_shella\modules\jmspagebuilder\views\templates\hook\addonsocial_type_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1da4754385a7_44885978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff660c4c65170eccc095a6d1e054388ab424b067' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\themes\\jms_shella\\modules\\jmspagebuilder\\views\\templates\\hook\\addonsocial_type_2.tpl',
      1 => 1559787502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1da4754385a7_44885978 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-social">
    <?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
        <div class="addon-title">
            <h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
        <p class="addon-desc"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
    <?php }?>
    <div id="social_block" class="type-2">
    	<ul class="find-us">
           	<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value != '') {?>
           		<li class="divider">
    		       	<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facebook_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="social-icon facebook">
    		       		<span class="fa fa-facebook"></span>
                        <span class="tooltip-wrap top">
                            <span class="tooltip-text">Facebook</span>
                        </span>
    		       	</a>
           	<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['twitter_url']->value != '') {?>
            	<li class="divider">
            		<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['twitter_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="social-icon twitter">
            			<span class="fa fa-twitter"></span>
                        <span class="tooltip-wrap top">
                            <span class="tooltip-text">Twitter</span>
                        </span>
            		</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value != '') {?>
                <li class="divider">
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['google_plus_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="social-icon gplus">
                        <span class="fa fa-google"></span>
                        <span class="tooltip-wrap top">
                            <span class="tooltip-text">Google</span>
                        </span>
                    </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['instagram_url']->value != '') {?>
                <li class="divider">
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['instagram_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="social-icon instagram">
                        <span class="fa fa-instagram"></span>
                        <span class="tooltip-wrap top">
                            <span class="tooltip-text">Instagram</span>
                        </span>
                    </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value != '') {?>
                <li class="divider">
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pinterest_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="social-icon pinterest">
                        <span class="fa fa-pinterest"></span>
                        <span class="tooltip-wrap top">
                            <span class="tooltip-text">Pinterest</span>
                        </span>
                    </a>
            <?php }?>  
            <?php if ($_smarty_tpl->tpl_vars['youtube_url']->value != '') {?>
                <li class="divider">
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['youtube_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="social-icon youtube">
                        <span class="fa fa-youtube"></span>
                        <span class="tooltip-wrap top">
                            <span class="tooltip-text">Youtube</span>
                        </span>
                    </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['linkedin_url']->value != '') {?>
            	<li class="divider">
            		<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkedin_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="social-icon linkedin">
            			<span class="fa fa-linkedin"></span>
                        <span class="tooltip-wrap top">
                            <span class="tooltip-text">Linkedin</span>
                        </span>
            		</a>
            <?php }?>        
      </ul>
    </div>
</div>
<?php }
}
