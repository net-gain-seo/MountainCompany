<?php
    get_header();
?>
<?php
    $postId = get_the_post_id();
?>

<div class="mast page-mast">
    <?php
    if( has_post_thumbnail($postId) ) {
        the_post_thumbnail($postId);
    } else {
        echo '<img src="' . home_url() . '/wp-content/uploads/2017/08/mast-about-1.jpg" alt="">';
    }
    ?>
</div>

<?php echo do_shortcode( '[common_element id="391"]' ); ?>

<div class="container blog-content">
    <div class="row">
        <div class="col col-12 col-lg-9">
            <?php while ( have_posts() ) : the_post(); ?>

                <article>
                    <div class="blog-title">
                        <h1><?php the_title(); ?></h1>
                        <small><i class="fa fa-calendar"></i> <em class="text-muted"><?php the_date(); ?></em></small>
                    </div>

                    <div class="blog-article">
                        <?php the_content(); ?>
                    </div>
                </article>

            <?php endwhile; // End of the loop. ?>

            <div class="next-prev">
                <div class="prev"><?php previous_post_link('%link', '<i class="fa fa-angle-double-left"></i> <span>%title</span>', FALSE); ?></div>
                <div class="next"><?php next_post_link('%link', '<span>%title</span> <i class="fa fa-angle-double-right"></i>', FALSE); ?></div>
            </div>
        </div>

        <div class="col col-12 col-lg-3">

            <div class="blog-sidebar">
                <?php dynamic_sidebar( 'page_sidebar_1' ); ?>
            </div>

        </div>
    </div>

</div>

<?php
    get_footer();
