<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'S$M3&)mG*U|?hi%st~sMri4tDZwbF^gUypV$ULtlP TGR=->_&NvvXu? bG}T]Fg');
define('SECURE_AUTH_KEY',  'fWV6p]^>EKuNDgAcj}3&BFUG9Qf#y:M@S 4Gl)i#GuzxN2;2 .H.Hg~9#[qgf/ &');
define('LOGGED_IN_KEY',    '@r--0l(LdD0t%+HO}l4n9{yWs.RYk&h[+,3=&d+U=[X@z72Jm|-3HkHbUsVJres6');
define('NONCE_KEY',        '#&>>fC-q3[@Xe<R2lP[DH|@{8F{`T6@Ym#PFCRb_m#DcD)m|G/H+) N+1 8VB.^h');
define('AUTH_SALT',        'eukX +MMWO9-gfvY%K*gA|C9]9!2l4l{~Teq|][?<Vc-d--Ymh3`{Y:7X=hd/oYS');
define('SECURE_AUTH_SALT', 'G.$y}1@6~;|Y+Osai6qF$m=1{2U@`06?q6 oZ]:M%1g-,k5F9,Fm.+Xon>CSW.37');
define('LOGGED_IN_SALT',   'SMD*>3Q&}(($IhB XDLSD/4x8;nlVRYyt67?8E|iO@Xx}!K4R-4?GEU4U>tXYe|#');
define('NONCE_SALT',       '^p<0L9Z13nU0Y,ClMISk$<`r>Rc{WF$zF60C_8D=Vvw?mQ#Nz$L-f4O;{dAo*l|i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
