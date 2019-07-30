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
define( 'DB_NAME', 'clave_de_sol' );

/** MySQL database username */
define( 'DB_USER', 'Eric' );

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
define( 'AUTH_KEY',         '4t:$e7C<,L9Dq FoFd)tbu7wm+$RLC6^CI-ys(fZ7/TtOmo;*l$0%S^m oyBZ@~y' );
define( 'SECURE_AUTH_KEY',  'P}3_(|GaEW7%16qKGnwyCKD|C2VP|Y:cA6-(ifA#`CycPA~H@WRzXh{V=2+O%XHo' );
define( 'LOGGED_IN_KEY',    'XQ`,}KOm+Z(t=[@D?%HCS&cxKR8Uv_Mil5-f[<M-eLIZJv;Uc]n-pV=7~7= a1yJ' );
define( 'NONCE_KEY',        'hZXPvgLGW<4KJ:&)nd[zWNt3 GF|^LoaUX@)da(T>1 ynP#0HLK<*.id3M6*y0w7' );
define( 'AUTH_SALT',        '|+i!8b`MCS]4:4UqsHl:bY*1fM)+^a%IV9WrQ&T/y0nd.H-|Ev<vi[2NM4dTe!om' );
define( 'SECURE_AUTH_SALT', '&lLwsmnJlO Y[D,6+3QskpWhQnK0zreMxlvui+&=`l])$1c|V l^dkDCWUu[5x@}' );
define( 'LOGGED_IN_SALT',   ';r 1nTOH!TWcDqO0los$qkF${@,To4ugu([mU2,c@.|C)|$W+)>JAJlQ*+R|&qRO' );
define( 'NONCE_SALT',       'md^Lwt7o^];vRNzmtDp6pjzB3HH?&,P+c9Oq2vo5PrcRujrQXa3gw.4>E%Y;i$+B' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
