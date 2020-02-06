<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2 class="node-title" datatype="" property="dc:title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div>
        <?php $_video_type = get_post_meta(get_the_ID(), "video_type", true);?>

        <?php if($_video_type == "youtube") { ?>

            <iframe src="<?php echo get_post_meta(get_the_ID(), "phonerepair_youtube_link", true);  ?>?wmode=transparent" wmode="Opaque" frameborder="0" allowfullscreen></iframe>

        <?php } else if ($_video_type == "vimeo"){ ?>

            <iframe src="http://player.vimeo.com/video/<?php echo get_post_meta(get_the_ID(), "phonerepair_vimeo_id", true);  ?>?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

        <?php } else if ($_video_type == "self_hosted"){ ?>


            <video
                controls preload="auto" width="723" height="287" >
                <source src="<?php echo get_post_meta(get_the_ID(), "phonerepair_video_mp4", true) ?>" type='video/mp4' />
                <source src="<?php echo get_post_meta(get_the_ID(), "phonerepair_video_webm", true)?>" type='video/webm' />
                <source src="<?php echo get_post_meta(get_the_ID(), "phonerepair_video_ogv", true);  ?>" type='video/ogg' />

            </video>

        <?php } ?>
    </div>
    <div class="body text-secondary">
        <?php echo wp_trim_words(get_the_content(),100); ?>
    </div>
    <div class="share-post">
      <span class="left"><i class="fa fa-share-alt"></i></span>
      <div class="twitter-share left" data-url=<?php the_permalink(); ?> data-text="<?php the_title(); ?>" data-title="<i class='fa fa-twitter'></i>"></div>
      <div class="facebook-share left" data-url=<?php the_permalink(); ?> data-text="<?php the_title(); ?>" data-title="<i class='fa fa-facebook'></i>"></div>
    </div>
</article>