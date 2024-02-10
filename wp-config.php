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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'Es%W2TfBX]?cN>KQ14b3mN0Z:l?0MCsCi4rD4|U(1d?ZOdG_k#gaINmc633fJpS9' );
define( 'SECURE_AUTH_KEY',  'RD 7}JUG=t Tskz:^$a*vmV_}Xtml?Zg]=0D&!9:r#aZ4T[}SKu[=w&|52Q+BBds' );
define( 'LOGGED_IN_KEY',    'j4k|~Q<]{pL@r]0#mi~GI(-5cMP/8, o `!a{V2A@9B9-hAKW625FR=t^y^!Z o{' );
define( 'NONCE_KEY',        '%/[hI}tV TT1)`fhbXI~b~*TQ$B{+},qz3E)gpbNsoDIFJI<1U3X5ROKoJm}`$an' );
define( 'AUTH_SALT',        ';OUZY2L|fVTdEwT3na{<jheb+tWOl<JZWv]X:8b4ir!]&8%lQY;4x;kL_Ex7Lv$q' );
define( 'SECURE_AUTH_SALT', '^)<rJRsw%+HsIY ~!}vm;K6h~Eux,lDI?>hroo05,yW%=d$MTMxM,N)~ueM6dIto' );
define( 'LOGGED_IN_SALT',   'O%Rkl8^0>s1w@DmmuCIfHdO`DB@Y<wWK@EF#sL^%AQ#w*w.&X|t0/{ gnbcYXx!P' );
define( 'NONCE_SALT',       '|OBp[0:wOaP1pens=u(ssEHWBW7%]@x/P{$  YPc<dGIJUnHGa -gyLOq_qEz 7i' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
