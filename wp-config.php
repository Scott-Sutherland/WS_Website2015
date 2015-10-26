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
define('DB_NAME', 'i1605819_wp2');

/** MySQL database username */
define('DB_USER', 'i1605819_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'Y.P~n9SyO9mf*(B#lp#27@&5');

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
define('AUTH_KEY',         'SffRoMkDQDxYkFCVCCkbQrSto6DdJeoQoSWXLtVydAZmszEwfiV8UxAMQnozaUz6');
define('SECURE_AUTH_KEY',  'VBhsn6OHwuD2GRxV4I5K6DGto8fsBK34dtX0AnD7145EZyUIdIfcxbnJr8xugHhf');
define('LOGGED_IN_KEY',    'CxzjcIUdOm5RYLhErjHgFEHP127KJaoIfX3IFdLY21zPZbxvaFRoyJRVg7ndhHGy');
define('NONCE_KEY',        '3ZngRxtPLscqGZg4vwI7O7FTIz58Fz4J670LbHuM5ZrTo7L6nbW35PTosrdEDzV6');
define('AUTH_SALT',        '4tlJ0UUMZXI3NPXo4ovq2yOkzC4u26iZA6ZiZZM88xlMr7jaTOYk0zNU4YG8UaCx');
define('SECURE_AUTH_SALT', 'ZjEPA6qN1kqqKPRmcramC06Edp7NTaUVCKSUl9DvjE2VxLNO5B0y3u4RPUuOBywu');
define('LOGGED_IN_SALT',   'tG4g0KeDl2gN8j4X0JYcPPinSuaitLH7pEH40G27RYUU3a6napmezNwJrkEk6v5o');
define('NONCE_SALT',       'HvQdYP8H8dkSlXMugW565v8KqVWBp1zObBh6VNcX3CL3SOpcTPFqr570kjcuFzxK');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
