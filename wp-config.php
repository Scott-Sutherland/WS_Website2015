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
define('DB_NAME', 'i1605819_wp1');

/** MySQL database username */
define('DB_USER', 'i1605819_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'X~ADKGmxYR&8x3p38X(15(.7');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Weiov6UWbMegkneM7Dm4wghG5QaXhTggKYwEcsvnuydvI4INzKPhuS4G0lswCt8C');
define('SECURE_AUTH_KEY',  'Qaj2f2hE6hZF37rqNiENnYmxzzgXy9zZivFXDizCBzx1I8FK9NcBtFz3WxjCK7ZK');
define('LOGGED_IN_KEY',    'sbMaWON2XeAStm7ehFyHasTG1WURTe9Am3w4Yi5SK88VriuNpgtDsmFayLeQnjcO');
define('NONCE_KEY',        'cJntCArxO3RpaDLoFdLtdyD38Dg31cc6HSbLbFntp1Mr0ZT0pDGvm8E1G4ezUc4I');
define('AUTH_SALT',        'frBeNQYg9UigJctxFlkhwZm9ekgIqTY5zoGJqcUIZ1K2lP0RdD2T6hV8MtLAHhng');
define('SECURE_AUTH_SALT', 'aJj7gFWufjPDVanIPtYVX7hjS3K0BzlPKZ7347hv4Kwwx3O7dRq1LBTmaGXgwKxi');
define('LOGGED_IN_SALT',   'KXRHI1D2CAgGz4S7AGQcjJqiPBvAAkGqCbxXjF0R9gKfbbNguD7x3Vd24MZwR7tZ');
define('NONCE_SALT',       'pIfX63kDTVGglz9LAtEV5EJWeFWjvGnQ8JsdNiorXjGhrxy6CGF1w4hBQ5rUD1WE');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);

/**
 * Multi-site
 *
 */
/*define('MULTISITE', false);
define('SUBDOMAIN_INSTALL', false);
$base = '/';
define('DOMAIN_CURRENT_SITE', 'www.we-shape.co.uk');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('WP_ALLOW_MULTISITE', true);*/


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
define('WP_DEBUG', true);
// define('MULTISITE', false);
// define('SUBDOMAIN_INSTALL', false);
// define('DOMAIN_CURRENT_SITE', 'www.we-shape.co.uk');
// define('PATH_CURRENT_SITE', '/');
// define('SITE_ID_CURRENT_SITE', 1);
// define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
