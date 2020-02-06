<?php


if(phonerepair_get_option('phonerepair_show_top_social_bare','on') == 'on' && phonerepair_get_option('phonerepair_menu_style','creative') == "corporate" ){ ?>
	<div class="header-top hide-for-small">
		<div class="row">
			<div class="large-6 columns header_top_left">
				<?php phonerepair_social_icons(); ?>
			</div>
			<div class="large-6 columns header_top_right text-right">
				<div class="contact-info">
          <?php if(phonerepair_get_option('adress','') != '') { ?>
					<span><span class="wd-adress"></span><?php echo esc_html(phonerepair_get_option('adress','')); ?> </span>
          <?php }
          if(phonerepair_get_option('phone','') != '') {
          ?>
          <span><span class="wd-phone"></span><?php echo esc_html__('Phone', 'phonerepair'); ?>: <?php echo esc_html(phonerepair_get_option('phone','')); ?></span>
          <?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php }