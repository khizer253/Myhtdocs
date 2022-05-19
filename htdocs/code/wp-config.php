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
define( 'DB_NAME', 'code' );

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
define( 'AUTH_KEY',         '}2D-IF^pPk.MkgJB7J58C;Ke`Oqn<dQ%^2Y@KNh1Xe*tO]$/F@^=w7xWt.+(<wfi' );
define( 'SECURE_AUTH_KEY',  'Eb8FK)%p%2&ooZV{#5CJen~N;$S0CL:]fIzX1~tQ[naY5<xR<zO-B(P4H|tXJ?37' );
define( 'LOGGED_IN_KEY',    '0s-={:+G jEJbB%:G-o)j(Im~V89pF Q6z_CRF3{!H#/aPW#2#6@5pZj70{h@~D)' );
define( 'NONCE_KEY',        'b #CV}m9cw=B2W)|/I*q*:P{^e9>OZD` ?$g -r</mFE2C0=R7d]sg5N:YfAHc~z' );
define( 'AUTH_SALT',        'R$N@[8R_*Yr3rB=a{UTlgT/SmDHRTHgNA+vf#IiU|oJ-9SfFS,-dmc(0)1T)s|^=' );
define( 'SECURE_AUTH_SALT', '9s{k1TZ]_}u]cE}jLGGLqMB?>Fp_M;K+sIx|A/=DEk##,rM.,hsg,+diZ$~C@R@f' );
define( 'LOGGED_IN_SALT',   'N!#GE~O?*.&A6 WRkn*+R*[Y{w8/@-v:,s?bueldeJcO^M[Y!6?b?5marOTp{BOF' );
define( 'NONCE_SALT',       '-L<jMb!PP^DqOFBsX[-mC{N)>/A#Gp?6mX7~*h^Ll6LIAV$ af|$V^B,^nCt=o04' );

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
