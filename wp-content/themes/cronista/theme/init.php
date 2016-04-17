<?php 

// include system functions y constantes
require_once CRONISTA_PATH . '/constants.php';


/****************************************************************
 * Configuracion del tema
 ****************************************************************/
if (!isset( $content_width)) {
	$content_width = 900; // default content width
}




function cronista_setup(){
	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "post-thumbnails" );
	add_theme_support( "title-tag" ) ;
	
	$defaults = array(
			'default-image'          => get_template_directory_uri() . '/assets/img/default_theme_logo.png',
			'width'                  => 900,
			'height'                 => 150,
			'flex-height'            => false,
			'flex-width'             => false,
			'uploads'                => true,
			'random-default'         => false,
			'header-text'            => true,
			'default-text-color'     => '',
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $defaults );
	
	
	
	$defaults = array(
			'default-color'          => '',
			'default-image'          => '',
			'default-repeat'         => '',
			'default-position-x'     => '',
			'default-attachment'     => '',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $defaults );
	
	add_editor_style();

	// Menu
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Menu principal', 'cronista' ) );
	
	
	/**
	 * Make theme available for translation.
	 * Translations can be placed in the /lang/ directory.
	 */
	load_theme_textdomain( 'cronista', get_template_directory() . '/lang' );
	
	$locale = get_locale();
	$locale_file = get_template_directory() . "/lang/$locale.php";
	if ( is_readable($locale_file) )
		require_once($locale_file);
	
	
}
add_action( 'after_setup_theme', 'cronista_setup' );


/*
 * ENQUEUE JS Y CSS
 */
function cronista_stylesheet( $stylesheet_uri, $stylesheet_dir_uri ) {
	return is_child_theme() ? $stylesheet_uri :  CRONISTA_THEME_URL . '/assets/css/style.css';

}
add_filter( 'stylesheet_uri', 'cronista_stylesheet', 10, 2 );

require_once CRONISTA_THEME_PATH . '/assets/functions/enqueue-scripts.php';






/****************************************************************
 * Require Needed Files & Libraries
 ****************************************************************/
require_once CRONISTA_THEME_PATH . '/assets/functions/general.php';


function cronista_excerpt_more( $more ) {
	return '... <a class="read-more" href="' . esc_url(get_permalink( get_the_ID() )) . '">' . __( 'Leer Mas', 'cronista' ) . '</a>';
}
add_filter( 'excerpt_more', 'cronista_excerpt_more' );


// Register sidebars/widget areas
require_once CRONISTA_THEME_PATH . '/assets/functions/sidebar.php';

// Register class navwalker
require_once CRONISTA_THEME_PATH . '/assets/functions/cronista_navwalker.php';


/****************************************************************
 * About Theme. Informacion del Theme y sus cambios
 ****************************************************************/
require CRONISTA_PATH . '/theme-info.php';
function cronista_add_admin_menu() {
	add_theme_page(__('Informacion del Tema', 'cronista')
				 , __('Informacion del Tema', 'cronista')
				 , 'edit_theme_options'
				 , 'cronista_info'
				 , 'cronista_information_page'
				 , null
				 , 99
				 );
	
		
}
add_action('admin_menu', 'cronista_add_admin_menu');



