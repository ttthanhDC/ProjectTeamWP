<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'travel_02');
// WPDB

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g&PA{D%r|;u>L{!|zSKD90_zs5.]]GjtlId+!>5Bt{6<~k0fcp4w^;h$]+K;NE!*');
define('SECURE_AUTH_KEY',  '=-J)A3,5)5!v|1Hq}LIG2)t0rY5e}ks]i)X5U#In^hVXwd9,)!%]]8I7x<l7_e,M');
define('LOGGED_IN_KEY',    'rZ;MX~(+dpM8;yJ>ZwZ9pgNM!Cyjs{5nMX#CSkZ[d}y{8[ 9RQQG[tjg;mA.C($}');
define('NONCE_KEY',        ',t,f|xSX;4;C wiiUiJk~#Z9JajA?Gr_XVd~+P+d%!?.KoSV?mI6W%ZI;$*q8M`+');
define('AUTH_SALT',        'C$R3=wc$hCuIk;S}~o<g#>l$0[Ab*vQr|G:usww~]/#! Kfg]t4@ ?oun9?*@-_X');
define('SECURE_AUTH_SALT', '5^qB_}Q/fq6Jg ^XDr8V|0Y^W:rXBp%jq?*<q]+FEhxh,=n7# 4k.BwC4`d!{0B$');
define('LOGGED_IN_SALT',   '#ArcFW{3V7y1G_Co#dJjm:VQuYnvB,;XENBZf(@VLr0[9Pa]2z8@(6;9U#hh55x}');
define('NONCE_SALT',       'A]FJPm!*C(44Rj/:/&iD~!*V3%TZ*kr%HtZnfxr1*.ftA5X,i<;+|<;RH<m -Ka1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
