
<section class="<?php echo esc_attr(phonerepair_get_option( 'phonerepair_menu_style', 'creative' )); ?> top-bar-section nav_left">
		<?php
		$defaults = array(
			'theme_location'  => 'primary',
			'menu'            => 'left',
			'container'       => 'div',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu right ',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => new top_bar_walker
		);

		wp_nav_menu( $defaults );

		?>
</section>
<section class="<?php echo esc_attr(phonerepair_get_option( 'phonerepair_menu_style', 'creative' )); ?> top-bar-section nav_right">
	<?php
	$defaults = array(
		'theme_location'  => 'primary-right',
		'menu'            => 'right',
		'container'       => 'div',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu right ',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => new top_bar_walker
	);
	wp_nav_menu( $defaults );

	?>

</section>