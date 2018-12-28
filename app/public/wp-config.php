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
if (file_exists(dirname(__FILE__) . '/local.php')) {
	//local database settings;
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

} else {
	//live database settings;

define( 'DB_NAME', 'gracek28_codeuniversity' );
define( 'DB_USER', 'gracek28_code' );
define( 'DB_PASSWORD', 'WR.]}Pv38B},' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

}


/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O4EqgjYhBjKqyFrOqcpBWkZrW/3CyuwKHzIWmWO4SipNv/nilSy/6WztbExD+111Uqv7qLI6D5XgnsOKKrBkpQ==');
define('SECURE_AUTH_KEY',  'FyRma4ZHgSILiL/hynRwc1XEENNfJACAGl9Tuht1YxrTTZVVyk6ZYJnEejdyFlYwI1/7k4pC/u36EafwxglKvQ==');
define('LOGGED_IN_KEY',    'e5uGkJhHenK4HMQrJqsMHl9yGqiBLtrLCjk0k4m9olFC2tMHaCYGxPGNuPAHxKXSCVgvOlChHigVOWzIIoL9Fg==');
define('NONCE_KEY',        '4hjTbL3vdIycJEN0M5le6aPQ403bWpzAXtqPVtJfR1iHC8jL1vCAxnlrWGkJLnc6ffVR2Z5I8owyZxBbVwntrA==');
define('AUTH_SALT',        '3xQsQnegcIpbCKWAf0FuKwnrHXJNl+MdcajJDcKR/J5NeNRreq6llToxR2pTCto3v2f8pHmKk/T0rkpebVNpYw==');
define('SECURE_AUTH_SALT', 'gFYKFD59uUzJ3T0sKD2IpkyN8xMwKgo2JUIFze5181KlsPRBLLMvkL2fIjrAzSW3D0lcM+e6EKmYsUIjW7eAew==');
define('LOGGED_IN_SALT',   'qSnZX60wwQlrkCZkdBhSmor7QiLcabskDTownNcTVlMcDaCn63okE+moo/VKLHcGX17JTV1n+aMzIt8MqmOMrQ==');
define('NONCE_SALT',       'RFa8zNBdIK1YAYEHODeRSIjw1/+DSfVvP8hcW6QfjKedW+R0wSb5Udbgg/7Xfmg1uGkHi8tZuTD8LRi/1k9RrA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
