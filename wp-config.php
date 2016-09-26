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
define('DB_NAME', 'borobudur_ultrathon');

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
define('AUTH_KEY',         '/v+wC-d8l6Gt6)_,9J.gr@>CDLxf-6~|+d&sU.q|42[S>r7OwaA&1a:D/FsJ[/>z');
define('SECURE_AUTH_KEY',  'zaf).2N{B)k_dR;GC%aw>2qI=(@vLnsC%7oBPG]jk&*8;HL&I!VQY}txBex{{U<%');
define('LOGGED_IN_KEY',    'TQD<Oih1>?,hWX:)<hhu|[%UD]B(Z<})O^dr.Vzj-,T1!]h99}f{bew[ L[x~g0>');
define('NONCE_KEY',        's+|x$ioCb{kN68|!Y5JMV=]3Su/ohz<<cd|esk~j^$;jzzW/|<ZqNazX%,?r!)Q=');
define('AUTH_SALT',        'E?Gi]u;>cpg>RLY` ^Y(uoXu@l>HX|3?r,Wkx7]{`7-b+DoPA&9XaM_w1w019WE6');
define('SECURE_AUTH_SALT', 'ueAVIeg>0APH)`y:!ezDHjJNCMa[fOz*;Jx{l+,7J1[gy2nH3pZ4f|p@Ojz+v*Ei');
define('LOGGED_IN_SALT',   ';QEAf6OM^,b.<%W1W%C`|,#pl.tSPbOTGEOaxQ~$<hHa6T5EfDLkUHd{1+gqY_jj');
define('NONCE_SALT',       '%Yofe.++?Kp#,[I)z  09>Fxbu}#owj-$7*JA7$YrUxv0a@jw)}6Nq6qr+8ytJ,V');

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
