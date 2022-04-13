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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cafecoffeeMTL' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'YJ|{Qx9cZ!7>]v[{Y5(;G9@^8G>g4#c)Yn0&is6kum4p r4SVXH)<GUKtM6[8$}2' );
define( 'SECURE_AUTH_KEY',  'A/LjO=Rxb0i)dwR,h!O&R;]ZhaH%sLq kN_GUb:laSd!uvA7G(|cI!NGo1Xl>{Q=' );
define( 'LOGGED_IN_KEY',    'SLMD}&|IowJk48:C*Mq%41:q8)ud%OnJ(za1I+Zzi `[2?=y=m4u.ao3vDfw_@.#' );
define( 'NONCE_KEY',        '<`m`=}?9Ja~kA&=A6Z1u;wgp~]7Zi6W|3L^^qF8mE_2[D<[deNxaj`CwIP#4D.85' );
define( 'AUTH_SALT',        '17vB]7-5#3&KXA{k=L<REX8uPsW !/-X5%@|.78R23+r/KQ3LUZki4U:|TU,wF|T' );
define( 'SECURE_AUTH_SALT', 'V7M$+Bic9Oo:wY Jd/QlkP9.nsr+5Mx(6/J0ok=v~)Y+ai1uC;3|SUu8|AsQY1,6' );
define( 'LOGGED_IN_SALT',   '_%<9/*^~.$hGgs$u3Ezoh8=A=Q()@>lVmF=Q.C9<B_#77Fd]1-/KtPW1G^Tj%GI_' );
define( 'NONCE_SALT',       'c2.KgfwlEQ%(yiCKatVwOVV4 eu`u}jdI06r1?eO.D1`EcGCkQu~nPmyn>JZ#HoA' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
