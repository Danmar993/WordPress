<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


define('WP_MEMORY_LIMIT','512M');
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
define( 'DB_NAME', 'dmarkov_projekat' );

/** Database username */
define( 'DB_USER', 'dmarkov_projekat' );

/** Database password */
define( 'DB_PASSWORD', '8=p?@t){wm}.' );

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
define( 'AUTH_KEY',         '2$Cv*Atu>gp&GlAO@2-z&y]8Jr1d-HZ#Q4+!a^)SgnDC{E|G}gmXwfLX<jZ(&k>5' );
define( 'SECURE_AUTH_KEY',  'J(s4w0/w24)otYnHB|c^68)PxKnP5BU@v@PXb|(9^GcOMlmCl1X@ u~BfB%V~V^N' );
define( 'LOGGED_IN_KEY',    '`2*%Wmi+be5Fb[> ^rXgN:2B4EP%9~nF#%qy._uj6oCS=Q8y1Dn|AP!a~+<8MF#^' );
define( 'NONCE_KEY',        ']/o 8ufg*-Fp[hi@~VPU[LeTAkn-eI7IT-q/iDP`|XI@r;k 4F.rQ^SAv^0=^< n' );
define( 'AUTH_SALT',        '0MW(#7UJ1(m4WWw?xu+ewzNur*[72uP1>3~6X5LhSS&2esf$pz}2zWGoUHfY)VzU' );
define( 'SECURE_AUTH_SALT', 'Ps`LQ?+xP^kIbIegj.3B80il9~ @na~$Ws=@!*HO=/J}|;a}/+T0cRp3v7>N}AQ>' );
define( 'LOGGED_IN_SALT',   'Q?X(4w& *r]]__.B@#@(9 dFI+#32Y>J8X2H7;GA:}4bJ^TR6CddOg3f7Wn}Nun0' );
define( 'NONCE_SALT',       '_PE}=/_-r.L-649(xrH)qIGIEUHv4?}4?@AhvJ^8TYc]y`k{_K&+DC+y%wUKS<Qw' );

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
