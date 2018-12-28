<?php

require_once locate_template('lib/init.php');
require_once locate_template('lib/cleanup.php');
require_once locate_template('lib/scripts.php');

add_theme_support('post-thumbnails');
// wp-captionのカスタマイズ
add_shortcode('caption', 'custom_caption_shortcode');

function custom_caption_shortcode($attr, $content = null) {
    if ( ! isset( $attr['caption'] ) ) {
        if ( preg_match( '#((?:<a [^>]+>s*)?<img [^>]+>(?:s*</a>)?)(.*)#is', $content, $matches ) ) {
            $content = $matches[1];
            $attr['caption'] = trim( $matches[2] );
        }
    }
    $output = apply_filters('img_caption_shortcode', '', $attr, $content);
    if ( $output != '' ) return $output;
    extract(shortcode_atts(array(
        'id'      => '',
        'align'   => 'alignnone',
        'width'   => '',
        'caption' => ''
    ), $attr, 'caption'));
    if ( 1 > (int) $width || empty($caption) ) return $content;
    if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

    return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '">' . do_shortcode( $content ) . '<figcaption class="wp-caption-text">' . $caption . '</figcaption></figure>';
}
