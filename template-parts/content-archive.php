<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
    <div class="card-image">
        <a href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('vt-card'); ?>
            <?php else : ?>
                <img src="<?php echo esc_url( get_theme_file_uri( 'img/hero-venezuela.png' ) ); ?>" alt="<?php the_title_attribute(); ?>">
            <?php endif; ?>
        </a>
    </div>

    <div class="card-content">
        <div class="card-meta">
            <span class="card-date"><?php echo get_the_date(); ?></span>
        </div>
        
        <h2 class="card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <div class="card-excerpt">
            <?php the_excerpt(); ?>
        </div>

        <a href="<?php the_permalink(); ?>" class="card-link">
            <?php esc_html_e( 'Leer más', 'venezuela-turismo' ); ?>
        </a>
    </div>
</article>
