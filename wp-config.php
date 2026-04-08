<?php
define( 'WP_CACHE', true );


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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'citycol');

/** Database username */
define('DB_USER', 'wp_ki7bk');

/** Database password */
define('DB_PASSWORD', 'IX_P_6G@KhNa9*d0');

/** Database hostname */
define('DB_HOST', 'localhost:3306');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'Re~W6@mab+J50]12&6e+jgS0S_&Z6-4J27E~Sj6eA4[1b2*QW4J/1OL:%838oo9*');
define('SECURE_AUTH_KEY', '7WS8kXa*1#FwtpH;0p[bI2ByF1/9/q%A)G6(d|1QGN;_JN;j;hX-6K2w3El25t4g');
define('LOGGED_IN_KEY', 'J[/b2EfZ5aO@JM-otr!e0|C917q_u[3c!|G*7B9ar0;4cnioGxs+]5Zym;q%B2/f');
define('NONCE_KEY', '+hk26*TVB%CN_#6-5/5qwELA@84XAE9UR220!4TM%_n5::H8#*M_gh@%|C65;zzF');
define('AUTH_SALT', '5J3F!:40q4y67-30hK51-JSRXd0dA8LLz/mfez!Abea4Ij!-87[eZ;i1s3A~z-w~');
define('SECURE_AUTH_SALT', 'Dr7g7PF9@D9/!r%g8@(Vw[7@MNT&[~Ieh)y&sJM_:K04DX1HT0#(6#7-8b19[%Y)');
define('LOGGED_IN_SALT', 'P_Zj)Kf%+XuMM6:6T3e_*TH@nG_~%(_fja3Z/;:O408E87]!j78y_Vt0DzL(9+Az');
define('NONCE_SALT', '8|t05i054*5PnNmb06b-u3i16D1Y]:p8Gqi/D41ql)4/182B2X1CFva5F]QX&vUo');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'city';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'DUPLICATOR_AUTH_KEY', '7dA&#[qRRT`WwU7Fys%u1!(f6)8epIW.48),P:DY7v,Pdk?,2KbU,3z*T/Mo:j~U' );
define( 'WP_CACHE_KEY_SALT', '6d4bc52bbcfdd3c82323f1f11aa6e54d' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
