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
if(file_exists(dirname(__FILE__) . '/local.php')) {
	// Local database settings
define('DB_NAME', 'wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');
} else {
	// Live database settings
define('DB_NAME', 'mellisa6_universitydata');
define('DB_USER', 'mellisa6_wp1290');
define('DB_PASSWORD', 'Shadow009087');
define('DB_HOST', 'localhost');
}



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
define('AUTH_KEY',         '|I@]}?7Bwv+>EOwrPh-Z&)c,x#r@:z]CnCdIej}T21Z>n4{`pm#k6rD  r42FE[(');
define('SECURE_AUTH_KEY',  'MfTZY{mt@u0u*zuY>SOF ^M5]=n~6>Q[K@s&VIjHOB{i2[T-b^S0]4JC8GF|bPa<');
define('LOGGED_IN_KEY',    '{01^jnCu+h,*zmiimy]>/Y=vx}h^hWo,Uw-ALcW~2p1pHr;A[$T.b67q`mjUnIB9');
define('NONCE_KEY',        'Gv^E266]`jWhC0[Zz79FUOo)!ZMI1<#r@%}b:!bW@x(+B/cUbbvER6u#j-jH[H6i');
define('AUTH_SALT',        'Mz@e@A^m|v&Hb>#uU-meE0WQ>mfBnO$e<P=[!|jK6w1xKmly!8IKMkr%be]dR6[/');
define('SECURE_AUTH_SALT', 'G~I >en2][*s8MUQ{R]yM*a,Sw{RD*07f_M;<m4;=KE*xwqt0UfKGx|%l|gOX04+');
define('LOGGED_IN_SALT',   'AXO1IDc0MYndq/k5^NT_B3jNQ4c~>rJ)NxvjU!s3{x0hogNRz% ;:5bpH!MT)VKU');
define('NONCE_SALT',       'Y2Nj+OMY6`K${g=EaO<x.F~2=b^]mN~q#XCoyHxAxaCN_G;5lGhcDwdY;*4p37t)');

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
