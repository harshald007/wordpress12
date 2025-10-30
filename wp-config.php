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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'pJQ&?yS_e=K=m0LtfrLzj}Pad&Mh#`8S~=#QeXL@;(Drc_;KTfOt<X&L]-gtC#5O' );
define( 'SECURE_AUTH_KEY',  '{&BLaReA-^(r[nkBVK;(yA:zAOkJd${ix0+cQ%*.r&z^DfC+FF[f_.sNXpDrcIt>' );
define( 'LOGGED_IN_KEY',    '0Wh/Dr?i]NCy+ed]yPx}0^$y&)N2ys-X=lAB7P Vl!Y@RB^>o.-=cP%aBQ}KN<2t' );
define( 'NONCE_KEY',        'PwE0NW!;(`QU(2#!WKI9+a2Vsq<NIuBrW,o:C:.Y2ur(;;aLN#N ka ba[t;m1%%' );
define( 'AUTH_SALT',        'y*)`#fJAzRX>1@ygMQx:l!COFpw(U!~c-GA-#p9unX VQ3jcGEvKZ<9/j<kh|;2~' );
define( 'SECURE_AUTH_SALT', '/dsVS;=2 h*9UmKbeuyCEyW`qrPKDkFjrW7TImd0B-ehH=g[1!%8xbky),(_+0VV' );
define( 'LOGGED_IN_SALT',   'TYfOW+>Hd;!yc4mCs`UyVD1*oJK#QZ-~E&)cO:,ReSeEDHzy9VnE& [`1/fRn^6x' );
define( 'NONCE_SALT',       'ki6o]iRfGG+{;1*;LTLWxp3.;;:Kvavh&rB>!@$6MTWm*/+( [:PG@%|.pWR?;~}' );

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
