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

    <div class="next-posts"><?php next_posts_link('Older posts'); ?></div>

    <!-- Begin Mailchimp Signup Form -->
    
    <div id="mc_embed_signup">
    <form action="https://emmagrdina.us19.list-manage.com/subscribe/post?u=4dbd5f0c416e9af921dd87e3d&amp;id=2386bc6e48" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
        <label for="mce-EMAIL">Sign up to get blog posts delivered straight to your inbox.
        </label>
            <div class="form-buttons">
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_4dbd5f0c416e9af921dd87e3d_2386bc6e48" tabindex="-1" value="">
                </div>
                <div class="clear">
                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button mc">
                </div>
            </div>
        </div>
    </form>
    </div>

<!--End mc_embed_signup-->

<?php get_footer(); ?>
