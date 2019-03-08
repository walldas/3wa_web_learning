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
define('AUTH_KEY',         '_nq7`,sv]?205 dbs@+Z9 <:)v+@jwC4wRy>UuZBEjb0b4res`Nu3!cLbC4hE/~*');
define('SECURE_AUTH_KEY',  '#a*;ax#3?Hc$PRI43hBp[|5V%heqHK wi-(B-C-;-kqH6v8&NwLoO=(+WPFoF&Dy');
define('LOGGED_IN_KEY',    '#np`z10nks~`j1W;{+~Il-?9*#dZ~U}U;~pj*XalO*lVR G/9na3-k`b`$tfTot}');
define('NONCE_KEY',        'Mjd0t>8z@Clq0Zt+4G<n|TOdC>;N6]&I{3jE3A^Hu$@~8_<,JxpkZ0N~saBVK|75');
define('AUTH_SALT',        '*a2Sm+ceq<*F./9DM=WP8 }.DF 2jmb:J>y$|M1>J4)oxy}f*3)N0/8~X88brSxm');
define('SECURE_AUTH_SALT', '[AN%0H&QvI?&@YmF$HCXKZ$GB/}TWh~cD/tdNxw_/Y9E(6RL/}]2$Y!nIXwT:g<0');
define('LOGGED_IN_SALT',   'fu(oWjU@cB,;1TtX{Skg?Q9NaaMu_3LX@J~^/bhKBAD!lJ.DeD$hFt  |+)5a$t ');
define('NONCE_SALT',       '{K0QI+T.;x>3mNc4)qt.F>!A>ni&G8!inet]o2/O0qzrgdfc!T3;91q@k~8=sBa+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sg_';

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
