<?php
/**
 * Template Name: Nosotros Premium (Nivel Pro ACF)
 */
get_header(); ?>

<div class="nosotros-premium-wrapper">
    <?php while ( have_posts() ) : the_post(); ?>
        
        <!-- Sección 1: Hero de la Página -->
        <section class="nosotros-hero" style="background: var(--ven-blue); color: white; padding: 80px 0; text-align: center;">
            <div class="container">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <?php if ( function_exists('get_field') && get_field('nosotros_subtitulo') ) : ?>
                    <p style="font-size: 1.4rem; opacity: 0.8;"><?php the_field('nosotros_subtitulo'); ?></p>
                <?php endif; ?>
            </div>
        </section>

        <!-- Sección 2: Historia e Imagen -->
        <section class="nosotros-content" style="padding: 80px 0;">
            <div class="container">
                <div class="grid-2-cols" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
                    
                    <div class="nosotros-text">
                        <?php if ( function_exists('get_field') && get_field('nosotros_historia_titulo') ) : ?>
                            <h2 style="color: var(--ven-blue); margin-bottom: 20px;"><?php the_field('nosotros_historia_titulo'); ?></h2>
                        <?php endif; ?>
                        
                        <div class="entry-content">
                            <?php the_content(); // Contenido base de WordPress ?>
                        </div>

                        <?php if ( function_exists('get_field') && get_field('nosotros_mision') ) : ?>
                            <div class="mision-box" style="background: #fdf2f2; padding: 30px; border-radius: 12px; border-left: 5px solid var(--ven-red); margin-top: 30px;">
                                <h3 style="color: var(--ven-red); margin-bottom: 10px;"><?php esc_html_e( 'Nuestra Misión', 'venezuela-turismo' ); ?></h3>
                                <p><?php the_field('nosotros_mision'); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="nosotros-image">
                        <?php 
                        $imagen_nosotros = get_field('nosotros_imagen');
                        if ( $imagen_nosotros ) : 
                            $img_url = is_array($imagen_nosotros) ? $imagen_nosotros['url'] : (is_numeric($imagen_nosotros) ? wp_get_attachment_url($imagen_nosotros) : $imagen_nosotros);
                        ?>
                            <img src="<?php echo esc_url($img_url); ?>" alt="Sobre Nosotros" style="border-radius: 20px; box-shadow: var(--shadow);">
                        <?php elseif ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('large', array('style' => 'border-radius: 20px; box-shadow: var(--shadow);')); ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </section>

        <!-- Sección 3: Nuestro Equipo (Diseño Limpio solicitado) -->
        <?php if ( function_exists('get_field') && get_field('integrantes_del_equipo') ) : ?>
            <section class="equipo-section" style="padding: 40px 0;">
                <div class="container" style="max-width: 900px;">
                    
                    <div class="equipo-box" style="background: #f0f7ff; padding: 40px; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                        <h3 style="color: #1a1a1a; margin-bottom: 15px; display: flex; align-items: center; gap: 10px; font-size: 1.5rem;">
                            🤝 <?php esc_html_e( 'Nuestro equipo', 'venezuela-turismo' ); ?>
                        </h3>
                        <p style="font-size: 1.2rem; color: #333; line-height: 1.6; margin: 0;">
                            <?php the_field('integrantes_del_equipo'); ?>
                        </p>
                    </div>

                </div>
            </section>
        <?php endif; ?>

        <!-- Sección 4: Valores Finales -->
        <?php if ( function_exists('get_field') && get_field('valor_destacado') ) : ?>
            <section class="nosotros-valores" style="background: #1a1a1a; color: white; padding: 60px 0; text-align: center;">
                <div class="container">
                    <h3 style="color: var(--ven-yellow); text-transform: uppercase; letter-spacing: 2px;"><?php esc_html_e( 'Valor que nos define', 'venezuela-turismo' ); ?></h3>
                    <p style="font-size: 2.5rem; font-weight: 900; margin-top: 10px;"><?php the_field('valor_destacado'); ?></p>
                </div>
            </section>
        <?php endif; ?>

    <?php endwhile; ?>
</div>

<?php get_footer(); ?>