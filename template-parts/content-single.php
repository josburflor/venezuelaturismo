<article id="post-<?php the_ID(); ?>" <?php post_class('single-post-container'); ?>>
    <header class="entry-header">
        <?php if (has_post_thumbnail()) : ?>
            <div class="entry-hero">
                <?php the_post_thumbnail('full'); ?>
            </div>
        <?php endif; ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="entry-meta">
            <?php 
            printf( 
                esc_html__( 'Publicado el %1$s en %2$s', 'venezuela-turismo' ),
                get_the_date(),
                get_the_category_list( ', ' )
            ); 
            ?>
        </div>
    </header>

    <div class="entry-content">
        <?php 
        the_content(); 
        
        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'venezuela-turismo' ),
            'after'  => '</div>',
        ) );
        ?>

        <!-- Mostrar campos ACF para esta entrada (si existen) - Parte 6 -->
        <?php if ( function_exists('get_field') ) : ?>
            <?php 
            $mejor_epoca = get_field('mejor_epoca');
            $precio = get_field('precio');
            $consejo = get_field('consejo');
            
            if ( $mejor_epoca || $precio || $consejo ) : ?>
                <div class="acf-fields-entrada" style="background: #f0f7ff; padding: 20px; border-radius: 12px; margin-top: 30px;">
                    <h3>📋 <?php esc_html_e( 'Información adicional', 'venezuela-turismo' ); ?></h3>
                    <?php if ( $mejor_epoca ) : ?>
                        <p><strong>📅 <?php esc_html_e( 'Mejor época:', 'venezuela-turismo' ); ?></strong> <?php echo esc_html( $mejor_epoca ); ?></p>
                    <?php endif; ?>
                    <?php if ( $precio ) : ?>
                        <p><strong>💰 <?php esc_html_e( 'Precio:', 'venezuela-turismo' ); ?></strong> <?php echo esc_html( $precio ); ?></p>
                    <?php endif; ?>
                    <?php if ( $consejo ) : ?>
                        <p><strong>🎒 <?php esc_html_e( 'Consejo:', 'venezuela-turismo' ); ?></strong> <?php echo esc_html( $consejo ); ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</article>
