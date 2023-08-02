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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '9fcPflCXnkHyDm+L7`*6e>~:Z5WJ WVVCgdq^34)NX{v_e8YLTj:C!SC(1P]K{31' );
define( 'SECURE_AUTH_KEY',  'tWrJ7BZ[63!sH0<*g0C;l[v|8*),Nr,`^pKVrX_Q_PT8B!?^N+P>S|h!r*a^a:@?' );
define( 'LOGGED_IN_KEY',    'VQ._cJsKt*Vqy_3w+&`J+1wiwxTMa5QF$:6m4aj9QZ=jAv{DYU)Fr-.1K{p}l@>!' );
define( 'NONCE_KEY',        'h+9=T(4Ks7)0uNM]V=RfH8*dffcTSn1YVvP9wwtUFBcb8$XbYhC~1Y_>R(PhY*N&' );
define( 'AUTH_SALT',        'QseH&~Jx#sHP{-thd1s/Yp82}XSVO$x$f:`;7_irs ABrVa$HM!nWV-Xr-Y01Hn%' );
define( 'SECURE_AUTH_SALT', 'As.dsGG>dU]#|7T~8AKmKu886NbaOBwHm) #irskzCHhj9R)=)Pk,HTu`n%k$5cn' );
define( 'LOGGED_IN_SALT',   'gM3d1 ]Iy UYEv]&IN0HRfjL?3@S)O9Uckir$E{(ln(;s+Xr>+d8%~s4?8;K`<Sr' );
define( 'NONCE_SALT',       'c7!O:JuEIs- Q^~h8w%bcult[ue[/7b!AHUm:Czq6-U|lqm#^C].[Q{=8oVSt@uN' );

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
