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
define('DB_NAME', 'meaniyng_wp818');

/** MySQL database username */
define('DB_USER', 'meaniyng_wp818');

/** MySQL database password */
define('DB_PASSWORD', '3p9JTy[!0S');

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
define('AUTH_KEY',         'l0dkglunbxsslo0gbdeyyf74tfsb6a6rscsyaabgalrupvpv4q1jjhbrkcxw7fc6');
define('SECURE_AUTH_KEY',  'fxxzgp63sm8o2pa2mb9bovc3glrkzhudqk3aff2vuiays8zl8ij83o5uqfneohyz');
define('LOGGED_IN_KEY',    'ff1yafd9egvzj1iiutdbagbqaga4lexcpj6tduwxjxjsphowlvwqpwqg4sctrgtu');
define('NONCE_KEY',        'io1egtzelyths6aolntgptncshlxlwixipmtfrsglmu0p8tsckhbr6r2i0mzengx');
define('AUTH_SALT',        'e869c8fqgqbxsrmxikm7gskzfkn9uyb12zfdegjlw9agj0971utvjc6p41ve2hsk');
define('SECURE_AUTH_SALT', 'islbtvjhehg2unumdauup9qno4i9s4t26dboltqbus6nvu1s69uirkszjjglcpvq');
define('LOGGED_IN_SALT',   'imsnssxxyddum2o97mzntics9j7i1p9iggxhqugnqmrmaz2gndmw1o4fi5qlgru6');
define('NONCE_SALT',       'l446uarmp4vvwrhv9nswxjkixka46cfdy0ml3qlhzvhb9q2peetezqjuqcotiqei');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpfgkp_';

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
