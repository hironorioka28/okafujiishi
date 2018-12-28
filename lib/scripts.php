<?php
if (! function_exists('okafujiishi_scripts')) {
  function okafujiishi_scripts() {
    $the_theme = wp_get_theme();

    wp_enqueue_style('okafujiishi-styles', get_stylesheet_directory_uri() . '/css/dist.css', array(), $the_theme->get('Version'));
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'okafujiishi-scripts', get_template_directory_uri() . '/js/main.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'okafujiishi-youtube-scripts', get_template_directory_uri() . '/js/youtube.js', array(), $the_theme->get( 'Version' ), true );
  }
}
add_action('wp_enqueue_scripts', 'okafujiishi_scripts', 'okafujiishi-youtube-scripts');
