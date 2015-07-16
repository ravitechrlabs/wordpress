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
define('DB_NAME', 'fixr');

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
define('AUTH_KEY',         'S-G|u.]y:Tg9?C+VR/]s}ma`exa.Jq U@@mG[T>+LrHJWCd3s;tYZ<&8Q;kY-Bd3');
define('SECURE_AUTH_KEY',  'G3s:=]1gVOGu:S#{>1AaIl$Kb)kWa!S&+o0&V  5|/mI56;r|b<{VrWuo3)o9vBO');
define('LOGGED_IN_KEY',    'W+F>ov=Xdz7%5lnIqGlAyo7|bPAh80 p@%+D!K0ZV{agWEP}:7^+eK^?Un~4ch5&');
define('NONCE_KEY',        '3y?&G-Q)|][V%D.$GIZpSjkHP7pqwxmma,^Re`N47><2=/ lRMXD$%$dbX-QYbi!');
define('AUTH_SALT',        '*>.$2HY2IwR+n%AXnF1>2n5B9l|He@G*Pj6S[=;K#>IU#c+bzTsqHf+9pb/T0rZ%');
define('SECURE_AUTH_SALT', 'o9_]~P^idcH-6~,U_D$(`o%1ShQ,dyT /P4?}|5ZzpZPu2s`Di-$eId1vfr6 $?;');
define('LOGGED_IN_SALT',   '(.<c,}S96k|4|)a}W2CvScYr9-k&o*qOVv?Q8qM[[7nX-Q,p<;=/0xm=nsd9=9jo');
define('NONCE_SALT',       'vA_to)_7*_Iq^Tr~YV(m(+g`~uNenhqkdAP>ev/p5Af0`N, i;FOAt.,i0gB71=s');

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
