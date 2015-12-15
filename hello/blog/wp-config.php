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
define('DB_NAME', 'selena');

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
define('AUTH_KEY',         '8~m|H{Rqd|_3SK8FaFQU[*+0Jcw7{X=nl>RqofiZEZsxyf#>-}ZlGiRvEu~%}dFV');
define('SECURE_AUTH_KEY',  'qEURQk^;n(t+eJ7?$N|La?2t%:(Gs7^Y_a4>z2q3-i`W+q#Jw{}eNJSXg#E(54f?');
define('LOGGED_IN_KEY',    '%-+]kQUr~cL+pq#+0Xhec+oy-tS-*EE mQb-M75`KDXC4v-N9PqnI6w]oC/2(DBv');
define('NONCE_KEY',        '<rEBL!rqFriP4S]ApbW{PP?Agz+wyvGqj?_1*-05=l`|!7.0D[4*gxs|J<P.[TEn');
define('AUTH_SALT',        '#x~<*=/;`[_5Lt2.MMec;jzVY]Q@o=YdVv-;?`B^X{*P2V{f!FVdXcGX%ix~dNA?');
define('SECURE_AUTH_SALT', 'J2A0x?<kHf[dv}qUL!wZ@34Hd@CuWBNm:2-Swt!(OX39hilh/kdriE[cxJ8.4=dx');
define('LOGGED_IN_SALT',   'ag3Czkz(~FaKnT-0%+7)nk1Ml4SHN ?XXj]wktDxVr4|9Gl@O-y!`81h|L|$-K.s');
define('NONCE_SALT',       '(?q_ZEjR3{EYQx31?CKXJ-d3-.5 `&pGHAMo7|uOG8E:>{}o#NJb-xjsOGw68iUx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pj_';

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
