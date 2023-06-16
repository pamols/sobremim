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
define( 'DB_NAME', 'pamela' );

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
define( 'AUTH_KEY',         'TAD,Jx49)A;P:(+^ikYSowW=_nGC.b-_!@8No^Y9s1~S:K)4:p`6Y%Y!qtj4X/p!' );
define( 'SECURE_AUTH_KEY',  '~ Bx!C+p<*1tYi@&=[D+yN=u*k:hxEE<OX5RS/?s7gi}UgjzNvyz~zttPJ5q3{y4' );
define( 'LOGGED_IN_KEY',    'ao%u433vd1N5upo`tH]eR##.l=a]jz%qycp3rEdi,a_Z=F29:;DEj&GOZ3y>vv_4' );
define( 'NONCE_KEY',        '` &i=1J6X+j8XcU?qM//v[0=49J,KJqaHe)lkm01S:_i1Oeqb,B`!`{&PvoPz:QS' );
define( 'AUTH_SALT',        '%tF=u/Zu~B0UAgDG{>xz:$h]/g/#)kw7i G*e5aY^v+q:> Oh-VHrfPmC/*~%7$K' );
define( 'SECURE_AUTH_SALT', 'Sl[I7;~Ty$G/knK(sGui1di{`pe4k?%[1#_2[8jHPzL+TkQ/4S,YzNc.GRPCz{ei' );
define( 'LOGGED_IN_SALT',   'P3ueI?!?*BtSWMbHA>;Us$c@H&uSJ=5X)Q![9v8)&Ra1qB[g.}&6I|Ub:mqMmW4Y' );
define( 'NONCE_SALT',       'cL*]r5d|bFc]ls3*M<@Ot3[QM {T@7o-l@H5%zt/2Xs2Il6[>UGfBQj[yb.:ljVd' );

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
