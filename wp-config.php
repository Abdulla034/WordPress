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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'DF^5~)1w~)7H5:EC3vn*+hip43>uQNmed/><9z?z5()EEU1(7BF}`_A@(]Q^ZOc#' );
define( 'SECURE_AUTH_KEY',  '?8H%Q9P&%CjGwBh08;r go]lKH{{Q/tU;DAW|2YMe6yo0@9Z?Gv&(rZLrwJaM`~B' );
define( 'LOGGED_IN_KEY',    '.ohKBOS0q9R5jFq=%z|g,c5`&pS) ^{;%k,d6nI;~vWY/eMTP=|syP8#]O8Y9hfV' );
define( 'NONCE_KEY',        'D6iI43xHO1kM:VTg?N7VpL{#rfo|r55qB5Z(?qjB-;4#2tvNRI{Sxg>jJf5gnA5u' );
define( 'AUTH_SALT',        '4op`VA}j@iD`eEw[2BKu2 }Ck2p8r/kglcxnrEJ5kVC@)LfckZ=lbDBBW>h0yFeo' );
define( 'SECURE_AUTH_SALT', 'CX4P:z3nq:7MMei7e?39G$Gj933;{Q.b~Rz~p]x[_w>=])Zz{b3u~vwSFW;l0d6g' );
define( 'LOGGED_IN_SALT',   '9]p59)lVt>vtmszToKWd|!.$?[dTyQi{!*q}0h/642:RStqdC^>*6{8L1!u^a3sF' );
define( 'NONCE_SALT',       'o?|J|N54!n]y[?jKWZ[}*MBw _N};$Z.k|q-zm_dVg2tQIP(`M#i%Iw*66?haL;i' );

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
