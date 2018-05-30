<!DOCTYPE html>
<html lang=en>
<head>
    <title><?php wp_title( '|', true, 'right' ); ?> Emma Grdina</title>
	<meta charset=utf-8 />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if (is_front_page()) { ?>
    <div class="tldr">
        <h5>Hello, I'm</h5>
            <h1>Emma Grdina</h1>
        <h5>a designer and baker living in Washington D.C.</h5>
    </div>
<?php } ?>

<div class="top-nav">
    <?php if (!is_front_page()) { ?>
        <div class="logo">
            <h2><a href="<?= home_url()?>">Emma Grdina</a></h2>
        </div>
    <?php } ?>
    
    <ul class="nav-links"> 
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
