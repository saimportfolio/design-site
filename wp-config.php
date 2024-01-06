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
define( 'DB_NAME', 'designsite2' );

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
define( 'AUTH_KEY',         '(u=R:s(1NzZftBxNE/N8&eC)=3pi}4H7E-4<%F[Bw6gu*|Cvb.Xa&B8i* MzY<hY' );
define( 'SECURE_AUTH_KEY',  'cG~cb/$qgdwFhyAM0?GKoT2i}G::BSb*3RGw{%=#5>cS^o5nng{9O!n3{mP>vGXR' );
define( 'LOGGED_IN_KEY',    'rP#SuFWr3sOH>L]Dul-.RH:8(zye|0_6}~EOmZ?*dct21xEoOVRmo(f`[.^#!=1-' );
define( 'NONCE_KEY',        'VQ*qH9A3m?8>T)8 e-kOv|]|o6a*13~`PJ#&_wJHwsW@Y`iw 8dWdOzQs]o[nM(6' );
define( 'AUTH_SALT',        '(q`4TMf|IL^WyJ!V1%t(N E]_Fo(vG@9iS?Xfy-=y/sLc?G6)Ky_%f=cZ`yXvQ!S' );
define( 'SECURE_AUTH_SALT', '$9kE>lq)0c4leLLu]YEp}UjU}: 4kdVY(9KIVGS3lA7I^D).dD2.o&JC)Xf@J `Y' );
define( 'LOGGED_IN_SALT',   'qs`d(8y_JMQ%(y6C:x.x0;$;QUR$VV@|Nmz,K)VZ]V:pgHOX|S3<NW-{I#I!qQ)Q' );
define( 'NONCE_SALT',       'cGr}|JAqiyvu;j*IZa1NIn*w#$i:PwzPQ9_AJ6EQP0qBCg{Y[EY><^T-.!K`iMzV' );

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
