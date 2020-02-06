<?php get_header();

	get_template_part('titlebar');	?>

	<main class="row l-main">
		<div class="small-12 large-9 main columns <?php if(is_rtl()) echo " large-push-3 "; ?>">
      <?php if (have_posts()) : ?>
			<div class="blog-page">
         <?php while (have_posts()) : the_post();

			      /*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
		         get_template_part( 'content', get_post_format() );

				 endwhile; ?>
         </div>
        <?php endif;
				wp_reset_postdata(); ?>

			<div class="wd-pagination">
				<?php 
					global $wp_query;

					$big = 999999999;
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages,
					        
					) );
			 ?>
			</div>
			<?php if (comments_open()){
        comments_template( '', true );
      } ?>
		</div>

		<?php get_sidebar(); ?>

	</main>
	<?php get_footer(); ?>