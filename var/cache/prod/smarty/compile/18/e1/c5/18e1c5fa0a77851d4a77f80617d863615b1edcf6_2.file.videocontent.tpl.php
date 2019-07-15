<?php
/* Smarty version 3.1.33, created on 2019-07-15 00:03:31
  from 'D:\xamppp\htdocs\jms_shella\themes\jms_shella\modules\jmsproductvideo\views\templates\hook\videocontent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2bfb13a353b7_52509550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18e1c5fa0a77851d4a77f80617d863615b1edcf6' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_shella\\themes\\jms_shella\\modules\\jmsproductvideo\\views\\templates\\hook\\videocontent.tpl',
      1 => 1561112228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2bfb13a353b7_52509550 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
	.jms-popup-wrap {
		width : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
px;
		height :<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
px;				
	}
</style>

<?php if ($_smarty_tpl->tpl_vars['product_videos']->value) {?>
<div class="jms-videos" id="jmsproductvideo">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_videos']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>	
		<div class="jms-video <?php if ($_smarty_tpl->tpl_vars['video_show']->value == '1') {?>popup-active<?php }?>">
			<div class="addon-title">
				<h3>
					<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
</p>
					<i class="d-i-flex align-items-center">
						<svg aria-hidden="true" focusable="false"
							role="presentation" class="icon icon-theme-211"
							viewBox="0 0 24 24">
							<path fill="#231F20"
								d="M12.148 20.18h-.007a105.39 105.39 0 0 1-2.503-.059 53.952 53.952 0 0 1-2.318-.138 26.318 26.318 0 0 1-2.314-.28c-.985-.196-1.738-.611-2.255-1.236-.499-.603-.819-1.361-.95-2.253-.109-.844-.175-2.174-.201-4.076.026-1.917.092-3.248.2-4.083.133-.901.453-1.66.952-2.262.517-.625 1.27-1.04 2.24-1.234a26.488 26.488 0 0 1 2.33-.282 57.503 57.503 0 0 1 2.318-.138 117.44 117.44 0 0 1 2.503-.059c.97.013 1.805.033 2.518.059.717.027 1.49.073 2.318.138.836.067 1.614.161 2.314.279.985.197 1.739.612 2.256 1.237.499.604.819 1.361.95 2.253.109.845.174 2.175.201 4.076-.027 1.917-.092 3.248-.2 4.082-.133.901-.453 1.659-.952 2.263-.518.625-1.271 1.04-2.24 1.234-.721.123-1.5.216-2.33.282-.829.066-1.602.112-2.318.138-.713.026-1.548.046-2.503.059h-.009zm-.007-15.001c-.931.013-1.756.033-2.462.059-.703.026-1.46.071-2.272.135-.804.064-1.55.154-2.217.267-.71.143-1.236.423-1.592.854-.369.446-.608 1.022-.71 1.712-.1.772-.164 2.098-.189 3.932.025 1.818.09 3.145.191 3.925.101.681.339 1.257.708 1.703.357.432.882.711 1.607.856.657.111 1.403.202 2.202.265.812.065 1.569.11 2.271.135.704.026 1.527.046 2.47.059.942-.013 1.766-.032 2.47-.059.703-.025 1.46-.07 2.271-.135a24.923 24.923 0 0 0 2.217-.268c.709-.142 1.235-.422 1.592-.853.369-.447.608-1.022.71-1.712.099-.771.164-2.098.189-3.932-.026-1.818-.09-3.144-.191-3.926-.101-.68-.339-1.256-.708-1.702-.356-.431-.883-.711-1.608-.856a25.66 25.66 0 0 0-2.202-.264 54.865 54.865 0 0 0-2.271-.135c-.705-.027-1.531-.046-2.476-.06zM9.099 16.851V7.408l7.869 4.721-7.869 4.722zm1.099-7.5v5.558l4.631-2.779-4.631-2.779z"></path>
						</svg>
						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Watch video','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
					</i>
				</h3>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['video_show']->value == '1') {?>
				<div class="jms-popup-box">				
					<div class="jms-popup-wrap">						
						<a class="popup_close"><i class="fa fa-close"></i></a>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['video']->value['links'], 'video_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video_link']->value) {
?>
							<?php if (strpos($_smarty_tpl->tpl_vars['video_link']->value,'youtube') !== false) {?>
							<iframe width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
" src="https://www.youtube-nocookie.com/embed/<?php echo htmlspecialchars(substr($_smarty_tpl->tpl_vars['video_link']->value,(strpos($_smarty_tpl->tpl_vars['video_link']->value,'?v=')+3)), ENT_QUOTES, 'UTF-8');?>
?rel=0&amp;controls=0&amp;showinfo=0<?php if ($_smarty_tpl->tpl_vars['video_autoplay']->value) {?>&amp;autoplay=1<?php }?>" frameborder="0" allowfullscreen></iframe>
							<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('count_', (explode("/",$_smarty_tpl->tpl_vars['video_link']->value)));?>
								<iframe src="https://player.vimeo.com/video/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_']->value[count($_smarty_tpl->tpl_vars['count_']->value)-1], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['video_autoplay']->value) {?>?autoplay=1<?php }?>" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>			
					</div>
					<div class="jms-popup-overlay" style="display:none;opacity:0;"></div>
				</div>	
			<?php } else { ?>			
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['video']->value['links'], 'video_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video_link']->value) {
?>				
					<?php if (strpos($_smarty_tpl->tpl_vars['video_link']->value,'youtube') !== false) {?>
						<iframe width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
" src="https://www.youtube-nocookie.com/embed/<?php echo htmlspecialchars(substr($_smarty_tpl->tpl_vars['video']->value['link'],(strpos($_smarty_tpl->tpl_vars['video_link']->value,'?v=')+3)), ENT_QUOTES, 'UTF-8');?>
?rel=0&amp;controls=0&amp;showinfo=0<?php if ($_smarty_tpl->tpl_vars['video_autoplay']->value) {?>&amp;autoplay=1<?php }?>" frameborder="0" allowfullscreen></iframe>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('count_', (explode("/",$_smarty_tpl->tpl_vars['video_link']->value)));?>
						<iframe src="https://player.vimeo.com/video/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_']->value[count($_smarty_tpl->tpl_vars['count_']->value)-1], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['video_autoplay']->value) {?>?autoplay=1<?php }?>" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_width']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video_height']->value, ENT_QUOTES, 'UTF-8');?>
" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		
			<?php }?>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
}
