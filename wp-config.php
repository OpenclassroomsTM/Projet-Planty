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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^yv/qAZ9JQfYKxY7aZ&/,,[0t.UJO>PEs`a~cktkG~X%6;lm21<o!H] Q[M1 :Lf' );
define( 'SECURE_AUTH_KEY',  '<{_$Tlh~z1_}..N*`3obss5TG.3Nh,QhbN*7>|0PLNU5.<hffIr!>]+gX?[L}w:U' );
define( 'LOGGED_IN_KEY',    '] Dj&cBg{W~uM]9ZK?8w&|Vrr<]0C`KlnsJ:gjh_JHa;0ra[!-+DCr=eD 4_?p@;' );
define( 'NONCE_KEY',        '8?K-(m/t&Xwj+H~(oJ<5QX1CtKEg~k5$W]=U&YS%QLeX>so7!?0z9RP.qOq v-gZ' );
define( 'AUTH_SALT',        'UrCeu]Yum-~J.1Y5onD^7+Idm%|A)c>ZYCr4tZ||je)XaAW%M<T@rx,7lNF6h)WH' );
define( 'SECURE_AUTH_SALT', '0fFEDtS:c|X fLxU.:mZx|4H_c4^us-4$_g6p}M>u._~he2:RSU2^o4j%g?UcbR!' );
define( 'LOGGED_IN_SALT',   '-aaHVZWQE !!Z@z=?A!X~ZF[a])phC8ux<q 5Q]j9N@jNP@:4%{$e@GMOh;CM,]_' );
define( 'NONCE_SALT',       '.m@imyiAXlQ+7iUg(_YB-4_2tQ.^*zFL]_5lV^A $eRI 11X*t>m=3OKqgG[-=>|' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
