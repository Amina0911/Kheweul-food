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
define( 'DB_NAME', 'bdsiteamina' );

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
define( 'AUTH_KEY',         '&0d[KH=X gOJ~meJL-DY([XFrm4pa-VaohueZZbZFED?[<M1[#DmG6<Uq0*t-K]b' );
define( 'SECURE_AUTH_KEY',  '{$:aVjz;|_5{(k{X*&g#?ZW)^3?+MIlK*]/(sKuSPb:/Rj];BhDnvw:Ya^j=w~8P' );
define( 'LOGGED_IN_KEY',    '/[le6Zbw9_ng__Q,DPCf/!r#~L>rk^*ofxWY]A8Z.}8NGfunY|^9y*Av`)lmu|eh' );
define( 'NONCE_KEY',        'vmXLhV>07iv;IVWU`rHfiB-Nh{||rWIfLa4=K71GaZJWezKMMn9Cjz q*ePb&,6Q' );
define( 'AUTH_SALT',        'BDT?5S(5kp&Xx>vt5X_R_^ATUuQj;U{K*~[ZZHGGW-G<Mr)ok]Q~v1a3+{&-u}<F' );
define( 'SECURE_AUTH_SALT', '!)XJ,k!+j2jnG$-(p.@aAHM%#U.~V88xCs@rh?S*qdcl2/*] xptzwkGEm~4/?>7' );
define( 'LOGGED_IN_SALT',   'l>Ku83,8PO=rI{T:M`O+pdGC**><%XlHf-B_sL%{q--H#??KsExAFqa/xUFbG=>G' );
define( 'NONCE_SALT',       '[^4C8Sj^fhS%u^4+NnvO1$/F}6k{!}g;U[A)zC2TZWE[uYH(,cLL]5qaqs4Zb%Mb' );

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
