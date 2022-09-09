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
define( 'DB_NAME', 'dmarkov_roman' );

/** Database username */
define( 'DB_USER', 'dmarkov_roman' );

/** Database password */
define( 'DB_PASSWORD', 'dZgUnKITz6RL' );

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
define( 'AUTH_KEY',         '33gGwNK6MfJ;>JF.srDR$~=1h14jaJp*[}|WnM((~^URGW>zMfKnVehYuWwuboo{' );
define( 'SECURE_AUTH_KEY',  'O&=N)hj;a=4MSDlVZx+-q#{m&&JBn47lF-Z7L%W)(}6:E5Rp-qaE0Yy8y<bIzPZ]' );
define( 'LOGGED_IN_KEY',    '.Sw=I|]1m2Q-Q?X-jrslU`VC1[JYpUH>W> NSD$]cx~Bam<7D`?Q#`I_f>!0Q<R*' );
define( 'NONCE_KEY',        'RZ$;Dh2{GU{]~}*K/)CibeO4p-{Qy100r^Pk^Wq#k@[Fa2(? fp~>^.}U@sU%-4Y' );
define( 'AUTH_SALT',        '`Et}>xKjnoS:A5m]npbl/>D~?FUn*{L:)X=+Q}l3~x[*KX{zTeY3>}!dh{#iyn$h' );
define( 'SECURE_AUTH_SALT', 'Q|jj~qk6J?!lLS2iuRK)4GD6SJ40qic{)M{/<x$$3d[@JT/MX&bHw}Q8#P]AX$F1' );
define( 'LOGGED_IN_SALT',   'b&#C<lw?cXG~Ez@Xe4h#`U*s3_=SsQra.gk-ufwfsf=#N0nzr2KY>A3*bPbMRAmY' );
define( 'NONCE_SALT',       '/Bs7f(aV#lfdY;Xsuyr_07=,9W$NTEW?wPP,~~+wYKA2L]T!v!Nr{H6|reoAQCHt' );

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
