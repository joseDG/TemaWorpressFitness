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
define('AUTH_KEY',         'sx8h0z/3AMzbiovivSyR3ank9FLocRKy1PseWApYD0jQ4JA2gda3sD6/5AHa9FxqlpsfpSpm98mPHs1xXuItzQ==');
define('SECURE_AUTH_KEY',  'PS6g5fIiTqSOsTSCuFrDB+yJtIbDbvnhAB+j+LNzIeq3ddydH+dgPom7Jbt+YsXExSfMEg+apLmZ6WkaabaP/w==');
define('LOGGED_IN_KEY',    'n6EktE+LHJdGQR8OBBI4by2wxilb2aYI78D1qq/ynWER9qmlx7eVgc29xTC6oGLpnV3nQhqVsbIsgyApy+ao7g==');
define('NONCE_KEY',        'vRu1TAtms5oIwAwSaqpjH2DmPc59ceob0FqJ5sOGNDJ9wAFef+SjzHFX9fMc/O7wxbfaQgZU2M9zEkd1Rx4e2g==');
define('AUTH_SALT',        'Q1a+MpOnRu42jTBNB3mYTkxcVuz5C4L/c4Ldkn3qLPu4WlaPvviR7ahO4ZG04kNB5J9C0MHI8TUGhhNH8D/oVA==');
define('SECURE_AUTH_SALT', 'WXfcBotw/kl4O4EZHUTSSUpI1fq+uFEOU4lcQa8DCJWbxrnKDasR4fXwGyd7cYb+dy1dqvg//LPlxtD8ZULxFw==');
define('LOGGED_IN_SALT',   'kSmQe64/isVk4HURVDdRHKGgO5q6EORlNn3FNMd0sJj5DhfaQ5x8qy8aG4ssH3SGaxDn7lRUkqUOdGg/1LZNUg==');
define('NONCE_SALT',       'p9b1P6dyw2G3COlzCqPEo9qyYcnYLzPY3ujQkWNC+w/2X/TGLhhWFWw2MrDZM/rLUh18mHjdwreZc2cSDi/chw==');

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
