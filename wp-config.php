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
define('DB_NAME', 'lntustud_inna');

/** MySQL database username */
define('DB_USER', 'lntustud_inna');

/** MySQL database password */
define('DB_PASSWORD', '123456789');

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
define('AUTH_KEY',         'OtgoH~MC`nw4.H)anT>4Rybjx|;I*)qZ8]f^N^R~LukY)T#5J&,M Z-F 2w7.Lj1');
define('SECURE_AUTH_KEY',  'Ri$k>DG||-^#V!RmnT.c4E,S5nC>?IG7WS;E~k|)GO8%_L(|70k0#E`MlYS_Brv}');
define('LOGGED_IN_KEY',    'Zf>mN4`FHoTfCA6]1}l,TBN)#EC>(-UXpMa`RVK}?)J)rj{(]VT?K|{w:vNZf#AF');
define('NONCE_KEY',        'b^)R~xyi9.2~m~<E)[7)/8`Rr#7Wq#9;S*aJotAQ}%+{-MsXqL |1A{pc;rb@[9W');
define('AUTH_SALT',        'u?/1Qyvo1$){et{U2@)<Vz{:Pb4c`Qd1*pO2K~AOGt^/5m$?:|%UTTK03aMilNE(');
define('SECURE_AUTH_SALT', '<}|8ix0?`x>{+T,8a-3,aed/~g=e+V*Mr#$& 7cn.>& |~Fq95!<U./2;x`p&|]v');
define('LOGGED_IN_SALT',   'MG(lG0=o)tT=YM@3@+rnJ,-k|.)/+bnqlnuJ4x3pTyVz*eGWRhI1E`}8<-1z!F)u');
define('NONCE_SALT',       'J[g81W^BDDzr +.}_<8cq4z:]!DfyKIlM[R@(Nub3m+tAH+n1pD,A-0N6J9-O<+O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mysql';

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
