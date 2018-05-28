<?php
/**
 * The file used for the posts page (/blog/)
 */
get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

            <div class="content">
                <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>

                <?php if (has_post_thumbnail($post->ID)) { ?>
                    <div class="main img">
                        <a href="<?php echo get_permalink(); ?>"><img src="<?= wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" /></a>
                    </div>
                <?php } ?>

                <?php the_content('<div class="moretext">Read more</div>'); ?>
            </div>

	<?php endwhile; ?>

<?php get_footer(); ?>
