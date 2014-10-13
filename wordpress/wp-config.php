<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E3Z/gzKei-%yx<xZ48T$(@^LC)_bJ 6Xw+zR/-I7-+2s*AE58J5F8_mVLT^@QS2@');
define('SECURE_AUTH_KEY',  'YY>&j!>2dytBOZ=*q3D1Ohz=4l2|=B+K]PvrSa}b^*ft8fNEb?9XScr>|8%f40^0');
define('LOGGED_IN_KEY',    '9xfC5&!e^~|*>m)Q6Ga-L=EO$;Pz6cjH$(S$x^XS4`+g^xN36qT@c^i4Jrv+EgSm');
define('NONCE_KEY',        'm/V#+yJ] (KJO[y+k7X,HhXV<D|`hX!Wkk]$B+hhN!daY0G(cwW53c,gE}U%Gl-M');
define('AUTH_SALT',        'w^)b X|veiuZEd6Ckwm3S!Y>)^-4NMpI]m9V2jSQmvdJ6N6qh[#j)&jGut{iAsxF');
define('SECURE_AUTH_SALT', 'yCVf-=[s4u_C`i~[FZ~DuY8wL31fASLbs$kdPo b}zMPY8EY:-u/H%zxH=Wip3XN');
define('LOGGED_IN_SALT',   ')y{+;3al>i,e-C/~k+rr{+aJ_WkNoq<K+_$?]}huCq.YP(Rvw}f?ym#u-{n=#bn7');
define('NONCE_SALT',       'M#<S<4maHb5raJb[,#x4G+}$;}@2eN,=iq*OVJCYTE96G4:F5{gD`[uar^B2;XP^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
