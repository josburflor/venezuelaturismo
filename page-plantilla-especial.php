<?php
/**
 * Template Name: Mi Plantilla Especial
 */

get_header(); ?>

<div class="single-post-container">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-thumbnail-large">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>