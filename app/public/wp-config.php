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
define('AUTH_KEY',         'ryZ9YzwtJ874+tlqaJp6SHITnDjD9yRBKQLmKh+qJvcX6x29gOdroKEcJPYSuCt0Q6W8h734qQxksLJqn7Co6A==');
define('SECURE_AUTH_KEY',  'jzTdczfX+lTiFNJJdv8P0UIKkEu+9Y+5XpHSf61saEUH8M3/CfQK2f9+bWkrrUPUA53WUxXLc95Dv/rPemHhDQ==');
define('LOGGED_IN_KEY',    'NLUmJxN4dKD75eUzHhxHDeY2REnAzIFceHUc+rIrtgI1uzcBCLdymCJhcUMJdp2+YdO7THhZ21W+Cy3OL3Ugrg==');
define('NONCE_KEY',        '/QpaLXg0GdaG+9xySCscLKnGvwW9aq/UJGkr+3V1+UXUlc/pZ/ldie9OSXDwOyKofZ7S3KhUokCFx3fiiW6Hew==');
define('AUTH_SALT',        'IlS9QNeUIwsn/yP39gYQgTlvP5yo6vNTJ6S74YYUiUM/wznmUh4RHO6J183qjQYE9R8MJQM8FsVo9y7Y+wqPUw==');
define('SECURE_AUTH_SALT', '4Y05f8QcEKPfx6Nc+BLLGQbRa8qxzfGakksVpCPaHDwtJN9OPIj6vs8rGAfJJwFnrfHpRfL2IpA7WKqTG0d1Fw==');
define('LOGGED_IN_SALT',   'BgJu1ucLat6vLBE+FRCiGwV98r3OdXqJdlAFuDzlE/5v3RLbrnw/jJkt4xke5DKQDUrp4rkq5+7IGn5kT+jf8w==');
define('NONCE_SALT',       '3GzIr4CBd+WnjPWDcmswSgs2140QBLDwkL69UJ3Gtt4cZ2KyP7fqoj90D5IxXTTEGXPNIGds5sNfTc6N7n3Fgw==');

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
