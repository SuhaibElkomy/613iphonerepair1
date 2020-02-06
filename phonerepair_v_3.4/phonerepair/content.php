	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
			<ul class="post-infos clearfix">
				<li><?php echo get_the_date('d-m-y'); ?></li>
				<li> <?php echo esc_html__('By:','phonerepair');  the_author() ?></li>
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

		<?php if ( has_post_thumbnail() ) { ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php  the_post_thumbnail('phonerepair_blog-thumb');  ?></a>
			</div>
		<?php } ?>

		<div class="blog-body">
			<p><?php echo wp_trim_words( get_the_content(), 70 ); ?></p>
			<div class="readmore <?php if(is_rtl()) { echo  'text-left'; }else { echo 'text-right';}?> right">
				<a href="<?php the_permalink(); ?>"> <?php echo esc_html__("Read more...", 'phonerepair'); ?> </a>
			</div>
		</div>
	</article>
