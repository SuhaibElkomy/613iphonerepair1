<?php


if (phonerepair_get_option('phonerepair_search_icon','off') != "off") { ?>
	<div class="min-search">
		<span class="show-search right"><a href="#"><i class="fa fa-search"></i></a></span>
		<div class="overlay-search hide">
			<form method="get" class="search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
				<label>
					<span class="screen-reader-text"><?php echo load_theme_textdomain( 'Search for:', 'label' ) ?></span>
					<input type="search" class="search-field" placeholder="<?php echo esc_attr__( 'Search','phonerepair' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr__( 'Search for: label','phonerepair' ) ?>" />
				</label>
				<input type="submit" class="search-submit" value="<?php echo esc_attr__( 'Search submit button','phonerepair' ) ?>" />
			</form>
		</div>
	</div>
<?php }