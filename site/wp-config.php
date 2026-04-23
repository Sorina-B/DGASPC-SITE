<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_local' );

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
define( 'AUTH_KEY',         '1/dY^3q$a=5djA}xwD#44v3TGK.Z8zG`,y`g)L8sF!{B2p;_AExe&qS@b+bja O9' );
define( 'SECURE_AUTH_KEY',  ',X:W<Ta~3.gEP`5SwO%.BSysXDnbhs#XcPo :Zxuknja<u|UX:Qy+&t(v*(%UTYg' );
define( 'LOGGED_IN_KEY',    '{oB|RQXz$lrro|6;)MrPXNaTIxAOk2zy]Tl;2;40cw>k7g@3wZcd55eeWKlj0QT>' );
define( 'NONCE_KEY',        'BOEEGN*R?mqLt${FDq82}!/e2,m&x!>>+Iyy^as9z3*96< J%8i}rN;3%5[*-3Bs' );
define( 'AUTH_SALT',        'OEANls|2JHdf*,cW4#SLs ($!sJ[v)y+_}GG|M_16YQ*q3#/!K0hL|%eDBRcXuXR' );
define( 'SECURE_AUTH_SALT', 'lr6s*KaZ1<&|7nTqqAG.AV2EtlqaRzg/~b9ifdE1<!%N[xwf$&TY*DBpS;`E&svb' );
define( 'LOGGED_IN_SALT',   'gR|d}i aZWW:Y;]9J(3(r_QV-;6V68%99@a7k2z#Ld}e064mH(J.i/E.<,w9A*-r' );
define( 'NONCE_SALT',       'SK%7(TXju%|dT8x&u.>`/SEOAcQS{/&[q_B;nk1x5K;gi!)B?U{_f_W/yh4zY!{[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
