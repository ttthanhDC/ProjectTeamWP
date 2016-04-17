<?php
/****************************************************************
 * NO BORRAR
 ****************************************************************/
if ( get_stylesheet_directory() == get_template_directory() ) {

	define('CRONISTA_THEME_PATH', get_template_directory() );
	define('CRONISTA_THEME_URL', get_template_directory_uri() );
	
	define('CRONISTA_PATH', get_template_directory() . '/theme');
	define('CRONISTA_URL', get_template_directory_uri() . '/theme');
	
}  else {
    define('CRONISTA_THEME_PATH', get_theme_root() . '/cronista');
    define('CRONISTA_THEME_URL', get_theme_root_uri() . '/cronista');
    
    define('CRONISTA_PATH', get_theme_root() . '/cronista/theme');
    define('CRONISTA_URL', get_theme_root_uri() . '/cronista/theme');
    
}


require_once CRONISTA_PATH . '/init.php';

