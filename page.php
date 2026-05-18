<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if ( is_page( 'nosotros' ) ) : ?>
        <?php get_template_part( 'template-parts/content', 'nosotros' ); ?>
    <?php else : ?>
        <?php get_template_part( 'template-parts/content', 'page' ); ?>
    <?php endif; ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>