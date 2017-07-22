<!DOCTYPE html>
<html lang=en>
<head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta charset=utf-8 />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="top-nav">
    <div class="logo">
    <h2><a href="<?= home_url()?>">Emma Grdina</a></h2>
    </div>
    <ul class="nav-links"> 
      <li><a target="_blank" href="https://emmagracegrdina.com/">Blog</a></li>
      <li><a href="<?= get_site_url() . '/about' ?>">About</a></li>
    </ul>

    <?php /*wp_nav_menu( array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'nav-links'
    ) ); */?>
    </div>
</div>
