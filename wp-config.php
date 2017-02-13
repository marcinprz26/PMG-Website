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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\PMGwebsite\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'pmg');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '[3 @AvxV4kQ~.g=OFZ^p,;?n~00D`GaLABlM&j]o}CR8qlCFU;ok^[)r<$dPUt.!');
define('SECURE_AUTH_KEY',  'ie1= K2_$Zn,;>#y>}5~g$*Mw*/yT$:-`)(9aPP87_EnG#u5s[k>1,OJ`><q|{Hq');
define('LOGGED_IN_KEY',    '<+m?l![d9e.7w%2WOx;qV#vQUSV^f3EFYAogIna#@[bwll&.l}M{yZ99hJY/~b_[');
define('NONCE_KEY',        '@m$!`8Qt?9I@/leF{}& ?W#|sMJGq`tkf5~8x[$p?_]E@pf:x|Z}:4sGa~!v{zUl');
define('AUTH_SALT',        '6ET_{[itOhUq]7iUyV/biz<hMDi8-qm2[KbNaAi(9VU3;toiu`;r)<10]z~i@ZH3');
define('SECURE_AUTH_SALT', '<v>}-cJ,I0gTuc6yGoD,n<K|SmYbve_)bHOkPb MECfp5>8,1~FEk,j-W$@BsJ/G');
define('LOGGED_IN_SALT',   '7IRFSIOIpx~IF8?U[NDX:|:zx(Dl]4}Q8Dqla,*H*QaTgP0|Voir0ectw117OEv!');
define('NONCE_SALT',       'V-BUC-1AK~#1U%+ o{[q*M|5B6jVNNdu=nkw#D)# XE!tGlb![c*Sgv(Ph@NZ##Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
