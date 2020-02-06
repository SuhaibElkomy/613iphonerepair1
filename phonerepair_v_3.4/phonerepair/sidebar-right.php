<?php
/**
 * The sidebar containing the main widget area
 *
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<aside class="small-12 large-3 sidebar-second columns sidebar-right sidebar  <?php if(is_rtl()) echo " large-pull-9 "; ?>"" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside><!-- #secondary -->
	<?php endif; ?>