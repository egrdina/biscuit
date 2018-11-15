<!DOCTYPE html>
<html lang=en>
<head>
    <title><?php wp_title( '|', true, 'right' ); ?>Emma Grdina</title>
	<meta charset=utf-8 />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:image" content="/images/favicon.png" alt="Emma Grdina"/>
    <meta property="og:description" content="Emma Grdina is a freelance graphic designer who uses sophisticated, minimal design with striking typography to delivers your message online or IRL." />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="top-nav">
    <ul class="nav-links nav-links-mobile"> 
        <a class="toggle-nav" href="#">&#9776;</a>
    <?php if (is_front_page()) { ?>
        <li><a href="#Work">Work</a></li>
    <?php } else { ?>
        <li><a href="<?= get_site_url() . '#Work' ?>">Work</a></li> 
    <?php } ?>    
        <li><a href="<?= get_site_url() . '/services' ?>">Services</a></li>
        <li><a href="<?= get_site_url() . '/blog' ?>">Blog</a></li>
        <li><a href="<?= get_site_url() . '/about' ?>">About</a></li>
    </ul>

    <?php if (!is_front_page()) { ?>
        <div class="logo">
            <h2><a href="<?= home_url()?>">Emma Grdina</a></h2>
        </div>
    <?php } ?>
    
    <ul class="nav-links nav-links-desktop"> 
        <a class="toggle-nav" href="#">&#9776;</a>
    <?php if (is_front_page()) { ?>
        <li><a href="#Work">Work</a></li>
    <?php } else { ?>
        <li><a href="<?= get_site_url() . '#Work' ?>">Work</a></li> 
    <?php } ?>    
        <li><a href="<?= get_site_url() . '/services' ?>">Services</a></li>
        <li><a href="<?= get_site_url() . '/blog' ?>">Blog</a></li>
        <li><a href="<?= get_site_url() . '/about' ?>">About</a></li>
    </ul>

    <?php /*wp_nav_menu( array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'nav-links'
    ) ); */?>
    </div>
</div>

<?php if (is_front_page()) { ?>
    <div class="tldr">
        <h5>Hello, I'm</h5>
            <h1>Emma Grdina</h1>
        <h5>a freelance graphic designer. I'm passionate about using design to make the world a more delightful, inclusive place.</h5>
    </div>
<?php } ?>


