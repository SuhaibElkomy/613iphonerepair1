        <!--.footer-columns -->
  			<section class="l-footer-columns">
				  <h3 class="hide"><?php echo esc_html__('Footer', 'phonerepair'); ?></h3>
  				<div class="row animation-parent" data-animation-delay="350">
  					<?php
					  $phonerepair_footer_columns = phonerepair_get_option('phonerepair_footer_columns','three _columns');

					  switch ($phonerepair_footer_columns) {
						  case "one_columns":
							  $column_one = 12;
							  break;
						  case "tow_a_columns":
							  $column_one = 4;
							  $column_tow = 8;
							  break;
						  case "tow_b_columns":
							  $column_one = 8;
							  $column_tow = 4;
							  break;
						  case "tow_c_columns":
							  $column_one = 6;
							  $column_tow = 6;
							  break;
						  default:
							  $column_one = 4;
							  $column_tow = 4;
							  $column_three = 4;
					  } ?>

  					<ul class="block large-<?php echo esc_attr($column_one) ?> medium-<?php echo esc_attr($column_one) ?> columns">
  						 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?><?php endif; ?>
  					</ul>

					  <?php if($phonerepair_footer_columns == 'tow_a_columns' || $phonerepair_footer_columns = 'tow_b_columns' || $phonerepair_footer_columns = 'tow_c_columns') {  ?>
	            <ul class="block large-<?php echo esc_attr($column_tow) ?> medium-<?php echo esc_attr($column_tow) ?> columns">
	               <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?><?php endif; ?>
	            </ul>
					  <?php }  ?>

  					<?php if( $phonerepair_footer_columns == 'three_columns' ) {  ?>
	            <ul class="block large-<?php echo esc_attr($column_three) ?> medium-<?php echo esc_attr($column_three) ?> columns">
	               <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-3') ) : ?><?php endif; ?>
	            </ul>
  					<?php }  ?>

  				</div>

	        <footer class="l-footer">
	          <div class="row">
	            <div class="footer large-12">
	              <div class="block">
	                <?php wp_nav_menu( array('theme_location' => 'footer','container_class' => 'phonerepair_footer_menu clearfix','fallback_cb' => 'phonerepair_footer_menu_fallback' )) ?>
	              </div>
	            </div>
	          </div>
	          <div class="copyright large-12 text-center">
	              <p>
	              <?php  
	             
	              echo html_entity_decode(phonerepair_get_option('phonerepair_copyright',''));   ?>
	              </p>
	            </div>
	        </footer>
			  </section>
  		</div>
  		
  	</div>
		<?php
			$menu_style = phonerepair_get_option('phonerepair_menu_style','');
			if($menu_style == "offcanvas") { ?>
				<a class="exit-off-canvas"></a>
				</div></div>
			<?php } ?>
		<!-- end offcanvas -->

   

    <?php wp_footer(); ?>
	</body>
</html>