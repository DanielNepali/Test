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
define('DB_NAME', 'testweb_db');

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
define('AUTH_KEY',         'Zv<A:nHa[>7 Uk|fNX,KV$?~w~M9:i7_%]icM]bZ0A;-%G*o5[[;_m/tM3-XT!-;');
define('SECURE_AUTH_KEY',  'OJ<A~6J2&DX8B=2!)_!@]RI&>Z|QH@X6~S[RJ[rR*Aw%9CC9n*g9`* .N>@WI`qB');
define('LOGGED_IN_KEY',    'M@Bx[i|;C)]+N.e!/Y8|DXi0rpEg1T.tu`wbs^TvMdk{oTaNG/$;J+p,~j-2L#H~');
define('NONCE_KEY',        'gOpzR@NJyNJKM,{v|;$c5`#So$fuxwk6Q/Pfp(Jl/F}R]c.C[p(^$8=d^L!}Q ql');
define('AUTH_SALT',        '!Uqz/wuBjB2Yzi]itU@6zb`un-RP>X`I[d5;OB1!;d]%*egP?N}L<mMNd;`5@]E}');
define('SECURE_AUTH_SALT', 'I3U1X<!||s_.pK(Yk9Ub@afmARCuvdMhDoj,oivSH&k@^fJsiWh-(!7-6CX!12)a');
define('LOGGED_IN_SALT',   '9}>tUqFWW*{1WHZm ,n?i$B1uk[1~C=.v~/fVM^(P|b/bcl.:S-J05`ew:JjKAkQ');
define('NONCE_SALT',       '7UVI]I+ u~!?Fbuh@56>3GQYPr)j-;+ONYnxSL!sjtoEJ6cxxDGrc5A)7{xFu.qt');

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
