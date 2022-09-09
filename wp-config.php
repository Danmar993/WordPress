<?php
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
define( 'DB_NAME', 'dmarkov_trpkovic' );

/** Database username */
define( 'DB_USER', 'dmarkov_trpkovickorisnik' );

/** Database password */
define( 'DB_PASSWORD', '1ZAzF)2]I^NS' );

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
define( 'AUTH_KEY',         'z8wGjETnn1zyOVXjizZ+%}iMDzK>JjD!`CE;>Vv ,q_]3dO:95%{7L<Bc bac-O6' );
define( 'SECURE_AUTH_KEY',  'qehp$I<<(hAj6yYy3$})EE;}3){*`%|DE^_X.q7`AI?caQ9FWxy<J=+XhP@wa`kE' );
define( 'LOGGED_IN_KEY',    's:VEr?05xABBI!L]q`m^9aB;9jH_nYJ *;n2Pfm<0,0W_iX_j$5Rw2O_P8*6XLO*' );
define( 'NONCE_KEY',        '5Rn!3U32,;;>,W0r1$NM}zs#;iCsU%}14IQ^:1R{w(PfE/WBPge=Ix<NIp,(ey>c' );
define( 'AUTH_SALT',        't~3wNoL@#1P:}C:6u*2z~skc$Qy9D(2(62|*PJ07ay|ob`mM*[~.x:.P^.Umj,^h' );
define( 'SECURE_AUTH_SALT', 'k6+4;7%[:<jN5KS`UL{ 4rTm&}o=MVDr,es)~V+:~1^cY#y2O4G[*VY=0iUW@F0*' );
define( 'LOGGED_IN_SALT',   '*cXsyajX-Njdu1q|Ohu[#;d0o>DHfQ?u;|8*%isu@oy!&2t.a3NfOz2?YMU5Aeun' );
define( 'NONCE_SALT',       'B5 aoVAD9X{[(EJ #* 7P{MiYdSa(z[LLc::s[]H+)fr jdMt:.wuR$/W[9MQBc#' );

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
