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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'sstyx' );

/** MySQL database password */
define( 'DB_PASSWORD', '123123' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

 
define('AUTH_KEY',         '5* 2Jngk$!3{,0_3,J#@1}qsvcgfZCr~FKB,^[r]JD]A4 8?{SuE:hRg#Tz8Cg7A');
define('SECURE_AUTH_KEY',  'GgU#]rs:0TJ`;~/IR&PvLU|Dd|NuwC+d.X]# }2z>+[]mVP#k#B}W{62x+bSr+e@');
define('LOGGED_IN_KEY',    'KcV$C9qFLU3U7d9SfH$63+zY]DQ+T`)2qnMZ7:1-|gGrm_wrP-P1PYT[(KnY@>f;');
define('NONCE_KEY',        '@kdEOB:5*(QW`hasQU6p3b)_Yl#7[V++:,+Gm;9^x=cb&PvY%+wj>gD{aL&s(<D}');
define('AUTH_SALT',        'Ax!~5]nLAGacSPKVJWwJxK^>/-IK|#E{yo+|M+fG3>?wY}=2`lw%rQ@,!REdURxt');
define('SECURE_AUTH_SALT', 'v0[~IhE2y<%mPwy3*B{|e7S|LYLw53balHw$MRYHdopOLV0}AlFcO#DmZa=oyfxn');
define('LOGGED_IN_SALT',   'B@m$1:g/)A^{uqjzhU(DE+|IFU+o%kOmJCD#S!$/Eg66UH=/E+kL9FF{)X/qT{b8');
define('NONCE_SALT',       '/Gq/*fSUX7:[c4AqOx9W8.O$X,,MNl<Rp/7K<Y+r/9cOH`oIbr+~VHp+7vZ)^ZDm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
 /* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
