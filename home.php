<?php
/**
 * The file used for the posts page (/blog/)
 */
get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

            <div class="content">
                <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></h2></a>

                <?php the_content('<div class="moretext">Continue reading</div>'); ?>
            </div>

	<?php endwhile; ?>

<?php get_footer(); ?>
