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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\Katarzyna\Local Sites\wordville\app\public\wp-content\plugins\wp-super-cache/' );
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
define('AUTH_KEY',         'uxsxiNkDwinEs/jyPyTVtj7Yc5wW9Xqtvj30meaYpIQlMxXxdDEGsv8dRuSBuWZyRdYgkyPtG1Kx/QH3iDQP+w==');
define('SECURE_AUTH_KEY',  'rOu88qYnwZHN2QwP02ZADoCLM0hkb1kRQCozYC+xB1LK2C9Y3i18LliAgyG3xgt6bRVZmAGZJIKYmi28oy6ZPA==');
define('LOGGED_IN_KEY',    'LDWZYFriIPFXWN4KMjlhr40xUt4RFwBnkwsQynssDd+GQ12LSp4lVVv1QDehNT3yfiFoNijE2QxbtyjnzPmZew==');
define('NONCE_KEY',        'OjAhV+qFnq8oeIACCRL1vThumIgzhArnRK6ix02AJKwEK/6fV9DODQvBG8hhug/wgg3FwVAGmZ6060FFBTmGOQ==');
define('AUTH_SALT',        'br/kP/yMDCuGcomktUYmh242i7lemsOIjxoX37hl0me/K3jPZW38Qo+84MDq1Y1vKznPzSs92hK7km4kH+wAVg==');
define('SECURE_AUTH_SALT', 'ZvBFFwHanMJVE2e/o8gOxO9kMc+tHOCsS6HBebUXoumUlKgYqXxH7aFxw9svPFk6X2ZfPViqI3/Z4g1gf7T5Yw==');
define('LOGGED_IN_SALT',   'K+TprGtVBAbNgEkmXIKFpqWf/UXzP5ltKRrVWfnuJopckKfRijYQrDcHXNBFgp6sQL3oogTymoY9HWQU02FO4Q==');
define('NONCE_SALT',       'FGqqHO7YSwSAsTc7cbwTdrP3VFJ5o/j2oQZO/Cb+cSemnfUakuWGj8v0tF+w7e7J0owiVFetuFray//uHGfeyA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
