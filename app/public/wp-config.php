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
define('AUTH_KEY',         'RWmjDvKAgFbw2bCMdG9Uxuk2jT58Sg/oOabXwwxf2F916XtDvb9V+7LJqexR3FwjDuSviz7vbqVBf9RjeSggdA==');
define('SECURE_AUTH_KEY',  'sdRp+vQs5yiXaAkm+UJ0znxHJjklVSyUz94XrxQMdDuLRbdElEbrnaH9xkBo3194RWK9ZV0MkX8stWbBNhrOGQ==');
define('LOGGED_IN_KEY',    'T3E3XuzuBdUnjDqMKLAWmIfc7Ud/eD+KG+Nj1/IbdpHY48PJBVrdBW3CjiTQzROFiea5+5oygKAtA3xvOkml9Q==');
define('NONCE_KEY',        '4riv+OKkq+fOPWxLRQSDAolGXDkZKZtfYzVsMrRSsbsDbXcF82mqgKJXkXiF/FwUIgO9sfpk5EtIkogmZukzZg==');
define('AUTH_SALT',        'F6dpOzlQlcS+csQzqr/5Tx6BV9EEF09ucbHPFiBw1rCq3X5wSAbX4cwtAeGW4ECW5L0FJhQ5PwXUY0RezI39jQ==');
define('SECURE_AUTH_SALT', 'LrpsXCqcjd/As6gK4o5L57bSGCeJy5nnMzAWZKYSuf2Vn8iaEU5MuPOYZPPWLImNWt65vkFC6jOVnrTyM0y5Dw==');
define('LOGGED_IN_SALT',   'K5jQbtNc7fMjjY9EP953cKFBkD9cTZTzuKncYX5M9hksGlyK5Y7JtVjqZYrSrTrlFRidYde2202ssAXi6BZvnA==');
define('NONCE_SALT',       'AlIRw1cxoOWOwi4LJpUrLdBbwijSXpYWBn1N/h7wraGm1R0UKMEiTxcU6dUOQIAcQx85n91JTGxhu6UVCBA8LQ==');

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
