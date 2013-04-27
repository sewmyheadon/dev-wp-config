<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// if there's a local configuration file (local files, local database)
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {

	include( dirname( __FILE__ ) . '/local-config.php' );
	define( 'WP_LOCAL_DEV', true ); // Will disable plugins defined in mu-plugins/disable-plugins-when-doing-local-dev.php

// if there's a remote configuration file (local files, remote database)
} else if ( file_exists( dirname(__FILE__) . '/remote-config.php' ) ) { 

	include( dirname( __FILE__ ) . '/remote-config.php' );
	define( 'WP_LOCAL_DEV', false ); // Will not disable plugins

} else {

	// ** MySQL settings - You can get this info from your web host ** //
	//define('WP_CACHE', true); //Added by WP-Cache Manager

	define( 'DB_NAME', 'production_database_name' );

	/** MySQL database username */
	define( 'DB_USER', 'production_database_user' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'production_database_password' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );

}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Up memory limit **/
define('WP_MEMORY_LIMIT', '128M');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Change frequency of auto-save. */
define('AUTOSAVE_INTERVAL', 500 );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0e5ysn2wwrceyeaya8jzpvaqj_whatyoulookingat?_akdbbtrma6pqcnpo5dk585sj');
define('SECURE_AUTH_KEY',  'egwj86f5yxioqjhp2wdv60b2w7fyowiptrhwtlyam3alrnqw6c1nqbf6lvbkxbb0');
define('LOGGED_IN_KEY',    'oaxkxuspbbbgmubwdgpa5elnlbpsb8wpaqqiluys0acfbdkozjj4ll6u0zfrrtbrr0');
define('NONCE_KEY',        'ry3fdvps1ek17ssyw6nfgvgmh48fuzd83mqhbs1pw01mf1gtpwr9p1xsjhk0cy');
define('AUTH_SALT',        'f6fc_GENERATE_YOUR_OWN_KEY_USING_THE_LINK_ABOVE,_NERD_segzak');
define('SECURE_AUTH_SALT', 'g6musum4dczln4oxgam7sfe17ntisekzcfmtuondbdkcdyo4kobed2llvc4yfybl');
define('LOGGED_IN_SALT',   'rurxemv49lteyhyeb1f7factes5hoyqc6llevl9kg9c0hrjdzfcdcoaqkrksl8gc');
define('NONCE_SALT',       '3cc9zqfmkblr7vdkz63wgg2xxippqsh6vszcsmekqjgeyfeowypaq1mttwctjidk');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */

/** For godsakes, change the freaking table prefix. */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

