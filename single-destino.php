<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('single-destino'); ?>>
        
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="hero-destino" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.5)), url('<?php echo get_the_post_thumbnail_url(null, 'full'); ?>');">
                <div class="container">
                    <h1 class="entry-title" style="color: white; font-size: 3.5rem; text-shadow: 0 5px 15px rgba(0,0,0,0.5);"><?php the_title(); ?></h1>
                </div>
            </div>
        <?php endif; ?>

        <div class="entry-content">
            <?php if ( !has_post_thumbnail() ) : ?>
                <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php endif; ?>

            <div class="destino-description">
                <?php the_content(); ?>
            </div>

            <div class="destino-meta">
                <hr style="opacity: 0.1; margin: 30px 0;">
                <p><strong>📍 Categoría turística:</strong> 
                    <?php echo get_the_term_list( get_the_ID(), 'tipo-destino', '<span class="tag">', ', ', '</span>' ); ?>
                </p>
            </div>
        </div>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>