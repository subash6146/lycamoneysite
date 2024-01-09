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
define( 'DB_NAME', 'lycamoney_db' );

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
define( 'AUTH_KEY',         'px-a_UsVxJq{?j,u:T*!45TKged[;Z<y-=a/wy^3/Q@P.A/I#YG^w?Vm8t[1NvmA' );
define( 'SECURE_AUTH_KEY',  ':|n>qQ:&A|i>8&s&#)2Q+SuqSwfOk`z5o6epLJ[C<m7Q0DV*<uQrD6_]a`~i#S*i' );
define( 'LOGGED_IN_KEY',    'ugAlS[c!<=}[&q#i}<|Op|XXw1A?V#FX3gB/Ye{1gVL~tij|B2T]q&V*|~.gKAu$' );
define( 'NONCE_KEY',        'lwi9vjQ`d1R.!6IaUNRlCC;e^t]!mS6>`iDWs]FD6!yx[~f`-V+pUA|V9cm%R+g:' );
define( 'AUTH_SALT',        'C//@7Fw1fTCE6u*+nEWoU4{(`]<;^IJA/tP&MG w?CR8QXhyo/QI4Hlje%J{6sG.' );
define( 'SECURE_AUTH_SALT', 'XY8jp3Jx~VsDMl1JN@R#o7{T~qNAIk|aW0<m|Kq`CmP:TsH3oK.5ME{&+@YHZ9<v' );
define( 'LOGGED_IN_SALT',   ':R!pf1v`Oq2gWm?3xT}]*os-$YC%h}c-%-hI4Nr=4`8&l&09k^^Vv/ZnS:0H?H}c' );
define( 'NONCE_SALT',       'YoPk>R<YX):euP oO*-:e*6|e2)EXl4BiH(pi?3^2D#O; J<*)3iU?PTh{k9d+4@' );

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



