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
    
    // Manejar diferentes formatos de imagen
    $imagen_url = '';
    if ( is_array($imagen) && isset($imagen['url']) ) {
        $imagen_url = $imagen['url'];
    } elseif ( is_numeric($imagen) ) {
        $imagen_url = wp_get_attachment_url($imagen);
    } elseif ( is_string($imagen) && !empty($imagen) ) {
        $imagen_url = $imagen;
    }
    
    $boton_texto = get_field('boton_texto');
    $boton_url = get_field('boton_url');
    ?>

    <!-- Hero section -->
    <div class="acf-hero-full" <?php if ( $imagen_url ) echo 'style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.6)), url(' . esc_url($imagen_url) . ');"'; ?>>
        <div class="acf-hero-content">
            <h1><?php echo esc_html( $titulo ?: 'Título' ); ?></h1>
            <p><?php echo esc_html( $descripcion ?: 'Descripción' ); ?></p>
            <?php if ( $boton_texto && $boton_url ) : ?>
                <a href="<?php echo esc_url( $boton_url ); ?>" class="btn-acf"><?php echo esc_html( $boton_texto ); ?></a>
            <?php endif; ?>
        </div>
    </div>

    <!-- Contenido adicional (opcional) -->
    <div class="single-post-container">
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>