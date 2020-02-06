<?php
/**
 * The sidebar containing the main widget area
 *
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<aside class="small-12 large-3 sidebar-second columns sidebar-left sidebar  <?php if(is_rtl()) echo " large-pull-9 "; ?>"" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</aside><!-- #secondary -->
	<?php endif; ?>