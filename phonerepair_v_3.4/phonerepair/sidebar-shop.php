<?php 
	if ( ! is_active_sidebar( 'shop-widgets' ) )
	return;
	// If we get this far, we have widgets. Let do this.
?>
	<div id="secondary" class="widget-area" role="complementary">
<?php
	if (is_active_sidebar('shop-widgets')):
?>
<div class="first front-widgets">
<?php
    dynamic_sidebar('shop-widgets');
?>
</div><!-- .first -->
<?php endif; ?>
</div><!-- #secondary --> 