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
define( 'DB_NAME', 'woocommone_db' );

/** MySQL database username */
define( 'DB_USER', 'elinorkero' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Middag19' );

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
define( 'AUTH_KEY',         ':]]Uv  <XB* @;i8M9De])zk55+`?0kCvj~05/`IPeMT>74l+[K`1;D1)zkY!Hv6' );
define( 'SECURE_AUTH_KEY',  'pn,I$T/4x=/5v*z&Njh.2eMeNJC7MtxeYMb[UAV/<1f0Y=eRt6UnSPKWmepVQFYu' );
define( 'LOGGED_IN_KEY',    'nq,iZHgg2$g(4fC;bdL&7&WGJ(mvkK}^#c~,n6nt|-Snyj(93*&h+N/^DJ.>eI<Y' );
define( 'NONCE_KEY',        'B*S]nR^ReT+`j~};r*%:Yy{8uL2vKaS$Qif3 vzqEs}l{3kc^_;j9.b*Z3[mrtDT' );
define( 'AUTH_SALT',        '<[kHZi%6`b)y E1Swo}g3}$Rg{wfs!5J,:rZVQ}/&#4_7aqdl<yt{DL6$URG[IJs' );
define( 'SECURE_AUTH_SALT', 'mZlvP(76;IPU@:Ek.$&A)*i&i:9h&%wrmv@|Zll~RX0YtH{d AfOF_JV`Y`DiNxf' );
define( 'LOGGED_IN_SALT',   '_T^u0@c(cS2}2RjP&0bD(T$b4_2wo;,+)p4<a#K`)[N9{ewrj`knm-*x2_43^{,X' );
define( 'NONCE_SALT',       '9/RY|lHHz[FA@a)i+zL1WbK+rQPC&fNr >@.N_i8CH,WQp$`l&pNjoYQZ5WO_PiU' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
