<?php get_header();

  if(!(is_front_page())) {
	  $phonerepair_page_show_title_area = get_post_meta(get_the_ID(), 'phonerepair_page_show_title_area', true);
	  
  	if($phonerepair_page_show_title_area != 'no'){
		  get_template_part('titlebar');
		}
	}  ?>
  
  <!-- content  -->
	<main class="l-main">
		<div class="main row">
		  <?php if (have_posts()) :
       while (have_posts()) : the_post(); ?>    
  			<article>
  				<div class="body field">
  					<?php the_content(); ?>
  				</div>
  			</article>
      <?php endwhile;
      endif; ?>
      <?php if (comments_open()){
        comments_template( '', true );
      } ?>
		</div>  
	</main>
	<!-- /content  -->
		
	<?php get_footer(); ?>