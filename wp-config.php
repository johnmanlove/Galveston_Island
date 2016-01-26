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
define('DB_NAME', 'galvestonisland');

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
define('AUTH_KEY',         '|9 O9+NgllGc/|pHI]byR&JH_7$pM;1<yV+aV0A:JGp}nKAM<@7$(XHL~p_[w`6n');
define('SECURE_AUTH_KEY',  '*pOF3(H8hy=%a8kK)7.Qyyn,5%P=-1^pO!&pyV(4X3sfXui|8nlx4j4mLi*8rkE!');
define('LOGGED_IN_KEY',    'Br>9$Do3oKc{m-y8i(Mdwc+.XT>_T+f.w|HfW<4E)rv-)Bf7R9ID.oY?I~mv-t~|');
define('NONCE_KEY',        '*Bq7Y-x-cDnm22q-;4i^.$p5w_x+fbskO+6EPQeq[}Yp|0zROw/t|gTH^<R)kIuB');
define('AUTH_SALT',        'QWA(j7Dx|S++2uY|~d|zx9D|K_gW|R92tm2~(j8ME[HZ0h#C+R+uk?Owv4s:2!T8');
define('SECURE_AUTH_SALT', '$m4tx=k?_lgc<2MkYKSKG~#6$ve`]IKg;Z|t6(aWr;r|XlflkeOlxDu]<Dp:&}/~');
define('LOGGED_IN_SALT',   ',|VcXVRZk 6R-nt1smj3=+-e$@=i|q-$|O12~0p6<@)ZSZMo[EWeQ$KVpNCN&2b3');
define('NONCE_SALT',       'g+0)>*D7>28sH~%,sZzwD8I[Xn)N-Q-:O~=/3Iu#AM$nTc=8*A{/&&Th#uKi&Pgr');

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
