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
define( 'DB_NAME', 'roznews' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'x`D=?zPJh%G4vPp]ji{G;4o==L_Jh*;9s XgvRje5Oh:{>NIt3`~++$V5|=:}p?C' );
define( 'SECURE_AUTH_KEY',  '}ep5EJ171>3!mWd{a3l-m+?tXwd.VN 7,XYea)iq+eR[(v.SStl6SvT<.ldo$]b1' );
define( 'LOGGED_IN_KEY',    'EQ6<&P^+c&y9+Hd~#yshn1urTZN]Te`hxS=}RyjnUFTj*~Zy@_e5*UQ9l[>f9car' );
define( 'NONCE_KEY',        '4rRO)g6>(I43HfOsk[n&e::eD^.DAT@ni]E$&w1D&f&78Er(AAFTt}k-t+-:a W[' );
define( 'AUTH_SALT',        'hUrnRUo3^[k`!G4pJ 0K#j;i9`QwYP7UrVxQ 1CkEy->YU&T:)=Ye{3GbJ*w4G }' );
define( 'SECURE_AUTH_SALT', 'W.:B@Pj.ux >)mER<7!3f9I[m^*Jg;%uBlpQ8I6,gIdiYBmm*wuLAQ*%YXqAiCf,' );
define( 'LOGGED_IN_SALT',   'fu^yE7&uj{1f4|cWZ mW*d($n[PTSUhE_-dz^OJQzA H3[7~wAyG/(_[;Q2uZ<%|' );
define( 'NONCE_SALT',       '2O^Z^nI&t;`tD/%.Z,y_QMgWcy9([2;!E.a6*>}R7~w [lov9e^yP?!3sxq62l+P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wmnp_';

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
