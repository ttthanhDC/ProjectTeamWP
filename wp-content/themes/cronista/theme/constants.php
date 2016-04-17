<?php
/****************************************************************
 * System Functions
 ****************************************************************/


/**
 * Load Theme Variable Data
 * @param string $var
 * @return string
 */
function cronista_data_variable($var) {
	if (!is_file(STYLESHEETPATH . '/style.css')) {
		return '';
	}

	$theme_data = wp_get_theme();
	return $theme_data->{$var};
}



/****************************************************************
 * Constantes del Theme
 ****************************************************************/
define('CRONISTA_MODE', 'production');
define('CRONISTA_CUSTOMIZED', true); // set to TRUE if you changed something in the source code.
define('CRONISTA_THEME_VERSION', cronista_data_variable('Version'));
define('CRONISTA_PREFIX',			'cronista_');
define('CRONISTA_THEME_PREFIX',		CRONISTA_PREFIX . get_template().'_');
define('CRONISTA_META_PREFIX',		'_' . CRONISTA_PREFIX);
define('CRONISTA_HELP_URL', '#');