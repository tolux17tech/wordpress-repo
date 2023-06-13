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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'stackadmin' );

/** Database password */
define( 'DB_PASSWORD', 'Waterjames21' );

/** Database hostname */
define( 'DB_HOST', 'wordpressdb.ckz5bm1yvaoc.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

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
define('AUTH_KEY',         '2)Dj4>7q/!sOO+sy1 Wh,%0<~ySv|gDBxIE@(R6l8dfgD#mGtqQxzPX>-Y(x>rME');
define('SECURE_AUTH_KEY',  'F8[XFb,V*SxRbc,?@!e+$diDr;Ee?4+|GLK8<+S5ctWv/W/1${eZ`kw~sr!;i~KT');
define('LOGGED_IN_KEY',    'i|>R@+-l1j*5K#AVZtxIoXit&QG2l[c2+FEOZu+_p(z+Y9W8yC-t([k]03wbiLdG');
define('NONCE_KEY',        'iykfSYF`9tM-4xVla|u<E?&`V:oSV GrtCRMS;^f_Ix&}a,Z7y+|F}8z=i>|tKql');
define('AUTH_SALT',        'Eq1ZIBz]=w}na`G MWv1jt}C-`+zMU-?BM3KoUvCY{O-4L5!.F B=;[RTensI%rW');
define('SECURE_AUTH_SALT', '$Z}eFSPK!pc8Q67QJk|AQ#y?fap3Mcq! 5>(~TGQL}~S=?$N? }k&~raT);~#1bd');
define('LOGGED_IN_SALT',   'f?QNHv#&;;eWq(ec5euB--z>%$? =(29HO*i<1A{{qTBjCVa[O5v0-,Tz?uCwCJ|');
define('NONCE_SALT',       'B+B62LRB{)j=^0-mE5=9W!#sk>Ej<,e>zkVou7.Gf+#VWq4~29W:oF>KV^MILzI9');
