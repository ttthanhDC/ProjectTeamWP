<?php
/**
 * Enqueue Theme Styles
 */
function cronista_enqueue_styles() {
	
	if (!is_admin()) {
		
		wp_enqueue_style( 'cronista-bootstrap', CRONISTA_THEME_URL . '/assets/css/bootstrap.css', array(), CRONISTA_THEME_VERSION);
		wp_enqueue_style( 'cronista-style', get_stylesheet_uri(), array(), CRONISTA_THEME_VERSION);
		
	}

}
add_action( 'wp_enqueue_scripts', 'cronista_enqueue_styles' );




/**
 * Enqueue Theme Scripts
*/
function cronista_enqueue_scripts() {
		
	// Comment reply script for threaded comments
	if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	if (!is_admin()) {
		wp_enqueue_script( 'cronista-bootstrap', CRONISTA_THEME_URL . '/assets/js/bootstrap.min.js',  array( 'jquery' ), CRONISTA_THEME_VERSION, true );

	}


}
add_action( 'wp_enqueue_scripts', 'cronista_enqueue_scripts');					