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
define( 'DB_NAME', 'woocomm_db' );

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
define( 'AUTH_KEY',         '!QVjFUd(85H%PRgldv{OZ2GjAmiOU&6R+nM_QlH ;kc}?rf9FsTXP|E2a2F$%z@m' );
define( 'SECURE_AUTH_KEY',  'PK-WQR}icVD~HsF$15?tX:~WsnTd=#8x4TgvJ=F-ijqBM)%mZ6xz-JO|&:|,BM;B' );
define( 'LOGGED_IN_KEY',    'i6.#3a:$V;{{Obg ;eVn]c*7<$wVKAc>Z4EW|,0k(;=MVj#a!?[f~@i;pvhe4e4m' );
define( 'NONCE_KEY',        '<~Xh&z:J8xyvvwLQc2~9Vh3e/;G-OgWB?-w-pFP8+k${6ou:rPM!0I)|6BQ7gXQ!' );
define( 'AUTH_SALT',        'K)!!aj+|9-A~4cS8t$$1W-?Jo&=7;riWa?,;TP$UlbsH9@Xhz$<)eIN<+Qp[PZ&P' );
define( 'SECURE_AUTH_SALT', 'tG&9)lD9U}}dWRd.q7r1p^ttk@1c4Q(8*-5zi6a#/wceU{;d^pt%&./@6W6q&O87' );
define( 'LOGGED_IN_SALT',   ' 3axM,+Sl@0`Z-1aX]t8~14 I2Zxy`X~4k$cRnu*TTq><^#?q;HazF_E8`BlST(l' );
define( 'NONCE_SALT',       'pv|Yfig%Rz<Hs*SlFDugFfm#=hl=n~nm#TN@;@WWq(Ax5Y3jbviWwX|_r5wn-X 4' );

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
