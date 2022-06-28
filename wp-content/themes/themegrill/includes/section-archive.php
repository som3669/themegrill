<div class="container" style="margin-top: 80px">
    <?php
    if(have_posts()):
        while (have_posts()):
            the_post();
    ?>
        <div class="blog_post">
        <div>
            <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="">
        </div>
    <div class="bloglist">
        <h3><?php the_title(); ?></h3>
        <div class="author"><p>Author: <?php the_author(); ?></p><p><?php echo get_the_date()?></p></div>

        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">Read More</a>
    </div>
        </div>

    <?php


        endwhile;

    endif; ?>
    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>
</div>
