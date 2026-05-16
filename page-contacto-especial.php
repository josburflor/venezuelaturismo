<?php
/**
 * Template Name: Contacto Especial 
 */
get_header(); ?>

<div class="contacto-especial-wrapper">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <header class="contacto-header" style="background: var(--ven-blue); color: white; padding: 100px 0; text-align: center;">
            <div class="container">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                
                <!-- Parte 6.3: Imprimir el valor del campo personalizado -->
                <?php if ( function_exists('get_field') && get_field('subtitulo_especial') ) : ?>
                    <p class="especial-subtitle" style="font-size: 1.5rem; opacity: 0.9; margin-top: 10px;">
                        <?php the_field('subtitulo_especial'); ?>
                    </p>
                <?php endif; ?>
            </div>
        </header>

        <div class="container" style="margin-top: -50px; position: relative; z-index: 5;">
            <div class="contacto-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; background: white; padding: 50px; border-radius: 20px; box-shadow: var(--shadow);">
                
                <div class="contacto-info">
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                    
                    <?php if ( function_exists('get_field') && get_field('dato_contacto') ) : ?>
                        <div class="acf-dato-contacto" style="margin-top: 30px; border-left: 4px solid var(--ven-red); padding-left: 20px;">
                            <strong><?php esc_html_e( 'Información Clave:', 'venezuela-turismo' ); ?></strong>
                            <p><?php the_field('dato_contacto'); ?></p>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="contacto-form-placeholder">
                    <h3 style="color: var(--ven-blue); margin-bottom: 20px;"><?php esc_html_e( 'Envíanos un mensaje', 'venezuela-turismo' ); ?></h3>
                    <p><?php esc_html_e( 'Utiliza este diseño único para conectar con nosotros.', 'venezuela-turismo' ); ?></p>
                    <!-- Aquí iría un formulario de contacto -->
                    <div style="background: #f9f9f9; height: 300px; border-radius: 12px; border: 2px dashed #ddd; display: flex; align-items: center; justify-content: center;">
                        <span style="color: #999;"><?php esc_html_e( '[Espacio para Formulario]', 'venezuela-turismo' ); ?></span>
                    </div>
                </div>

            </div>
        </div>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>