<?php 
/**
 * The LOCAL configuration.
 *
 * This file has the following configurations: MySQL settings. 
 *
 * @package WordPress
 */

/* MySQL database */
define( 'DB_NAME', 'local_database_name' );

/* MySQL database username */
define( 'DB_USER', 'local_database_user' );

/* MySQL database password  */
define( 'DB_PASSWORD', 'local_database_password' );

/* MySQL hostname (usually 'localhost') */
define( 'DB_HOST', 'localhost' );

/* MySQL table prefix. */
$table_prefix = 'wp_';

/* make Jetpack work locally */
 define( 'JETPACK_DEV_DEBUG', true);

/*
	Turn on WordPress debugging mode

	Change this to true to enable the display of notices during development.
	It is strongly recommended that plugin and theme developers use WP_DEBUG
	in their development environments.
*/
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);