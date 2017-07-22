<?php
/**
 * The default template for displaying content.
 */
?>

<article <?php post_class(); ?>>

    <header class="project-header">			
        <h1><?php the_title(); ?></h1>			
    </header>
    
    <div class="content">
        <?php the_content(); ?>
    </div>

</article>
