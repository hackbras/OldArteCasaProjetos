<?php

$uh_wpconfig_dir = preg_replace('/\\\\/', '/', dirname(__FILE__));
$uh_wp_path = preg_replace('/(E:\/home\/[^\/]+\/[^\/]+\/|\/var\/www\/html\/[^\/]+\/)web(.*)/', '$2', $uh_wpconfig_dir);
if (!empty($_SERVER['HTTP_HOST'])) {
    $uh_site_url = 'http://' . $_SERVER['HTTP_HOST'] . $uh_wp_path;
    define('WP_SITEURL', $uh_site_url);
    define('WP_HOME', $uh_site_url);
}
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
define('DB_NAME', 'arteca');

/** MySQL database username */
define('DB_USER', 'arteca');

/** MySQL database password */
define('DB_PASSWORD', 'iA4}NS3G');

/** MySQL hostname */
define('DB_HOST', 'arteca.mysql.uhserver.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '4!*lIMidd6Pni#%qVbXU5aKJzo(iug*VY)1@KEHmWmAkUkD)Tt(a4dvm(hXYt5IN');
define('SECURE_AUTH_KEY',  '!))Z1tlTBXWdyOkE7FyAlLm3nAC7G5C^Ry006LdGE#61pg5r%!chh8Xit8czvWHK');
define('LOGGED_IN_KEY',    'Byhr!3FY5ZQ93HUp^##OXWE26bk#Z^dbGw9b(tniqTl58QXpIgY0l0@LdOXu0ABc');
define('NONCE_KEY',        '31jD05pISIsTRaDSKqNKuxMAPDEU2nxKPpxR4)owCKEeDT@pW19adU1#eil*tME&');
define('AUTH_SALT',        '^#oMK2k)r@%0KDZ#4(fT6^##aKcpWY^LMYb0EHE2&DJ2sVQipeUsvTb^RF41wo9W');
define('SECURE_AUTH_SALT', '4nJ19C)R4v92dvrYIiMppAWZ9F*svQ78LWMSeFK4gIO@LHt4vC@N6#RhJdl0AYc%');
define('LOGGED_IN_SALT',   'dPKfpw#GOXIRKxmTFEZwPMSPSZ&5zKd)vB%WJSaNYkHyNOfq5!#KfN@R2m@z(C7t');
define('NONCE_SALT',       'DCb)^c4F8tFXZfepHa6VBeGl4lm3fhMT@yHiv3Hw25^qIxflZ%uijrr5B9!fek0D');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'apswp_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>