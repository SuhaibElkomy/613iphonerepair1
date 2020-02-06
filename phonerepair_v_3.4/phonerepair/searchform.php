<?php
/**
 * The template for displaying search forms in Phonerepair
 *
 */
?>

<form action="<?php echo esc_url(home_url('/')) ?>" class="searchform" id="searchform" method="get">
				<div>
					
					<input type="text" id="s" name="s">
					<input type="submit" value="<?php echo esc_attr__('Search', 'phonerepair'); ?>" id="searchsubmit">
				</div>
</form>


