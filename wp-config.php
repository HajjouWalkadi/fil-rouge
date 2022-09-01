<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'E-commerce-site' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wOvU3iflK4bv8MTNz6k8kaRFUBJFM5y2NfycJoNNA3LPT1QtSGyQn9JcUFSh6Ftc' );
define( 'SECURE_AUTH_KEY',  'QG2yHLF7UZgnfMN0YSX70JRv9MB7VNqbeTxXvjWNeINdjG3elLqJZed6Wf4GZfRG' );
define( 'LOGGED_IN_KEY',    'th1EBZxfTtI0qYyMuIoXK5TvGXiO64BpAR3mAzQ0Pym2AxWlba1bylxbzjBHNVLm' );
define( 'NONCE_KEY',        '0yGShv7OZhW80AMFSnWxE08dzpyF0J85LNWNtI9Jq6YZGVBHUhTzVbfZHfniY4qi' );
define( 'AUTH_SALT',        '08MOXv6tBE73zplMN72P1Yeu8eCjLqjY5AToifmw4cNEWW3gZSgHqDQlhvmN1pXv' );
define( 'SECURE_AUTH_SALT', 'nugfq3ZBBB19oKxgRFYHoUsLQZ92xxbYgMgBTmVaHOgk8kAEEpbajEfazNGPRPc8' );
define( 'LOGGED_IN_SALT',   'HmLT7upnLx72vKqCgsAGctsB5a1sGg49HqfmGh5alviHy2Mp8v34WJJ5BnQeLpBB' );
define( 'NONCE_SALT',       'ml2i067swGvs70TQDJiJDEVQ8RshOefhFptNOxlu284ny7BuUW3bAOMRlIQkdWf1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
