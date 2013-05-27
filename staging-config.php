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
	MySQL hostname 
	
	Most remote servers will use a subdomain for their MySQL server like 
	hero.serverfarm.com - specify the port used for MySQL connections.
	Make sure that the remote server is configured to accept incoming,
	remote connections, and that any firewall is updated to allow your IP
*/
define( 'DB_HOST', 'staging_database_hostname:3306' );