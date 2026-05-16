<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="entry-hero">
            <?php the_post_thumbnail( 'full' ); ?>
        </div>
    <?php endif; ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="entry-content">
        <?php the_content(); ?>

        <?php if ( is_page( 'nosotros' ) && function_exists('get_field') ) : ?>
            <?php $integrantes = get_field( 'integrantes_del_equipo' ); ?>
            <?php if ( $integrantes ) : ?>
                <div class="equipo-info" style="background: #f0f7ff; padding: 20px; border-radius: 12px; margin-top: 30px;">
                    <h3>🤝 Nuestro equipo</h3>
                    <p><?php echo nl2br( esc_html( $integrantes ) ); ?></p>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</article>