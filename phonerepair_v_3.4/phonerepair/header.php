<!doctype html>
	<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
	<html class="no-js"  <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<?php if ( ! function_exists( 'has_site_icon' ) ) {
			if(phonerepair_get_option('phonerepair_favicon','')!= '') { ?>
				<link rel="shortcut icon" href="<?php echo esc_url(phonerepair_get_option('phonerepair_favicon','')); ?>" />
			<?php }
		} ?>
		<?php wp_head() ?>
	</head>

	<body <?php body_class(); ?>>

		<?php
			if ( is_user_logged_in() ) {
				//get_template_part( 'parts/styleswicher' );
			}

      if (phonerepair_get_option('phonerepair_menu_style','creative') == "") {
        define("MENU_STYLE", "corporate", true );
      }else{
        define("MENU_STYLE", phonerepair_get_option('phonerepair_menu_style','creative'), true );
      }

			if(MENU_STYLE == "offcanvas") { ?>
			<div class="off-canvas-wrap" data-offcanvas>
			  <div class="inner-wrap">
			    <a class="left-off-canvas-toggle" href="#"><i class="fa fa-bars"></i></a>
			    <aside class="left-off-canvas-menu">
			      <?php	$defaults = array( 'walker' => new top_bar_walker	);

            wp_nav_menu( $defaults );
            ?>
			    </aside>
			<?php } ?>

		<div id="spaces-main" class="pt-perspective 
					<?php if(phonerepair_get_option('phonerepair_menu_overlay','off') == 'on') echo "menu-overlay "; ?>">
					
  		<div class="page-section home-page" id="page-content">
			<!--.l-header region -->
			<header class="l-header style-2 <?php echo esc_attr(phonerepair_get_option('phonerepair_menu_style','creative')); ?>-layout">

				<?php get_template_part( 'parts/header-top' ); ?>

				<div class="top-bar-container
					<?php if(phonerepair_get_option('phonerepair_menu_in_grid','') != 'off') echo "contain-to-grid "; ?>
					<?php if(phonerepair_get_option('phonerepair_menu_sticky', 'off')  == 'on') echo "sticky"; ?> ">

					<?php
						if(phonerepair_get_option('phonerepair_menu_style','creative') == "corporate") {
							$menu_logo_position = 'top_bar_logo_left';
						}else{
							$menu_logo_position = 'top_bar_logo_top';
						}
						
					?>

					<nav class="top-bar <?php echo esc_attr( $menu_logo_position ) ?>" data-topbar>
						<?php
							
							
					if(phonerepair_get_option('phonerepair_menu_style','creative') == "corporate") { ?>
					<div class= "row">
					<?php
						get_template_part( 'parts/title-area' ); ?>
				          <div class="<?php echo esc_attr(phonerepair_get_option('phonerepair_menu_style','creative')); ?> top-bar-section">
					          <div class="row">
						          <?php
						          get_template_part( 'parts/card-icon' );
						          get_template_part( 'parts/search-icon' );
						          get_template_part( 'parts/headermenu' );
						          ?>
						        </div>
				          </div>
		          </div>
		          <?php
					}else{
						
						get_template_part( 'parts/title-area' ); ?>
		          <div class="<?php echo esc_attr(phonerepair_get_option('phonerepair_menu_style','creative')); ?> top-bar-section">
			          <div class="row">
				          <?php
				          get_template_part( 'parts/card-icon' );
				          get_template_part( 'parts/search-icon' );
				          get_template_part( 'parts/headermenu' );
				          ?>
				        </div>
		          </div>
				<?php	
					}
		          ?>
	        </nav>
	      </div>
			</header>