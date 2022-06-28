<?php get_header() ?>
<div class="container" style="margin-top: 60px">

    <?php if(has_post_thumbnail()) ?>
    <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title() ?>" class="imgthumbnail">
    <h3><?php the_title(); ?></h3>
    <div class="author"><p><?php echo get_the_date()?></p></div>
    <p><?php the_content(); ?></p>
    <div class="commentdiv"><?php comments_template(); ?></div>

</div>
<?php get_footer() ?>