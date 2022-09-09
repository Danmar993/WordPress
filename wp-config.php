<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
/** Enable W3 Total Cache */
/** Enable W3 Total Cache */
/** Enable W3 Total Cache */
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dmarkov_portfolio' );
/** Database username */
define( 'DB_USER', 'dmarkov_portfoliokorisnik' );
/** Database password */
define( 'DB_PASSWORD', '-~E+VB8+b[4P' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pk1c%ge[,pl0-%OrnlnCM4r2qsq>dnbm4wy9!!1QHUoN(& x %Z}7@4MKuwwO%;Q' );
define( 'SECURE_AUTH_KEY',  'qsAGj/D8&dGe?GPcFTxJM!F2pXuon/}@r+*/{TQO17qK[|4Gx=kN({RShiN}*Mm<' );
define( 'LOGGED_IN_KEY',    '(wn?(dP@:F.,9#oG=^5#tJ::t&{@Rc{o.myot1X UMtsRjwi;Gv]Y`Ezs_J^*(_w' );
define( 'NONCE_KEY',        '&Bb#3u#bxb}Kj0PI-1,~g4!/F4jse`G;>$-E1:,ME  [%EL1Al@b]u ^++B<]&~T' );
define( 'AUTH_SALT',        'wVo|)y5`W2G1D<g4A)1CPG<3CdM`)CQx{7.&~^=.L@!-;xzW$ef)uqAq5?4xr#}X' );
define( 'SECURE_AUTH_SALT', '9WSh67C&jG>q.zG0if[Ib~5kBDJ|p/4QZUaVMKWTm9<cm9&[cpSE1q>o5Xg;Kw~|' );
define( 'LOGGED_IN_SALT',   '$!?cOZs ]a%:&14}!Tyf{UYjea@V1r$+L;9`Y!aYA+1lQ7MJs/eEXs5m;I%c@h@X' );
define( 'NONCE_SALT',       'gDzr cJzDx.lKf5s#UN@hPIh@1<QHsPoqp8)!#TXM 3DE# bCZU(`?B?Q[8<d*oE' );
/**#@-*/
/**
 * WordPress database table prefix.
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
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';