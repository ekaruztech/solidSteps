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
define('DB_NAME', 'solidsteps_web');

/** MySQL database username */
define('DB_USER', 'solidsteps_user');

/** MySQL database password */
define('DB_PASSWORD', 'solidsteps_pass');

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
define('AUTH_KEY',         '9aLz|OV08)ctPk[Bi7eEIvr,M+_.B`{e{P@RR#yh!DE/{|M?B?#}p]MCa*s436m,');
define('SECURE_AUTH_KEY',  'x-/3oYGYkvxj ZPwm0OkM;Gn_ko;ndX.andP,ac3ajNgQSz8/NYhFcQB@<T.9Ry3');
define('LOGGED_IN_KEY',    's=cPDymj1YMj$;U1LDJF-VgA`_FU`AH4>E4+8% L>G{<@;Zm8Ur+xUuG9}[{~)o<');
define('NONCE_KEY',        'n*/4XDq~#XD+IoxG$Ie-APgO.,vXI&<K(ik1zx)6Zb{fqg ?qrhrIu*f$1i_U!c=');
define('AUTH_SALT',        'fXGC.aaAlc0(k=sm!FbDPxvf]^(:YC,*?0F|LozK@u<0g6>[@I=&8AcEF9Dc{)&#');
define('SECURE_AUTH_SALT', 'q#skyT)MmrQ// V11v/7b4bXu)Q;8|;?rV4ut_vk>Fv/:hbn*m+Lk WauYK#D`! ');
define('LOGGED_IN_SALT',   '>&U<BvFfBG{g_& ?;wr)c0DK5 )ri:S#$)i:8GL0L?)7FRnp[%%?gf~R6qRVv~Rj');
define('NONCE_SALT',       '*gYIUK2F&H8.@M.&U*!{DU5?GgGe?T5SDcKFIc18TTPU6X?D{EEBRu#^}7;rK73L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'st_';

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
