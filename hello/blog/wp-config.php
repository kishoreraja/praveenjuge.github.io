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
define('DB_NAME', 'emma');

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
define('AUTH_KEY',         'ZD!?i];:UOED-2VWTI^0*?mUJ7DP=T!dE@HA _fGPZ(7()vOkDI$-+J4u2nKYI#1');
define('SECURE_AUTH_KEY',  'S%>f5>^&cPSC<^g`kh;isfgsT09=/l2#87*%)t(_:5Qz C>/*l^gy_HR7#Qp!V52');
define('LOGGED_IN_KEY',    '6]ylQQsz]A~r:+L&C)ni_H#lqC|6zk|3xA1&rELI!qU8(Dd)!MupeU@uH+-:?&,|');
define('NONCE_KEY',        'v60 +HlMiyu%u:I2nJ@;-Oy-ow0+t9THyJ(3@,+3~i8Y/!.iY]gO}UQal9pE`+PG');
define('AUTH_SALT',        '=TT*-T+v3QnMG-GOtdLR#I.A40M@FsMZ&f&-)yM5vl)-Tsc^a^/~)$mYx^e1`[]&');
define('SECURE_AUTH_SALT', 'ZQBm&Yd$N9PIW2S`OPI~+mrq/R*+T5}f(F&O`l{K%RKyOg{nbh$^]~|*v+&j0Q8+');
define('LOGGED_IN_SALT',   ':B(<~AGR:=&|#?{2n5l:[4ipb/s<U?Lvc 0bz?gfsDyoY|duAmU/0K;QxA=zoc..');
define('NONCE_SALT',       'Ie^,D?0%{kIQL<0`7X=7]Jv5Rknyp9-pb2JE|#-Y8&1e 43<-V CF6`vz{qE^R||');

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
