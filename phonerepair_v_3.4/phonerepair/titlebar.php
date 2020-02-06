<section class="titlebar ">
		<div class="row">
			<?php if(is_rtl()) {
				
			 ?>
			 <div class="large-4 columns">
				<?php phonerepair_breadcrumb(); ?>
			</div>
			<div class="large-8 columns">
				<?php
				if (phonerepair_is_blog()){
					$page_for_posts = phonerepair_get_option( 'page_for_posts' ,'' ); ?>
					<?php if($page_for_posts != 0){ ?>
					<h1 id="page-title" class="title"><?php echo get_the_title($page_for_posts); ?></h1>
					<?php }else{
						?>
						<h1 id="page-title" class="title"><?php echo esc_html__('Blog','phonerepair') ?></h1>
						<?php
					} ?>
					
				  <?php
				}elseif(is_search()){ ?>
					<h2 id="page-title" class="title"><?php echo esc_html__('Search Result of', 'phonerepair') .': '. esc_html( get_search_query( false ) ) ?></h2>
					<?php
				}else {
					the_title( '<h2 id="page-title" class="title">', '</h2>' );
				} ?>
			</div>
			
			<?php }else {
				?>
				<div class="large-8 columns">
				<?php
				if (phonerepair_is_blog()){
					$page_for_posts = phonerepair_get_option( 'page_for_posts' ,'' ); ?>
					<?php if($page_for_posts != 0){ ?>
					<h1 id="page-title" class="title"><?php echo get_the_title($page_for_posts); ?></h1>
					<?php }else{
						?>
						<h1 id="page-title" class="title"><?php echo esc_html__('Blog','phonerepair') ?></h1>
						<?php
					} ?>
					
				  <?php
				}elseif(is_search()){ ?>
					<h2 id="page-title" class="title"><?php echo esc_html__('Search Result of', 'phonerepair') .': '. esc_html( get_search_query( false ) ) ?></h2>
					<?php
				}else {
					the_title( '<h2 id="page-title" class="title">', '</h2>' );
				} ?>
			</div>
			<div class="large-4 columns">
				<?php phonerepair_breadcrumb(); ?>
			</div>
				
				 <?php
			} ?>
		</div>
	</section>