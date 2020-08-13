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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'HappyAbode' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UoHvo(ZF$2.IVWTbh~iB:2)meC|r[(G@I$((fUSPgcCv}]m*@1L`FrwYG|YTFY$E' );
define( 'SECURE_AUTH_KEY',  '=5H|Zlc6[D1$dvh,m-*i|FCOeRYf9.?Tk!H%^UPstesXSst>3sOk5B-m[|2oz$mO' );
define( 'LOGGED_IN_KEY',    ');(0d]hyi{W0O%6@|dPQEI={GH$@!Mxi_<@_[:d<yEw$auh~f*,DbmK}B#!`P)1G' );
define( 'NONCE_KEY',        '{#Z^uMS+G@y2#)2Lo <T7*Q:/QOi4+!.$-U+}{Va=~9!t ,H0a|qa6nWK-tz<7Bm' );
define( 'AUTH_SALT',        'cZ?A4o+A.tjIgBfl:6[04,!CXy%b=ra<p?!cHdeyQDp&GTq|8A9+69bd[/<jC19,' );
define( 'SECURE_AUTH_SALT', '%@<H687CcSFQF+(N|ENPDg6tPg]u{=WQbh|P_XPb5mhWl]o(8-9OQA7oVOzx)C!O' );
define( 'LOGGED_IN_SALT',   'GzS1@@` YMZmK/W%hK1y#7DDH-.i{%eL/_R&$*@!vf%ZfF#F[t7f!X!zztRbNRr`' );
define( 'NONCE_SALT',       '>~n>ok83zS@&kunbp8ylR!1,O?b<+fIywFp=lP3xYo6ig)Rcox<}rbEdg<~l;|;%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
