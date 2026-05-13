<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="container">
        <div class="site-branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php echo esc_url( get_theme_file_uri( 'img/logo.png' ) ); ?>" 
                     alt="<?php bloginfo('name'); ?>" 
                     class="site-logo">
            </a>
        </div>

        <!-- Botón hamburguesa (visible solo en móvil) -->
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            <span class="screen-reader-text">Menú</span>
        </button>

        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => false
            ));
            ?>
        </nav>
    </div>
</header>

<div id="content" class="site-content">