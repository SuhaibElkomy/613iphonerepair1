<?php if (get_option('phonerepair_mini_card_icon','off') != "off") {
	if ( function_exists( 'WC' ) ) { ?>
		<div class="show-cart-btn">
	          <span>
		        <i class="fa fa-shopping-cart"></i>
	          <span class="shopping-cart"></span>
							<small><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count, 'phonerepair' ), WC()->cart->cart_contents_count ); ?></small>
	          </span>
			<div class="hidden-cart" style="display: none;">
				<?php the_widget( 'WC_Widget_Cart' ); ?>
			</div>
		</div>

	<?php
	}
}