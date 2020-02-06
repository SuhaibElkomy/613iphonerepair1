
<ul class="title-area">
  <li class="name">
		<?php if ( phonerepair_get_option( 'phonerepair_show_logo' ) == 'on' && phonerepair_get_option( 'phonerepair_logo' ) != '' ) {
			$image = phonerepair_get_option( 'phonerepair_logo' ); ?>
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo bloginfo( 'name' ) ?>"
             class="active"><img
            src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr__('Logo','phonerepair') ?>"/></a></h1>
		<?php } elseif ( phonerepair_get_option( 'phonerepair_show_title' ) == 'on' && phonerepair_get_option( 'phonerepair_show_title' ) != '' ) { ?>
      <h2><?php echo bloginfo( 'name' ) ?></h2>
		<?php } else { ?>
      <h2><?php echo bloginfo( 'name' ) ?></h2>
		<?php } ?>
  </li>
	<?php if ( phonerepair_get_option( 'phonerepair_show_top_social_bare', 'on' ) == 'on' && phonerepair_get_option( 'phonerepair_menu_style', 'creative' ) != "corporate" ) { ?>
    <li class="medium-7 large-9 columns social_logo_top">
			<?php phonerepair_social_icons(); ?>
      <div class="contact-info">
				<?php if ( phonerepair_get_option( 'adress', '' ) != '' ) { ?>
          <span><span class="wd-adress"></span><?php echo esc_html( phonerepair_get_option( 'adress', '' ) ); ?> </span>
				<?php }
				if ( phonerepair_get_option( 'phone', '' ) != '' ) {
					?>
          <span><span
              class="wd-phone"></span><?php echo esc_html__( 'Phone', 'phonerepair' ); ?>: <?php echo esc_html( phonerepair_get_option( 'phone', '' ) ); ?></span>
				<?php } ?>
      </div>

    </li>
		<?php
	}
	if ( MENU_STYLE != "offcanvas" && MENU_STYLE != "modern" ) { ?>
    <li class="medium-2 toggle-topbar menu-icon">
      <a href="#"><span><?php echo esc_html__('Menu','phonerepair'); ?></span></a>
    </li>
	<?php } ?>
</ul>