<?php
/**
 * Display a single portfolio item on its own page
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div <?php post_class(); ?>>

        <div class="project-header">			
            <h1><?php the_title(); ?></h1>			
        </div>
        
        <div class="tldr">
            <h5>THE GIST</h5>
            <?php the_excerpt(); ?>			
        </div>

        <div class="content">
            <?php the_content(); ?>
        </div>

    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
