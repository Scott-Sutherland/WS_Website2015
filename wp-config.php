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
define('DB_NAME', 'wp_weshape-2015');

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
define('AUTH_KEY',         'k=^L:hZ+29+|Aa`XT$#t,hjU/]Q72(h>HZMv7:K6 BEcG)Sa1-RodJu^eCZXF6g[');
define('SECURE_AUTH_KEY',  'PulVht~tee*fPV8U`HylpeW9ivuI%}-)pqXl(UY2}r?kyglDQ-)5lGKeL3[<|LlE');
define('LOGGED_IN_KEY',    'CuU7>]6P!a#.__UQ$:[I@<:I(cAKng9D# LPp(lw)s:4gE~=|];(*cOU?|OdAiW]');
define('NONCE_KEY',        '=vY=zoaw>{m$Y#ZFj-cT]99,-fw1f@C-rx~z5tlQXOqSYa:(s]|R#x?|w+p}M Hs');
define('AUTH_SALT',        'T:nc[Fj5R7W9 joWY71]UTrZ7-Yn1xLW_?U0$DkPuh6FnOI:NF|<+Eu.nKjVTRy:');
define('SECURE_AUTH_SALT', '&8}s@E|5+5c60ZrmBgkh`W`HK5$QIU|f_p-w@WHp*|P|GEIZU9+E_c@.i)zUzh!D');
define('LOGGED_IN_SALT',   'Mi[dhB_(A,dsV+t++8hD/>QX9(x]tbTB+u$P/i0_:P>QE @6{GZiMvjJ^Xdv|=+/');
define('NONCE_SALT',       'EwcfF*78TeG>(G/HESp;TcdQeDxfs/;:1g_{km] WP]-MK`^pK+Bd]8UNWta_U;U');

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
