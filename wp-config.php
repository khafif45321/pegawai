<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'latop' );

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
define( 'AUTH_KEY',         'U^VNS!`q$M>gu#(m@O4yj%!UQY-Wl)l)TFbwmmeAPbXE2HtR3-SMqp2L^TM[+kT_' );
define( 'SECURE_AUTH_KEY',  '<%KV?3);9b#`LqQ9Q#Gvo?aP~uM}wzc)L^=;rs%*8b6IH$_(Y:T,X ,}M<3R,Z$m' );
define( 'LOGGED_IN_KEY',    '.nK[% XFjRiAZO![t,z(tE;d?~Gz&e]S|{T!-Y=*>&W!]hcKpCq=5hE0x*eA)eH8' );
define( 'NONCE_KEY',        '(w2p9Z,3e+>gvwMb!]HSQ(<xBi2&C~WrsB`}VeG)j>|UNI>S1=_CH&#Wl324ZmXF' );
define( 'AUTH_SALT',        ')!XA#OT%K[VgS5wfmx4;?sHyidWsJmIdA+oi}9L64iZ=#:ZKqE-_fDV^ZYp|8EYH' );
define( 'SECURE_AUTH_SALT', 'kG~L@sDuXU#0G2N[v[f9mz>#_2r;X`L!vJFIaMvc}mVyd B+mb};-0EL_$VwtIlw' );
define( 'LOGGED_IN_SALT',   '6Q8Vi6N/-^uE>SabdDcW(EUK.{l]pZ%MA~z4N%^#b v1g 3Dys4#T=]IkoW-nP!V' );
define( 'NONCE_SALT',       'rY~YQs]K9oZeJ]C#)Es6*=g^eWgQgI<%yH8 pFIu%C%WSR#}6NL2$t&iPv XC,KP' );

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
