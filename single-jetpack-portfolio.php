<?php
/**
 * Display a single portfolio item on its own page
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div <?php post_class(); ?>>

        <?php if (has_post_thumbnail($post->ID)) { ?>
            <div class="main img">
                <img src="<?= wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" />
            </div>
        <?php } ?>

        <div class="project-header">			
            <h1><?php the_title(); ?></h1>			
        </div>

        <div class="content">
            <?php the_content(); ?>
        </div>

    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
