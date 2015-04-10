<?php 
/**
 * The STAGING configuration.
 *
 * This file has the following configurations: MySQL settings. 
 *
 * @package WordPress
 */

/*
	MySQL database
*/
define( 'DB_NAME', 'staging_database_name' );

/*
	MySQL database username
*/
define( 'DB_USER', 'staging_database_user' );

/*
	MySQL database password 
*/
define( 'DB_PASSWORD', 'staging_database_password' );

/*
	MySQL hostname (usually 'localhost')
*/
define( 'DB_HOST', 'localhost' );

/*
	MySQL table prefix.
 */
	$table_prefix = 'wp_';

/*
	Turn on WordPress debugging mode

	Change this to true to enable the display of notices during development.
	It is strongly recommended that plugin and theme developers use WP_DEBUG
	in their development environments.
*/
define('WP_DEBUG', true);