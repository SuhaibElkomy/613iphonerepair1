<?php


if(MENU_STYLE == "corporate") {
	$defaults = array(
		'theme_location' => 'primary',
		'container_class' => 'menu-menu-container',
		'menu_class'      => 'menu right',
		'menu_id'         => 'menu-menu',
		'walker'          => new phonerepair_top_bar_walker,
  'fallback_cb' => 'phonerepair_header_menu_fallback'
	);
	wp_nav_menu( $defaults );
	?>

<?php }elseif(MENU_STYLE == "modern") { ?>
	<a href="#" id="trigger-overlay"><i class="fa fa-bars"></i></a>
	<div class="overlay overlay-scale">
		<button type="button" class="overlay-close"><?php echo esc_html__('Close','phonerepair'); ?></button>
		<nav>
			<?php
			$defaults = array(
				'walker'          => new phonerepair_top_bar_walker
			);
			wp_nav_menu( $defaults ); ?>
		</nav>
	</div>

<?php }elseif(MENU_STYLE == "creative") { ?>
	<?php
	$defaults = array(
		'theme_location' => 'primary',
		'menu_class'      => 'menu right',
		'walker'          => new phonerepair_top_bar_walker,
    'fallback_cb' => 'phonerepair_header_menu_fallback'
	);
	wp_nav_menu( $defaults ); ?>

<?php } elseif(MENU_STYLE == "nav-layout-metro") { // MENU_STYLE == "nav-layout-metro" ?>
	<?php  wp_nav_menu(array('container_class'=>'top-bar-section','container'=>'div',
	                         'menu_class' => 'main-nav','menu_id' => 'main-menu',
	                         'walker' => new phonerepair_top_bar_walker,
    'fallback_cb' => 'phonerepair_header_menu_fallback')); ?>
<?php }