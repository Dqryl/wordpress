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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '[-SiH!M,3Gn4(!J4|Lq:5M[P.#Amt;1$f5_T7(NZ&?f##ME*Hxg+;,7.?3FphQMY' );
define( 'SECURE_AUTH_KEY',  'pw}cxQEd#L2mw[Phwe[RE44D@g^nK7!c/fOgU?Z@M1fmOTL&Utuw*4djRA-Gw%id' );
define( 'LOGGED_IN_KEY',    '/](2}mV}@ktrJxi91zz|~</kE,QdjzV|4DAzBs?/$@wj$4CbX#1%T@Bl4Ms2Tozo' );
define( 'NONCE_KEY',        'ayn.niSDch!Bv]E36$M8$`0=8ZEKw*#_f|g[><p`_M9rQF.! w[a`Ltd<k;C,_CA' );
define( 'AUTH_SALT',        '0tt{I2{N=W%/>3$u~(QI=E]ktyj!FrOc59d(adD9-R|1LRQq-k5fLu.D*bBK{qdZ' );
define( 'SECURE_AUTH_SALT', '@j7w^W>tT3C#2O:h?*Ugw[M}p3C0+bcs0><s#d luGRXM(s3n(+l2@6!,vleQ4?I' );
define( 'LOGGED_IN_SALT',   'epuO[pr3n}zb=JgRk+eQ3g&[_a*7e Y,!}%lL$iRRnUQw+qwCx,!5b<;UDXZVEBH' );
define( 'NONCE_SALT',       'w9.x.26K?6|Yiq1.5-ksLCQS4>`:mX-X3+u/=n/U9%18Z.Fixnk*(WB3)3m_yN6t' );

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
