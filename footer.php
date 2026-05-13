</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <?php if ( is_active_sidebar( 'footer-wide' ) ) : ?>
        <div class="footer-wide-area">
            <div class="container">
                <?php dynamic_sidebar( 'footer-wide' ); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="footer-container">
        <!-- Columna 1 -->
        <div class="footer-column">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php else : ?>
                <div class="footer-logo">
                    <img src="<?php echo esc_url( get_theme_file_uri( 'img/logo.png' ) ); ?>" alt="Logo" class="site-logo">
                </div>
                <p>Explora la magia de Venezuela. Desde las cumbres nevadas de los Andes hasta las arenas blancas del Caribe.</p>
                <div class="social-icons">
                    <a href="#" class="social-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon" title="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="https://wa.me/tu-numero" class="social-icon" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- Columna 2 -->
        <div class="footer-column">
            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <?php dynamic_sidebar( 'footer-2' ); ?>
            <?php else : ?>
                <h3 class="footer-widget-title">Enlaces del Sitio</h3>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-footer',
                    'menu_class'     => 'footer-menu',
                    'container'      => false,
                    'fallback_cb'    => 'vt_footer_menu_fallback'
                ) );
                ?>
            <?php endif; ?>
        </div>

        <!-- Columna 3 -->
        <div class="footer-column">
            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <?php dynamic_sidebar( 'footer-3' ); ?>
            <?php else : ?>
                <h3 class="footer-widget-title">Boletín Informativo</h3>
                <p>Suscríbete para recibir ofertas y noticias exclusivas.</p>
                <div class="newsletter-form">
                    <input type="email" placeholder="Tu email...">
                    <button type="button">OK</button>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="site-info">
        <div class="footer-container">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>