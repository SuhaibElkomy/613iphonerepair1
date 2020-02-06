<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="quote-format">
        <blockquote>
            <span class="leftq quotes">&ldquo;</span> <?php the_excerpt()  ?> <span class="rightq quotes">&bdquo; </span>
            <h2>-<?php the_title() ?></h2>

        </blockquote>
    </div>
</article>