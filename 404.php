<?php get_header(); ?>

<div class="container" style="text-align: center; padding: 60px 20px;">
    <h1>404 - Página no encontrada</h1>
    <p>Lo sentimos, la página que buscas no existe.</p>
    <a href="<?php echo esc_url(home_url()); ?>" style="display: inline-block; margin-top: 20px; padding: 12px 24px; background: #ff0000; color: #fff; text-decoration: none; border-radius: 5px;">
        Volver al inicio
    </a>
</div>

<?php get_footer(); ?>