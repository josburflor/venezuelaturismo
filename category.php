<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <header class="section-header">
            <h1 class="section-title">
                <?php printf( esc_html__( 'Categoría: %s', 'venezuela-turismo' ), single_cat_title( '', false ) ); ?>
            </h1>
            <div class="title-underline"></div>
        </header>

        <?php if ( have_posts() ) : ?>
            <div class="posts-grid">
                <?php 
                while ( have_posts() ) : the_post();
                    // Usamos un fragmento para cada tarjeta para mantener la modularidad
                    get_template_part( 'template-parts/content', 'archive' );
                endwhile; 
                ?>
            </div>

            <div class="pagination-container">
                <?php
                echo paginate_links( array(
                    'prev_text' => '<i class="fas fa-chevron-left"></i> ' . esc_html__( 'Anterior', 'venezuela-turismo' ),
                    'next_text' => esc_html__( 'Siguiente', 'venezuela-turismo' ) . ' <i class="fas fa-chevron-right"></i>',
                ) );
                ?>
            </div>

        <?php else : ?>
            <p><?php esc_html_e( 'No se encontraron artículos en esta categoría.', 'venezuela-turismo' ); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
