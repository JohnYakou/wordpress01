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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ':.U0TSbCqOTbPg[YQ=Np9eY0(Dg=oik(* 9,tcN[zp7W4qvh#!1&ZCj`rHKDu,UG' );
define( 'SECURE_AUTH_KEY',  'EIW|`K[IxrsA:BEMGzX|O6JErY RLuTAC!K}s#v%kS0AKU^=X$ydGWG1 6;RK@?W' );
define( 'LOGGED_IN_KEY',    '!>WY$.9m=kCp&PR-02CW ?[Ac|.>8J:5+X8nd:98K52-~#qrkfZtHf8p@Ej!>:y}' );
define( 'NONCE_KEY',        '~0G=tQc&JEPERiLbVL-EA69EACvLTV`ZX Wx7ITfPYaZ2$E4<bV8)%Iz5&a!91rl' );
define( 'AUTH_SALT',        '!e#5VyB_]4u4#dY%PH1Z+$RH^[RTB]7]FIAsK=CVR=; TyRTXva[N0!aqPMGX^eQ' );
define( 'SECURE_AUTH_SALT', ']W{`NrA9V4grHiH;y;2g~,OgJQitp:dB=j|YKa7284cPl^w<?<+yWt8QrSa+PpTl' );
define( 'LOGGED_IN_SALT',   'yJdp33k(lLtT}coeYvS]{#Zuac} povN-rRL,$V2xq{J. O>xC&6BkE_ef(~Day%' );
define( 'NONCE_SALT',       '`v:?n2$ATO,#uTvYg#u>xsJe.InS{zwm3eAW#mA_GA&ugQ>Q324SlT3FMj!1B2^s' );

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
