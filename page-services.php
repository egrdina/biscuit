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

<div class="middle-section">
    <h5>Services</h5>
    <h1>Web and mobile design</h1>
    <h1>Invitation suites</h1>
    <h1>Logos and brand packages</h1>
    <h1>Event signage</h1>
</div>

<div class="faq">
    <h1>FAQ</h1>
    <div class="content">
        <h3>I know what I need, but I don’t see it listed above. Can we still work together?</h3> 
        <p>My list of services is meant to provide a general idea of my capabilities, but the packages I offer are adjusted for every client’s individual needs.</p>

        <p>No matter the project, I like to start by learning more about you, your goals and design needs. Then I then create several package options. After you select which package best meets your needs, I require a 10% deposit before starting a project.</p> 

        <h3>I’m not entirely sure what I need, but I have a general idea. What should I do?</h3>
        <p>Email is the best way to reach me. You can always find me at emmagrdina@gmail.com.</p>

        <p>It would be helpful for me to know any ideas you have and what your deadline might be. That’s it! Then I will reach out to you about potential next steps.</p> 

        <h3>What if my project has a quick turnaround?</h3>
        <p>Every project has a varied timeline. Some factors include but are not limited to what you need, when you need it by and what other projects I might be working on.</p>

        <p>Designing in a newsroom taught me not only how to work quickly but also prioritize ruthlessly. I aim for no surprises throughout my design process regardless of the timeline. Communication and collaboration are key to your success and happiness and mine.</p>
    </div> 
</div>

<?php get_footer(); ?>