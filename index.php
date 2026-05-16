<?php get_header(); ?>

<!-- Hero Slider con Transiciones -->
<section class="hero-section">
    <div class="hero-slider">
        <div class="hero-slide active" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'img/hero-venezuela.png' ) ); ?>');"></div>
        <div class="hero-slide" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'img/playaagua.jpg' ) ); ?>');"></div>
        <div class="hero-slide" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'img/llano.jpg' ) ); ?>');"></div>
        <div class="hero-slide" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'img/merida.jpg' ) ); ?>');"></div>
    </div>
    
    <div class="hero-content">
        <h1 class="page-title">Venezuela Turismo</h1>
        <p>Tu portal hacia lo extraordinario</p>
    </div>

    <!-- Indicador de Scroll -->
    <div class="scroll-indicator">
        <span></span>
    </div>
</section>

<div id="primary" class="content-area">
    <div class="container-wide">
        <main id="main" class="site-main">
            
            <header class="section-header">
                <h2 class="section-title">Blog al Día de Venezuela</h2>
                <div class="title-underline"></div>
            </header>

            <div class="posts-grid">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', 'archive' );
                    endwhile;
                else :
                    ?>
                    <div class="no-posts">
                        <h3><?php esc_html_e( '¡Vaya! No se han encontrado entradas.', 'venezuela-turismo' ); ?></h3>
                        <p><?php esc_html_e( 'Asegúrate de haber publicado contenido.', 'venezuela-turismo' ); ?></p>
                    </div>
                    <?php
                endif;
                ?>
            </div>
            
            <div class="pagination-container">
                <?php echo paginate_links(); ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>