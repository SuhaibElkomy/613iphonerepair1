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
			<main class="row l-main">
				<div class="large-12 main columns">

					<a id="main-content"></a>
					<div class="view view-blog view-id-blog view-display-id-page">
						<div class="view-content">
			<!-- loop ... -->				
			<?php if (have_posts()) : ?>
           <?php while (have_posts()) : the_post(); ?>

							<article  class="node node-blog">
							<div class="row">
								<div class="large-6 columns">
									<?php 
			              $post_thumbnail_id = get_post_meta(get_the_ID(), 'pciture', true);
			              print wp_get_attachment_image( $post_thumbnail_id, 'team' );
			              echo "<img src='" . $post_thumbnail_id . "' alt='team'>";
		              ?>
								</div>
								<div class="large-6 columns">
									<div class="team-member-name-job-title">
                <h3 class="team-member-name"><?php the_title(); ?></h3>
                <?php if(get_post_meta(get_the_ID(), 'job_title', true) != '') { ?>
                	<h4><?php echo get_post_meta(get_the_ID(), 'job_title', true); ?></h4>
                <?php } ?>
               </div>
               <?php if (get_post_meta(get_the_ID(), 'description', true) != ""): ?>
                <div class="team-member-desc">
                  <p><?php echo get_post_meta(get_the_ID(), 'description', true); ?></p>
                </div>
               <?php endif ?>
              <div class="team-membre-social-icons">
                <ul>
                <?php if (get_post_meta(get_the_ID(), 'phonerepair_twitter', true) != ""): ?>
                  <li><a href="<?php echo get_post_meta(get_the_ID(), 'phonerepair_twitter', true); ?>"><i class="fa fa-twitter"></i></a></li>
                <?php endif ?>
                <?php if (get_post_meta(get_the_ID(), 'phonerepair_facebook', true) != ""): ?>
                  <li><a href="<?php echo get_post_meta(get_the_ID(), 'phonerepair_facebook', true); ?>"><i class="fa fa-facebook"></i></a></li>
                <?php endif ?>
                <?php if (get_post_meta(get_the_ID(), 'phonerepair_linkedin', true) != ""): ?>
                  <li><a href="<?php echo get_post_meta(get_the_ID(), 'phonerepair_linkedin', true); ?>"><i class="fa fa-linkedin"></i></a></li>
                <?php endif ?>
								</div>
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