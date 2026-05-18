<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>

        <?php if ( function_exists('get_field') ) : ?>

            <!-- Campo: Integrantes -->
            <?php if ( get_field('integrantes') ) : ?>
                <div class="acf-block" style="background: #f0f7ff; padding: 20px; border-radius: 12px; margin-top: 30px;">
                    <h3> Nuestro equipo</h3>
                    <p><?php the_field('integrantes'); ?></p>
                </div>
            <?php endif; ?>

            <!-- Campo: Imagen del equipo -->
            <?php if ( get_field('imagen_equipo') ) : ?>
                <div class="acf-imagen" style="margin: 30px 0; text-align: center;">
                    <img src="<?php the_field('imagen_equipo'); ?>" alt="Equipo Venezuela Turismo" style="max-width: 100%; border-radius: 16px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                </div>
            <?php endif; ?>

            <!-- Campo: Nuestra historia -->
            <?php if ( get_field('nuestra_historia') ) : ?>
                <div class="acf-block" style="background: #f0f7ff; padding: 20px; border-radius: 12px; margin-top: 30px;">
                    <h3> Nuestra historia</h3>
                    <p><?php the_field('nuestra_historia'); ?></p>
                </div>
            <?php endif; ?>

            <!-- Campo: Nuestros valores -->
            <?php if ( get_field('nuestros_valores') ) : ?>
                <div class="acf-block" style="background: #f0f7ff; padding: 20px; border-radius: 12px; margin-top: 30px;">
                    <h3> Nuestros valores</h3>
                    <p><?php the_field('nuestros_valores'); ?></p>
                </div>
            <?php endif; ?>

        <?php endif; ?>
    </div>
</article>