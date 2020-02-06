<?php get_header() ?>

			
				<section class="titlebar ">
					<div class="row">
						<div class="large-8 columns">
							<h2 id="page-title" class="title"><?php the_title(); ?></h2>

						</div>
						<div class="large-4 columns m-t-50">
							<?php phonerepair_breadcrumb(); ?>
						</div>
					</div>
				</section>
<!-- content  -->
			<main class="row l-main" role="main">
				<div class="large-12 main columns">

					<a id="main-content"></a>
					<div class="view view-blog view-id-blog view-display-id-page">
						<div class="view-content">
			<!-- loop ... -->				
			<?php if (have_posts()) : ?>
           <?php while (have_posts()) : the_post(); ?>

							<article  class="node node-blog">
								<?php the_post_thumbnail('blog-thumb'); ?>

								<div class="body field">
									<?php the_content(); ?>
								</div>
							</article>
		     <?php endwhile;
			endif;
     ?>

							
<!-- /loop.. ********-->
						</div>

					</div>
				</div>
				<!--/.main region -->
				<!-- *************sidebar ***********-->
				<?php // get_sidebar(); ?>
				<!-- *************/sidebar ***********-->
			</main>
			<!-- /content  -->
			<?php get_footer(); ?>