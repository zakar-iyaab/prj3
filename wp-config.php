<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projectbd' );

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
define( 'AUTH_KEY',         'X<Yv3`O}n)ez?a|[&1ypfzExdl1@cXd7cZqUjfhOr$-Ue`F`l&ktjTj|ORG-$XdO' );
define( 'SECURE_AUTH_KEY',  'F)Al8,$gmNTtVorAg9|TQy,p4(azu2`I[!JUX<%62Na(j*`|Z5[,kZz=`_p=QErA' );
define( 'LOGGED_IN_KEY',    'GU@.Hn;Pep#KvElDL4R8)?o`|(Iju=`yoa3[7!Ql&<.xQs$afCK}HfyPbKHJh,s ' );
define( 'NONCE_KEY',        '#*ov{&V=Kwm@%<s0]]i42[kb;e+mPaq<?>or.5h^?/RMjGi1TC4[LADt<TL-X:m#' );
define( 'AUTH_SALT',        'qUY(ld;1Fpg_<x$.l66`4`$|F7X1_@u}t~~+6e`|anX_@26raF6mG!%Y$<_y+Kr#' );
define( 'SECURE_AUTH_SALT', 'S6V*` |uK(Wyi8c~~]]6.#`Zq{M@5b65S@l5$kE.@Im+st~MzmIVJ^w,KH.B2m-~' );
define( 'LOGGED_IN_SALT',   ':,EslC5*!4eO}s=6e+M=}7Z2-3qUOXS$jM`!kr:~]vhz#@&KdM}KiU~[P%cy46jT' );
define( 'NONCE_SALT',       'G8ar@1qt5M`S>|zf5 tedDlvP/5Fuy4j_$^]4&@= &Lejsr+-UgRP-S }A7xrR!E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
