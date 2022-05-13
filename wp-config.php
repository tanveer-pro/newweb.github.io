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
define( 'DB_NAME', 'newweb.github.io' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '}z.>;Yh9IV{y3RT0_^>)/,y?oQwHXa]RVX3EAtfF;5~>K2,e:,fd~FO@_,~J2T3B' );
define( 'SECURE_AUTH_KEY',  '(4qY2IJ8JYu,+Pn7i+J5Y4X-[NZ91:v?/ZrYB#*vlc<h2AU;sem(IZy]WC@9(-qu' );
define( 'LOGGED_IN_KEY',    'Y-)UX3B0{*,2pI2oBl.4w/Cqh8.FERrhzS4L>>*f(++7^sanjUV%13|j_~F6[cCU' );
define( 'NONCE_KEY',        '0Gyq6ZT~p2T%3d}*QAnVMs))PN*-G+~ZeP~6F#DoiomugJ{1c-FK#BcG;0ULmZW:' );
define( 'AUTH_SALT',        'Jx_gy+.=Le6bWYm]<SR!~^hNe[7s3{ixg}H]QmQk(J%_0T_.^ xz6CuG5MDWh?8`' );
define( 'SECURE_AUTH_SALT', 'GJ=bv3u)GMm$ucv(RptDY6kDuRb/M^.A1`%pH4Np)y 0&Nfv#j@PFXM^/uEd^1*]' );
define( 'LOGGED_IN_SALT',   'Hj(a^AIHqKCyA`a$36/fL2gV{T{*^sTBWm|nIr#*Tn?eD7q_dIj[*wRgWJd7$k.O' );
define( 'NONCE_SALT',       ';}nt5ZunA?F?)Lf-@o+FQDTN]V(ti&s7!>ptqrbiUVxr<IMIx(9yXo>e7TFJ?oh*' );

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
