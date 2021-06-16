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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/tendyxyz/public_html/wp/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'tendyxyz_wp616' );

/** MySQL database username */
define( 'DB_USER', 'tendyxyz_wp616' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p]S57[7t4y' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zdzid05srgi6u2k97ba7xcempfjetz87ch6y9cs2lfwelgvetfa6zofysjktji6n' );
define( 'SECURE_AUTH_KEY',  'bmtk1ocfwmiq4xjxcxfjcm2d0dlvafa5m2zh4xdplpwlarzlgmhce59e0kr6bvjr' );
define( 'LOGGED_IN_KEY',    'jvhrlzzst455ghbnwf3ntcoeim3f697xwt44ygvhg2dfqvtypbcdmcbqis5gajcz' );
define( 'NONCE_KEY',        'ymlmdhlio9cszqu5iptaiyb44ww7hpbq6s8jhrnfzkeltp4hdn4pgfpubyxbsbmk' );
define( 'AUTH_SALT',        'la3bupfer9altabx5q7ovjkz1ikjsmiwfpr2znh8jct74purn9sg7ov82apggab3' );
define( 'SECURE_AUTH_SALT', 'sfigofqf1n6z1eio1jmtuxuszcgb571kbhsmsedtwzb8wgbp3n0xr5xhrrxtdntj' );
define( 'LOGGED_IN_SALT',   'vfulxqqyowxs6g21sptzhyjkflhfpvj2dmlygwr24togbxrqnzaak5jagfbex6xr' );
define( 'NONCE_SALT',       'zayssycybfhls9ae6gfszeelhvssemjusfceshxnxxgddizd2rcrpvrwiqts8hzs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpac_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
