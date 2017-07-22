<?php get_header(); ?>

<div class="tldr">    
    <h5>THE GIST</h5>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>

<div class="projects">

<?php
$args = array(
	'post_type'              => array( 'jetpack-portfolio' ),
	'order'                  => 'ASC',
);

$query = new WP_Query($args);
$post_in_this_row_so_far = 0;

while ($query->have_posts()) {
    $query->the_post(); ?>

    <?php
    $custom_fields = get_post_custom();
    $homepage_size = $custom_fields['homepage-size'];
    $is_wide = (count(homepage_size) > 0 and $homepage_size[0] == 'wide');
    if ($is_wide) {?>
        <div class="project-wide">
    <?php } else { ?>
        <?php if ($posts_in_this_row_so_far == 0) { ?>
            <div class="row clearfix">
        <?php } ?>
        <div class="col-xs-6">
        <div class="project-thin">
    <?php } ?>

            <?php $img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
            <img src="<?= $img_url ?>" />

            <div class="project-copy">
                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>

                <p>
                    <?php
                        $homepage_blurb = $custom_fields['homepage-blurb'];
                        if ($homepage_blurb and count($homepage_blurb) > 0) {
                            echo $homepage_blurb[0];
                        } else {
                            echo 'Please set a custom content type "homepage-blurb" to display text here.';
                        }
                    ?>
                </p>
            </div>

    <?php if ($is_wide) {?>
        </div><!-- /.project-wide -->
    <?php } else { ?>
            </div><!-- /.col-xs-6 -->
        </div><!-- /.project-thin -->
        <?php $posts_in_this_row_so_far = ($posts_in_this_row_so_far + 1) % 2;
            if ($posts_in_this_row_so_far == 0) { ?>
                </div><!-- /.row.clearfix -->
            <?php }
        ?>
    <?php }
}

wp_reset_postdata();
?>
</div><!-- /.projects -->

<?php get_footer(); ?>
