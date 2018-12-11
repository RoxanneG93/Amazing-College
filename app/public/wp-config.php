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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XK47b2cuEl/evtdW0gpEqLihKP78xHo6lDMg5EFbGXIlpZsgop37i0/Hh23y9JmjNd/pPio09vewD3xnNOtkAg==');
define('SECURE_AUTH_KEY',  'RKFFgdD2S+UjJleOftB38faVKA/5xSrUQbZVJlJHpELpHgH9A0JHDy0L6NQsDs64G6lSlevgTiouKbG6gfe/IA==');
define('LOGGED_IN_KEY',    'n1K/s6vX3A/s/sxwnIA4lF/PEwZSv8EHYZxTu1+5pGB9gELSxq3uwwYQkrmGHatrFcVh5bfdjJvctKCv14Crhw==');
define('NONCE_KEY',        'kZ0UADMgTAd412c8p0yKvRoCEIQZ05aUxEfJV7MEfJYLU7Vm97z4gYpc1M2vsLX05Rn/j2RKJui0DlXQ5RBmBA==');
define('AUTH_SALT',        'SfZEGKrmUuAj94VEZyTXj8NvHfXaXvidasD0eLI0q5n7ai/8oSLo0cYRZb9s8fuHGDAvqD+FSdbSzM1G5tZ1EA==');
define('SECURE_AUTH_SALT', 'Snq59wg9a9EOBzgWIGgSVooMx7Bvae+2MzUgZcBzKt80YK31us6lpIpyvHpfAg4o278K0Do894+3EnpHbYUxQw==');
define('LOGGED_IN_SALT',   'jPOf+aaxZiuyQRrf3eE06v0F3qNi/yIhYC0/4kPa21BDO+UXpZuO1LR7ziH6TpO5L936jSwzL3reElBT6u9mbg==');
define('NONCE_SALT',       '0q3qIXQ3qiGC0eyVCJdiedQ0giG6Tt0xRDiO021o3TIkildqpbpT1vF6vxWi+APB/f1m5VVNWAM8U6aCE+Pdaw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
