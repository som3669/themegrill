<?php


if ( ! defined( 'CUSTOM_DIR_URI' ) ) {
    define( 'CUSTOM_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'CUSTOM_DIR_PATH' ) ) {
    define( 'CUSTOM_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

function theme_styles(){
    wp_enqueue_style('stylesheet',get_stylesheet_uri(),[],filemtime(CUSTOM_DIR_PATH.'/style.css'),'all');

    wp_enqueue_style('bootstrap-css',CUSTOM_DIR_URI.'/assets/css/bootstrap.min.css',[],false,'all');
    wp_enqueue_script('bootstrap-js',CUSTOM_DIR_URI.'/assets/js/bootstrap.min.js',['jquery'],false,true);
    wp_enqueue_style('olive-css',CUSTOM_DIR_URI.'/assets/css/olive.css',[],false,'all');
    wp_enqueue_style('owl.carousel-css',CUSTOM_DIR_URI.'/assets/css/owl.carousel.css',[],false,'all');
    wp_enqueue_style('owl.theme.default-css',CUSTOM_DIR_URI.'/assets/css/owl.theme.default.css',[],false,'all');
    wp_enqueue_style('themify-icons-css',CUSTOM_DIR_URI.'/assets/css/themify-icons.css',[],false,'all');
}
add_action('wp_enqueue_scripts','theme_styles');


//theme menu
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//menu
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);

//custom image size
add_image_size('blog-large',800,400,true);
add_image_size('blog-small',300,200,true);


//Register sidebar
function sidebars(){

    register_sidebar(
        array(
            'name' => 'Page sidebar',
            'id' =>'page-sidebar',
            'before-title' => '<h4 class="widget-title">',
            'after-title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog sidebar',
            'id' =>'blog-sidebar',
            'before-title' => '<h4 class="widget-title">',
            'after-title' => '</h4>'
        )
    );
}
add_action('widgets_init','sidebars');