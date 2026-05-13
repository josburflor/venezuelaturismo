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
                // El bucle de WordPress para mostrar las entradas
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
                            
                            <!-- Imagen de la entrada con fallback -->
                            <div class="card-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php else : ?>
                                        <!-- Imagen por defecto si no hay miniatura -->
                                        <img src="<?php echo esc_url( get_theme_file_uri( 'img/hero-venezuela.png' ) ); ?>" alt="Venezuela">
                                    <?php endif; ?>
                                </a>
                            </div>

                            <div class="card-content">
                                <div class="card-meta">
                                    <span class="card-category"><?php the_category(' '); ?></span>
                                    <span class="card-date"><?php echo get_the_date(); ?></span>
                                </div>
                                
                                <h3 class="card-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                
                                <div class="card-excerpt">
                                    <?php 
                                    // Mostramos un extracto justificado
                                    echo wp_trim_words( get_the_excerpt(), 25, '...' ); 
                                    ?>
                                </div>
                                
                                <a href="<?php the_permalink(); ?>" class="card-link">Explorar Destino</a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                else :
                    ?>
                    <div class="no-posts">
                        <h3>¡Vaya! No se han encontrado entradas.</h3>
                        <p>Asegúrate de haber publicado tu entrada y que no esté en estado "Borrador".</p>
                        <p>También verifica en <strong>Ajustes > Lectura</strong> que tu página de inicio esté configurada para mostrar "Tus últimas entradas".</p>
                    </div>
                    <?php
                endif;
                ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>