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
define( 'DB_NAME', 'alqasem' );

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
define( 'AUTH_KEY',         '@^.#O{V|-?`44SaQ@x3agU_L9ARhkOr&`fV|<4?Rf3E6 [MzO=9*;_/HM*eVS>!k' );
define( 'SECURE_AUTH_KEY',  '.T5hc^et_R1XD]Z{A*`>SBjxL}p WrQAYYKvJ.q`P0~QNiP,,tD},).N6{m=ygR9' );
define( 'LOGGED_IN_KEY',    '@.q3}F[)WpA XcbMXl29AC&z!duG<7 }QjZ!r_0Nx9wCHkcy?>i[7I,b|97hM=@|' );
define( 'NONCE_KEY',        'a 2>6ft1$|tIP3#Po7up=v!V#x~RI<FmNvponaiSCEnEUTL4`~(KC`64fW}x$izV' );
define( 'AUTH_SALT',        'KoenBSdp8h><~v#H6wOF1j`[UM235.7R?4Go]$Ud=z8[E?#+A)#Hdtv6WltH_fiZ' );
define( 'SECURE_AUTH_SALT', '%1p)-bDHr`Lf N9Dx9|-b%N1ZtLRC_6Hfal7OUV?f5Hlk;!GQbC?(k#{uudUJ4$.' );
define( 'LOGGED_IN_SALT',   'xcK$but6!T=6<;f0icap^AIIW#fHtp4.h]uw=~a({GLIF$>JY!@/_zc`gbOMR~nC' );
define( 'NONCE_SALT',       'vmri}R4l(%}No!aqVzTJJ,=z/TuzXUU%35<tR+5FQa~=t%plHH0BXzl~HgQsmDBz' );

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
