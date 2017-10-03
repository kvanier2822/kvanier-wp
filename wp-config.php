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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Px1)<`,xr,qq _opQ<tGJ(F.*O7ewd15^W@0oJ4$O+zEnVaz?^&s^;}iiA)GcDnA');
define('SECURE_AUTH_KEY',  '=fA(zV1m?c`}MHyTFute4(UZ}9JX+6$_P1?V)&<p)w_G9g,G+jyLa}-[z3}yQdf=');
define('LOGGED_IN_KEY',    'NKNSOz-Xk_`810+G5/+h~h[XIxev!oL|obR/N3OExI(>El<i{0@]RA(J0&>velIJ');
define('NONCE_KEY',        '_.yvkdu+]FJ`.fNF6J!|U-|+-a`K&npu=)#@We*mM/(fLNoXwx%hRk!67;*]? >l');
define('AUTH_SALT',        'r!~]&ei=[lNKSQ,SF]USKT|-^6@@ij^@<nY?bcS:gkNRU?2h>TUjWxtA=Kz82P|^');
define('SECURE_AUTH_SALT', '^RAh^HUhr6xdBpq#^wWo>Ng~ -B^cS<9O%M6?qn$?df,Ta/+}x&Ofe=xDD3$VEjO');
define('LOGGED_IN_SALT',   'x])e:48X&0zNM3TX|LChM+niV?ma[NTF^SxE,;3a/x5J)MEhoS~ !B^0XvJ|l9<k');
define('NONCE_SALT',       '?P. &bE0`Ca:,6H0=+x/[pye#dG!8|yqb{glm}^`Imv,Bey$=q7FmizZl4$z{SJq');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
