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
define( 'DB_NAME', 'themegrill' );

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
define( 'AUTH_KEY',         '^Cvdg$fY/WJaOg3JPsh:eIxd~y^WL2Da0<--[WVxZvf~d>8r.:O+mmn[a[rn]*H<' );
define( 'SECURE_AUTH_KEY',  '3SSI&w>QF87I]Xpo,]]MsEW7|4O@M,={0ic@:i`&={e;i,LjAz$h?Bb+2DoCVwok' );
define( 'LOGGED_IN_KEY',    'W7`abI+ D|axV-Z36Ug6??]W}ft-U0}-Rp9g>d%j.2B[y]zIYm@-kQv=o<vz^d~H' );
define( 'NONCE_KEY',        '=7Pl F9b$A32k fHJaUF5m0O}UV9kQn#H6uU[??TiSKPR,kN1V0|]tO8MZ(/N^h9' );
define( 'AUTH_SALT',        '1>cUu>WjH2BV9[R$KpaYrQWM@pQPF% am9^Y!N+$dpW>ihC?+_2.k+,wB^]x%C6?' );
define( 'SECURE_AUTH_SALT', 'sxX_jdX;}C.k;kxSGt({$)$^qb)yW5q4GC^ACC|t:i{ <v/<Fj%fOvM.UIQa[J^W' );
define( 'LOGGED_IN_SALT',   'JXmmnz!Qlp7 9$pk&Y0I7*` gL4g$uQ:&jVl;Cuz{ljqdZS4Elmybkh<]r64aYRz' );
define( 'NONCE_SALT',       'HT8]4Gb4l|zSPL%<EA~<.i$+o3vc8H/Z/1Ubr$KxT^U8#89BP+[.i1G2WNe,L9 B' );

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
