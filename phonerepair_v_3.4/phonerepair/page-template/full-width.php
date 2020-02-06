<?php
/*
Template Name: Full Width
*/
?>
<?php get_header();

  if(!(is_front_page())) {
	  $phonerepair_page_show_title_area = get_post_meta(get_the_ID(), 'phonerepair_page_show_title_area', true);
  	if($phonerepair_page_show_title_area == 'yes' ){
		  get_template_part('titlebar');
		}
	}  ?>
  

	<main class="l-main">
		<div class="main">
		  <?php if (have_posts()) :
       while (have_posts()) : the_post(); ?>    
  			<article>
  				<div class="body field">
  					<?php the_content(); ?>
  				</div>
  			</article>
      <?php endwhile;
      endif;

      wp_reset_postdata(); ?>

      <?php if (comments_open()){
        comments_template( '', true );
      } ?>
		</div>  
	</main>
		
	<?php get_footer(); ?>