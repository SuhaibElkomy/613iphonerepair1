<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<ul class="post-infos clearfix">
			<li><?php echo get_the_date('d-m-y'); ?></li>
			<li> <?php echo esc_html__('By:','phonerepair'); the_author() ?></li>
			<?php if(has_tag()){ ?>
				<li><?php the_tags(); ?></li>
			<?php } ?>
			<li>
					 <?php echo esc_html__('Category:','phonerepair');   the_category(', '); ?>
				</li>
			<li class="comment-count"><?php comments_number( '0', '1', '% responses' ); echo esc_html__(' comment', 'phonerepair') ?></li>
		</ul>
		<h2>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
	</header>

	<div class="gallery-container">
	    <i class="fa fa-image gallery-icon"></i>
	    <ul class="wd-gallery-images-holder clearfix">
	        <?php
	        $portfolio_image_gallery_val = get_post_meta( $post->ID, 'phonerepair_portfolio-image-gallery', true );
	        if($portfolio_image_gallery_val!='' ) $portfolio_image_gallery_array=explode(',',$portfolio_image_gallery_val);

	        if(isset($portfolio_image_gallery_array) && count($portfolio_image_gallery_array)!=0) {

		        foreach ( $portfolio_image_gallery_array as $gimg_id ){
			        $gimage_wp = wp_get_attachment_image_src( $gimg_id, 'phonerepair_blog-thumb', true ); ?>
			        <li class="wd-gallery-image-holder">
				        <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_attr( $gimage_wp[0] ); ?>" alt="<?php echo esc_attr__('gallery image','phonerepair') ?>"/></a>
			        </li>
							<?php
		        }
	        }
        ?>
    </ul>
  </div>

	<div class="blog-body">
		<p><?php echo wp_trim_words( get_the_content(), 70 ); ?></p>
		<div class="readmore <?php if(is_rtl()) { echo  'text-left'; }else { echo 'text-right';}?> right">
			<a href="<?php the_permalink(); ?>"> <?php echo esc_html__("Read more...", 'phonerepair'); ?> </a>
		</div>


	</div>
</article>
