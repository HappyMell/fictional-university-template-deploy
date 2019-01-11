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
define('DB_NAME', 'mellisam_universitydata');
define('DB_USER', 'mellisam_wp837');
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
define('AUTH_KEY',         'PjF|aX+&J5bUUo^5>EO}{}$im@$?3_R,,;tpV[@zyzHZgH/nxD G?RhXCzlNUw]%');
define('SECURE_AUTH_KEY',  '3uctLR?88D]r?_P5E^=n^w:l/J)Lpz=<3rDbWn`c.i#Dx|1ca  y>2^NpXQ<>CT@');
define('LOGGED_IN_KEY',    'X=*]nl6R$W[Dw#.B)nC4p`:D.*$u2 U`UJIBtHp3v6<np%n^7/%e-|Rjew(t>C6@');
define('NONCE_KEY',        'DOh~x[:>WU8?<qEuk<c^u-LspmIx~8Ue-j,^#1fK2Y[1?&w(.FBR[{_KQ5c7q4x)');
define('AUTH_SALT',        ' }x7+FfSP9B:h#!kGF=wTD|<]>#;|7|)@w*V(}:4>5y14|~m(c)FKLF?SL=6?>tL');
define('SECURE_AUTH_SALT', 'V;m^Dg0`X{[E%?H%5f#&Df-2$>,p+qh:k:P+G1(!nc-mQ<1UdREnj0+IR@xt+Ar[');
define('LOGGED_IN_SALT',   '=kjMG%oa2:;~@|h!^-ZB;.GBG`T#6MI>wQc|A$.qV}x;OJR|{=-J@$tm|Y_a*Opz');
define('NONCE_SALT',       '&_s*?3rOxxLV#UVI%(arl;Mh`.Ck4ur(/wyVN==hwe#=Q=@]oR,.]s,L13>D#(W3');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define( 'WP_DEBUG_DISPLAY', true );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
