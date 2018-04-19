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
define('AUTH_KEY',         'kazbittoq54cq3cpvotc7zffdacuzrrqcxlkufssw36xchsldnqweqt3dd2o7czi');
define('SECURE_AUTH_KEY',  '49vc7imppn4zfd9wtci5gpqfjc8llvg8hpi3j4t5z2t1vpzil4n4zwcbqjoiz8p8');
define('LOGGED_IN_KEY',    'enbj6ej50l5ehhlowgjebz8t9b3ynnkrkyp8vhwaadso2ar6gghifwxfcuurzkao');
define('NONCE_KEY',        '5f1rkvandtaf4qigrre3dy2butllnzd4wckfm5567wxnyleloee3srlg2yejrjzw');
define('AUTH_SALT',        'rpj53xyimnpqrtvopqljs794ampyd4p6ljh4jmei4qh0i91grzecz7fozoy6ln1r');
define('SECURE_AUTH_SALT', 'rghm7kswwaylxxt1tpxmvj92cpm2ngbbxes9c10gtho9gth2mhv2bdcf2c8nzouj');
define('LOGGED_IN_SALT',   'g2xbvodqga2yzgiausd0a1paos2sntllocuspnlcj78bbn9obycqczdbwmzrv4tt');
define('NONCE_SALT',       '7yhkwrttfftc0jon8sym58i9behulfkehitk9pd0gmai5qrltyzyth8takpy6mdy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp6u_';

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
