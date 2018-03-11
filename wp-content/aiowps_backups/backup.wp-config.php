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
define('DB_NAME', 'tOCjng');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'EykWawp7');

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
define('AUTH_KEY',         'Xo7_4#;?`L4[zcA#|8_-f Kg,HB@s/L! }6TR{Pw5-}&oZTX%LG]W6+*^FaxxnA&');
define('SECURE_AUTH_KEY',  'Q6CgV&g*Y*q$[{dO%Gcz`Lq;.;11Je0yt<C4/E&2ujQ?bY5BGmzOb`^9e}!=o?4$');
define('LOGGED_IN_KEY',    'L5y=fYD|;UTYH /8 5UtMgmZ&(hQ5X|k(5KK$hS67o8%Er{<yMT!UVQy:>e!d[|C');
define('NONCE_KEY',        'Ydrj#(WB?E)c<|rC7)m4tFm?&*-8.6QK6Xq0nF$bWK,-l3z0`s(T:9ydFvT8bB&=');
define('AUTH_SALT',        '<]6&I2_Y:F-yAJ:ss*kvwB#%;Ow@4{.-8S|/-BZQze&`|qbw*ESB6SX5XLHBDXxx');
define('SECURE_AUTH_SALT', '_*Ewfd$aFT:.@5(infK(XwKZ%hMCG;X~lLAwgHA/Z%6cH5?az#lOT)t_32Rm8KU+');
define('LOGGED_IN_SALT',   '^9&ic;f`UI&i~GwZ3|,Z(D0BYsszY=Nyt4:s{eaj{YGG6&`5Wu(Sbi7**>%_:i%*');
define('NONCE_SALT',       'Q3Wniw(.)ji& 1ky3ryLkt@y@IZH/2j@neq j2})wqRWZg*uD;~K&+<}uJT?L.#U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bgc_';

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
