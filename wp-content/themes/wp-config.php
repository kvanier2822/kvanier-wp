<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kvanier_com_1');

/** MySQL database username */
define('DB_USER', 'kvaniercom1');

/** MySQL database password */
define('DB_PASSWORD', 'HKZ8n-pq');

/** MySQL hostname */
define('DB_HOST', 'mysql.kvanier.com');

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
define('AUTH_KEY',         'bUFEzFqS#?NK%yFne5WO)FoV6nh%n:&SjN)lS`uD;HT%$ct5o/9WWR5lT!2unQ~3');
define('SECURE_AUTH_KEY',  'v)MNjen"cE/&N:XDc?xxv25)!$sz#r%oPNZieHpWUF03A;0iZz|AIrNRmW`MN(N7');
define('LOGGED_IN_KEY',    'o|BYaX+x`aitwZJ2~FNM7!w)Spx1X~Z;c2r5e*8|00voe$j1c:GNxqth?wO?Ne5X');
define('NONCE_KEY',        '9^1n#;p/nz1g0$t8o0(9|u"bJ;huT&r)zyx4`HIBQs7n/)$1%T!jRPQ7Ii@vJgoB');
define('AUTH_SALT',        'i:c6?M@7c*sB~R_rxG~6Ih@L@pV0rw1jP%cC66f/sBXP##QQ#sqR#5?`9xOi?~;~');
define('SECURE_AUTH_SALT', ';EwI$NlV3Ak9T"rzwTQ^I1sr!Kj8Jc#R"^LI?Q`Li:(?i/b%|1s7VVZSmAK~j6+m');
define('LOGGED_IN_SALT',   '?^"4Cucje/Wql!f4+If^Y0fjdL&O9tzFyVL?Wkd@C%XE0sn3?(#mhe@z)8R7Ck;i');
define('NONCE_SALT',       'Jc0L11f$8SSzAKdw|:9%Rl"_bO&!rmiaK%Pr2)JXY9(ikqD7q;~Vp9:QP&xoB2)r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_vaag64_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

