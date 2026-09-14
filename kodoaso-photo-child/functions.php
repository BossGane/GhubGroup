<?php
/** Load assets only on pages assigned the KODOASO template. */
if ( ! defined( 'ABSPATH' ) ) { exit; }
function kodoaso_photo_is_page() {
    return is_page() && 'kodoaso-photo' === get_page_template_slug( get_queried_object_id() );
}
add_filter( 'body_class', function( $classes ) {
    if ( kodoaso_photo_is_page() ) { $classes[] = 'kodoaso-photo-page'; }
    return $classes;
} );
add_action( 'wp_enqueue_scripts', function() {
    if ( ! kodoaso_photo_is_page() ) { return; }
    wp_enqueue_style( 'kodoaso-photo', get_stylesheet_directory_uri() . '/assets/photo.css', array(), '1.0.0' );
    wp_enqueue_script( 'kodoaso-photo', get_stylesheet_directory_uri() . '/assets/photo.js', array(), '1.0.0', true );
}, 30 );
// Head metadata is intentionally managed by WordPress / one SEO plugin.
// Do not paste standalone HTML head tags into the page editor.
