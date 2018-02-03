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
// Remove the need for ftp each time update
define('FS_METHOD','direct');

//Ensure all links point to localhost
//

define('WP_HOME','http://localhost/designloves');
define('WP_SITEURL','http://localhost/designloves');
//
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'c18071_wp942');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'JrpUjMRP2I');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
// In case of memory issues
//define( 'WP_MEMORY_LIMIT', '256M' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uuzn0oo4os3ppamv8aycxuzsxzczns8v8uvl1psbjl6rzftr8969o714med2nrnx');
define('SECURE_AUTH_KEY',  '9h19wxxtklbwomkxfczjczsmd4m3p0aazmpoav2stdhdmcl0gmkkmyuqwonvkkrw');
define('LOGGED_IN_KEY',    'imwffh5czkytzxomumdvummzyd0nyhlftmbzgnd2stq5flvitesp2eg4zslgsmce');
define('NONCE_KEY',        'xqgnmnbnjd7cxv6znqxviyopyteqi6kffr94oyu9cjyjekf14qrgwybk7gy6ojeb');
define('AUTH_SALT',        'uri91tlyhxquj8ykvwtuhp4gfcnaph4obg71fthkz2qzfbwbf8fe8j8togonacfv');
define('SECURE_AUTH_SALT', 'xfhs2mfdndfiqczl2mmqdmvxsao7nphftiyjt60k0i0ovjnigjdhjtnfafssv4aj');
define('LOGGED_IN_SALT',   'jqovydvqh0ewz63bpqzn7saghk3uzgsb0nncbtmnnni6fnsvexz4dklchhofu2g1');
define('NONCE_SALT',       'kv4lyvx1lhjw7b78dg67j98dbtgo3g6f6yffe9nt1obr78qxkdpdcqnub7pdehhl');

/**#@-*/
//

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
