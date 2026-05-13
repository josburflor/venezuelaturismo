<?php get_header(); ?>

<div class="site-main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('single-post-container'); ?>>
            <header class="entry-header">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="entry-hero">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="entry-meta">
                    Publicado el <?php echo get_the_date(); ?> en <?php the_category(', '); ?>
                </div>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>