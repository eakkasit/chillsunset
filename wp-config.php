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
define('DB_NAME', 'chillsunset');

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
define('AUTH_KEY',         'CTzPo~}D(,4Sz(R=!Dv/}RI~m@90._cZ 2&Fn#/cJ/Gp7j-ft+B/@/m<`iL}F0h)');
define('SECURE_AUTH_KEY',  'Db7Duc P.w83Gy4fg1<hZ?ow&eqBo~; VtRQoIZwQfi~y8bk}WvCJ^aALBE5nL)E');
define('LOGGED_IN_KEY',    '0[tlX=96Dc 907eMH]4(&z|rD$l.dzK3xL1jO0P-NPj*X-6W=m47m)[*J@qegbYG');
define('NONCE_KEY',        'K:(nC 1pn)*NP8n=L!&Kanqu!RTAQby:FhscVQ#E783JBtlz]l|?Gs~lrT*jup)E');
define('AUTH_SALT',        '<#:!WA.5N<C^S,y&]N1I%0i4XE70rFhi`X}K[&`CR^-F+4V<C3I8Ku-78Hn[;8JW');
define('SECURE_AUTH_SALT', '*2~QA|8Huy8Esl$N1n1fSb<lAicu(0M3-ZNgTXII#*$p^c1Fa- i]d-aUTSh.,Z.');
define('LOGGED_IN_SALT',   'B8CkM8`pm{#ttdVF@?!J46#6o8*ck<t>6@V0_j9H5OfJ!T[[EZaechou&6%WJwsb');
define('NONCE_SALT',       'ToF]  z4O^3i^m47</btf}(VeGQE>[z86e84vyJGT5OgNX5}P)w1J(84]Ol fNk(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'chs_';

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
