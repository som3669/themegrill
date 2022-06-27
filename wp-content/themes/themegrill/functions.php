<?php


if ( ! defined( 'CUSTOM_DIR_URI' ) ) {
    define( 'CUSTOM_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'CUSTOM_DIR_PATH' ) ) {
    define( 'CUSTOM_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

function theme_styles(){
    wp_enqueue_style('stylesheet',CUSTOM_DIR_URI,[],filemtime(CUSTOM_DIR_PATH.'/style.css'),'all');
    wp_enqueue_style('bootstrap-css',CUSTOM_DIR_URI.'/assets/css/bootstrap.min.css',[],false,'all');
    wp_enqueue_script('bootstrap-js',CUSTOM_DIR_URI.'/assets/js/bootstrap.min.js',['jquery'],false,true);
}
add_action('wp_enqueue_scripts','theme_styles');