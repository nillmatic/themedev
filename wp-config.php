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
define('DB_NAME', 'themedev');

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
define('AUTH_KEY',         'k7L5CuLrHW(tIJk=d16x&mXiCr!To)nfV$${yODK L5g2ryrxQ?~=&2 `xF`R&O2');
define('SECURE_AUTH_KEY',  'HxKba~t,;>mkW,V6~PDlyhE<fUAdzIDQ/g9iffV9e{&Z[hz-#atgCh]@+HB0}wo$');
define('LOGGED_IN_KEY',    'eX)oN24p~E}z`%82Zb0asan$G1J!JrT0Yu1qr#)SKXJ.;TBNbX}Ghh(H0`eS?@F1');
define('NONCE_KEY',        'k9OVp%V=u?Ljq&~hCun5~3OU=<34ob&>9c8G<]$AbB4R63I+Zzt,xORRDQ[Vj`9Q');
define('AUTH_SALT',        '9w)b$BlZ`L=gHNJ2Z]!PX$)rP-}_L{1e6aJbh/4^P*d4c`:;7t8!Pge5x>Z/D/T0');
define('SECURE_AUTH_SALT', 'e4hp[65}UF)7b,/-={zZp:Z-x>c+p#VXjk.T*;D;.0t{]0Ryct!k@^MN4N*dbF)@');
define('LOGGED_IN_SALT',   'zFN5l`aIZCa>]9)wk(;Q`%VA>fk8%)jR%yPTE%Z]x7k4>-t0ahCp/.W~_/3CH&ys');
define('NONCE_SALT',       'O+7|I1AWvCnst(5Nm0jbqg/ap4$^[<TRZMrNgpT;FW%Yc@nkdi2&MDmW$_ %vC2h');

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
