<?php
/**
 * The default template for Services page.
 */
?>

<?php get_header(); ?>


<div class="content">
    <?php
    // Render the text from the wordpress admin
    $page = get_page_by_title('services');
    $content = apply_filters('the_content', $page->post_content); 
    echo $content;
    ?>
</div>

<div class="top-section">
    <h1>Creativity and readability are at the heart of everything I make.</h1>
</div>

<div class="content">
    <p>Whether you’re a bride-to-be in need of an invitation suite or a small business who wants to spruce up their online presence, I’d love to work with you.</p>
    
    <p>My process is rooted in the belief that the best designs are easy to consume and delightful to read online, interact with at an event or receive in the mail.</p>
</div> 

<?php get_footer(); ?>