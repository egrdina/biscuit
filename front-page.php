<?php get_header(); ?>

<div id="Work" class="project-header">
    <h1>Work</h1>
</div>

<div class="projects">

    <?php
    $args = array(
        'post_type'              => array( 'jetpack-portfolio' ),
        'order'                  => 'ASC',
        'posts_per_page'         => -1
    );

    $query = new WP_Query($args);

    while ($query->have_posts()) {
        $query->the_post(); ?>

        <div class="project">
            <?php $img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
            <a href="<?php the_permalink(); ?>"><img src="<?= $img_url ?>" /></a>

            <div class="project-copy">
                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <h5>
                    <?=get_the_excerpt() ?>&nbsp;
                    <a href="<?php the_permalink(); ?>" class="portfoliomore-link">Read more</a>
                </h5>
            </div>
        </div><!-- /.project -->
    <?php }

    wp_reset_postdata();
    ?>
</div><!-- /.projects -->

<?php get_footer(); ?>
