<?php
/**
 * Funciones del tema Venezuela Turismo
 */

// 1. Cargar estilos y scripts (Parte 1 y 2)
function vt_scripts() {
    // CSS principal
    wp_enqueue_style('vt-estilo', get_stylesheet_uri(), array(), '1.0');
    
    // Google Font (Outfit)
    wp_enqueue_style('vt-fonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap');

    // FontAwesome 6
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    
    // JavaScript propio (cargado en el footer para rendimiento)
    wp_enqueue_script('vt-navegacion', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'vt_scripts');

// 2. Soporte del tema: imágenes destacadas, título, etc.
function vt_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height' => 60,
        'width'  => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'vt_support');

// 3. Registrar menú de navegación (Parte 2)
function vt_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'venezuela-turismo'),
        'menu-footer'    => __('Menú Footer', 'venezuela-turismo')
    ));
}
add_action('init', 'vt_menus');

// 4. Registrar zonas de widgets para el footer
function vt_widgets() {
    register_sidebar(array(
        'name'          => __('Footer Columna 1', 'venezuela-turismo'),
        'id'            => 'footer-1',
        'description'   => __('Aparece en la primera columna del footer.', 'venezuela-turismo'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Columna 2', 'venezuela-turismo'),
        'id'            => 'footer-2',
        'description'   => __('Aparece en la segunda columna del footer.', 'venezuela-turismo'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Columna 3', 'venezuela-turismo'),
        'id'            => 'footer-3',
        'description'   => __('Aparece en la tercera columna del footer.', 'venezuela-turismo'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Ancho Completo', 'venezuela-turismo'),
        'id'            => 'footer-wide',
        'description'   => __('Zona que ocupa todo el ancho superior del footer.', 'venezuela-turismo'),
        'before_widget' => '<div id="%1$s" class="widget widget-wide %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'vt_widgets');

// 5. (Opcional pero útil) Ajustar tamaño de las miniaturas
add_image_size('vt-card', 400, 250, true);
// 6. Fallback para el menú del footer
function vt_footer_menu_fallback() {
    echo '<ul>';
    echo '<li><a href="' . home_url('/') . '">Inicio</a></li>';
    echo '<li><a href="' . home_url('/nosotros') . '">NOSOTROS</a></li>';
    echo '<li><a href="' . get_post_type_archive_link( 'destino' ) . '">MI DESTINO SOÑADO</a></li>';
    echo '<li><a href="' . home_url('/contacto') . '">Contacto</a></li>';
    echo '</ul>';
}
?>