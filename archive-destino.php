<?php get_header(); ?>

<div id="primary" class="content-area">
    <div class="container-wide">
        <main id="main" class="site-main">
            
            <header class="section-header">
                <h1 class="page-title"><?php post_type_archive_title(); ?></h1>
                <p class="archive-description">Descubre los mejores lugares de Venezuela: playas, montañas, pueblos y más.</p>
                <div class="title-underline"></div>
            </header>

            <div class="posts-grid">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="card-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium_large'); ?>
                        </a>
                    </div>
                <?php else : ?>
                    <div class="card-image placeholder">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/hero-venezuela.png" alt="destino">
                    </div>
                <?php endif; ?>
                
                <div class="card-content">
                    <span class="category-tag">Destino</span>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="read-more">Ver Destino</a>
                </div>
            </article>
        <?php endwhile; else: ?>
            <div class="no-posts">
                <p>Aún no hay destinos agregados. Ve a <strong>Admin → Destinos → Añadir nuevo</strong> y crea tu primer lugar turístico.</p>
            </div>
        <?php endif; ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>