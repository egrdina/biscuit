<?php
/**
 * The default template for displaying content.
 */
?>

<article <?php post_class(); ?>>

    <?php if (has_post_thumbnail($post->ID)) { ?>
        <div class="main img">
            <img src="<?= wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" />
        </div>
    <?php } ?>

    <header class="project-header">			
        <h1><?php the_title(); ?></h1>			
    </header>
    
    <div class="content">
        <?php the_content(); ?>
    </div>

</article>
