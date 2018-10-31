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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LnnD0aSvLl1kqV5pNCdqCiXZpzibHOoyhLIHV67QIJw+4u2oaI7fpczS2HGslji6YSKsHBZOoBnTUjmo75S6sw==');
define('SECURE_AUTH_KEY',  'CII/XUFjxZjYvq8yApro8rwtxmfZjQ+8+UhK9GUw7T/eSbLMB0ZX8e4Z9BwiqagAhQYHOClfUYX/97I9E5Bn9Q==');
define('LOGGED_IN_KEY',    'GGiNCtuw4qdf5bm2RKf9r9LV+cW3QaDpWT99j9+TRrOo/BT8Y8yWoeBorgPcHjmY2Ev7rbbEIWX7bc2d5yCslA==');
define('NONCE_KEY',        '4gKJrlGQfQwuSruWrLteXkD6N5bVvj+g0KY6ho1TEF8INlULcDmFG9f0gtgo4iVT4e97iwU1691QwMeim5WMgQ==');
define('AUTH_SALT',        'VmeYTYJo9gc5PhOSJbBIo5AV56i2AIe5o33n/mkuMzGs3/pBy/8k24jYQllBPf21tgnKuYwz3OAQMZefoLfQsg==');
define('SECURE_AUTH_SALT', '/sgOj9VYvziyuzZJ7UlpRK0cSpIBK/lDLNXjOOOR9BCom3hdwb/RiE5fFJWhjf+eizr28BRqEIrFFuCGBMdVXg==');
define('LOGGED_IN_SALT',   'tdcRWIEJyXQ5nUhC7WSglqFnWcXWZLA1NXi8MJEz3cpsX3MbAO2f74Ti3fB06eVOHIkt1nAtRKZ85OryBeSd3Q==');
define('NONCE_SALT',       'HRIkzFAlnT2TY9KavlSSw1icmbWqdXlqA9vaGsvJCbAN1AmlsZZ5SjFYaEE5dEyTQ+HQyX9gt1B44Ly7cvD0ZA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
