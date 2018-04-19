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
define('DB_NAME', 'wpk1');

/** MySQL database username */
define('DB_USER', 'wpk1');

/** MySQL database password */
define('DB_PASSWORD', ']4URE77S!p');

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
define('AUTH_KEY',         '$b/O9kA_r;!fH==<7>whJp;93+?Zsg4m^-Ts=~=7W sOzuml-zZsi|=SD$zZX&D=');
define('SECURE_AUTH_KEY',  '@oHn^QH`03P@j/&r..OR#N3!qT-xPVWW!@b;*B}eR0W!tsZBz_)bDy5HvxH#P]7g');
define('LOGGED_IN_KEY',    '*aD{K^T>Rl,sE.u%Kjrw_0EeOx8Aas3srSN7]8=DB/fM|QBvfLoQ.<:U~*j~l(?J');
define('NONCE_KEY',        ':!bTR#oq/*][)(_u-}BI$peMHp:`=iyjhXl&?7k/c~}Hl325_/C!XJ%xJ}p.{Gi5');
define('AUTH_SALT',        'V @^%hA9lO}LUh+oT/2N7Abwl`F[H%ttf+iq3E&OY6Z]S,ChK#fvbqU&Ng!C3q8c');
define('SECURE_AUTH_SALT', 'mr;2J]:hOFcBl-_w^ lh}*G#09ga![N#[Grfr0CX.^!YPb} Y$5x3pX.*hPKSK&$');
define('LOGGED_IN_SALT',   'N01!dika:u48SoDPoG~[T,-(}2yrWA1X5jSO:a2< /hiJydZEb,7)_;mKcxPc`1p');
define('NONCE_SALT',       'EP I3Go7KwKCu!:B,+28{!;8>j59uY~OhRik!2;D>4Kt]P6et17Ha )Fw c|U>*m');

/**#@-*/

define( 'WP_MEMORY_LIMIT', '96M' );


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wph1_';

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
