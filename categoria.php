<?php get_header(); ?>
<h1 class="archive-title">Categoría: <?php single_cat_title(); ?></h1>
<div class="posts-grid">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="card">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('vt-card'); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/hero-venezuela.png" alt="Venezuela">
            <?php endif; ?>
            <div class="card-content">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="read-more">Leer más →</a>
            </div>
        </div>
    <?php endwhile; endif; ?>
</div>
<div class="paginacion">
    <?php echo paginate_links(); ?>
</div>
<?php get_footer(); ?>