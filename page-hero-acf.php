<?php
/**
 * Template Name: Hero 100% ACF
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
    // Obtener campos ACF
    $titulo = get_field('hero_titulo');
    $descripcion = get_field('hero_descripcion');
    $imagen = get_field('hero_imagen');
    $cita = get_field('hero_cita');
    $sello = get_field('hero_sello');
    
    // Manejar imagen de fondo
    $imagen_url = is_array($imagen) ? $imagen['url'] : (is_numeric($imagen) ? wp_get_attachment_url($imagen) : $imagen);
    // Manejar sello (logo secundario)
    $sello_url = is_array($sello) ? $sello['url'] : (is_numeric($sello) ? wp_get_attachment_url($sello) : $sello);
    
    $boton_texto = get_field('boton_texto');
    $boton_url = get_field('boton_url');
    ?>

    <!-- Hero section Nivel Pro -->
    <div class="acf-hero-full" <?php if ( $imagen_url ) echo 'style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7)), url(' . esc_url($imagen_url) . ');"'; ?>>
        <div class="acf-hero-content container">
            <?php if ( $sello_url ) : ?>
                <img src="<?php echo esc_url($sello_url); ?>" alt="Sello" class="acf-secondary-logo" style="max-width: 100px; margin-bottom: 20px; animation: fadeInUp 1s ease;">
            <?php endif; ?>

            <h1 style="animation: fadeInUp 1s ease 0.2s;"><?php echo esc_html( $titulo ?: get_the_title() ); ?></h1>
            <p style="animation: fadeInUp 1s ease 0.4s;"><?php echo esc_html( $descripcion ); ?></p>
            
            <?php if ( $boton_texto && $boton_url ) : ?>
                <div style="margin-top: 30px; animation: fadeInUp 1s ease 0.6s;">
                    <a href="<?php echo esc_url( $boton_url ); ?>" class="btn-acf"><?php echo esc_html( $boton_texto ); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Sección de Cita Estructurada -->
    <?php if ( $cita ) : ?>
        <section class="acf-quote-section" style="padding: 100px 0; background: white; text-align: center;">
            <div class="container" style="max-width: 800px;">
                <i class="fas fa-quote-left" style="font-size: 3rem; color: var(--ven-yellow); margin-bottom: 30px; display: block;"></i>
                <blockquote style="font-size: 2rem; font-weight: 300; font-style: italic; color: var(--ven-blue); line-height: 1.4;">
                    <?php echo esc_html($cita); ?>
                </blockquote>
            </div>
        </section>
    <?php endif; ?>

    <!-- Contenido Base -->
    <div class="container" style="padding: 80px 0;">
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>