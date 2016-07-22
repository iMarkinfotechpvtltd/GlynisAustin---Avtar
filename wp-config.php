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
define('DB_NAME', 'db638634869');

/** MySQL database username */  
define('DB_USER', 'dbo638634869');

/** MySQL database password */
define('DB_PASSWORD', '@dmin123#@');

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
define('AUTH_KEY',         '!v< m?oQKHg<jJ~nje[7<^,U)U?p>aomwI@*1q?{Q^tpAV]bD`HUSTU.A7{W#TDW');
define('SECURE_AUTH_KEY',  'o}N#wpq?]{8+ubH!(Y46NrC&2-Bz9i8,njLZLY+39<*Zdd>u^0^_rqW^Hz8U#dg+');
define('LOGGED_IN_KEY',    ',Rqf-:,%W3W ],+bH%7E3U01`dwsgsOK2jD!(DkBTjw0>|Wvm?2Q.@CE*(SvTPwh');
define('NONCE_KEY',        'P!vcW?$unY=n}zVAqgDh]RWV_k8ksv/^]4ED7@Xz*r/r-^T,8Tls(pjE.|p7@Zr.');
define('AUTH_SALT',        'fg:aSuV+V.4DXB-wOL@LIcIXQ*I<d[u0:a^}Pc45zV/$Y1l]h=FMMQ#PP8&e@N31');
define('SECURE_AUTH_SALT', 'ge}j6LD}<uf?</~~yhL7_r A|Wi8eu@xA2^i[lu[;Fee53alDp|x?z`mQjZq  e#');
define('LOGGED_IN_SALT',   'ERRz)yk}-$$0hNxzr;HN2p:yBfOk@fMwUub&! HkW9P_A6lp(O0EO&bNeNH@AJ$}');
define('NONCE_SALT',       '-gj+qWEzMjNwLRTMc[3as#T16h}JCj1<z$#ihmyR[BEMEwV^I.+uqz^PeYYn8q-~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'glynis_';

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
