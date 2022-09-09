<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'dmarkov_digitel' );

/** Database username */
define( 'DB_USER', 'dmarkov_digitelkorisnik' );

/** Database password */
define( 'DB_PASSWORD', 'w!e&Uk.T}srr' );

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
define( 'AUTH_KEY',         'pN!%d AQdvW^bI&zSt-lnnZzI[f CB2DWg<YrJT8h$!eg|R7.<8rfKFqa{+LV78&' );
define( 'SECURE_AUTH_KEY',  '@2#kKjJj3|qU2Jp!e2Bl3+wVr5d+P_>`4Anne5W(tHl^0)n@Y<3#^gYgF%N@JEwm' );
define( 'LOGGED_IN_KEY',    'Uxd]7H04LIOI~kJb1+j}zZ<{o?loCU@>:ciTqE-!dA#N`MKd@$:SBNsd,Uyu<?!3' );
define( 'NONCE_KEY',        'gP/n&,FG%x%&[sKkew`1Wu<47VXIsoVV|T$ )Ib>XQB`{#*JmFrMfv_%!(NO>0Pv' );
define( 'AUTH_SALT',        'q*$nqhsdW`V`I1;wWww-#/xztOREN;qu4C?_9M#CV>-={?U;nVRA<{UI|H~tdceZ' );
define( 'SECURE_AUTH_SALT', ')Q1r:J:0_m0@+k;YuQV=kYVZ[Y)[?H26vD,ugD<_r86jzGjrms~x]nE*)hnAF=}A' );
define( 'LOGGED_IN_SALT',   'DCqPMby-rw8QJ_ak}@MV9jI]tdf+Sg%+2Q<BrUhGyD?~B&:Vm&;vY6yJ6[sx2Q*a' );
define( 'NONCE_SALT',       'JRhTexM]P*okz6]Fv*RNYp|xe^1Yeezo[Fr$`*f=0S:$a@FUf]mOBxt,`UmT)M*]' );

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
