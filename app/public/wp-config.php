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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Kx02aB?a/6_wRY(p?KU6h.h>nHB,BugF{_KmAN3>.TVDY|{iQ$;^H`@U3pS|K]R!' );
define( 'SECURE_AUTH_KEY',   'kyiF6 Am_T{bV<:5F*@Ag)4t[B]1hi46;6D{yL$i$! sdH&1 j}1b+_o4F-Dkc{k' );
define( 'LOGGED_IN_KEY',     '<D{>o&Hnm..>uXzQfYo8kgwVu5UmFDz7Fg{3o{G92Q0?DkV{aagno!QRt~5CAq#f' );
define( 'NONCE_KEY',         '8mEk`2{S _/ZYp/`fJef4mZc2xv(B$_PN72zO(PH=C][[hw2x<LA~5]@xRVdSKK0' );
define( 'AUTH_SALT',         'G:?WGR=R-9~&~JBt<$WUD++b&a4X3@:Dd,9*RQlcZt3s?sx@3Pqyc8<Q5#B?t3Zl' );
define( 'SECURE_AUTH_SALT',  't<r92tt]:1/ItP j79lO)mdXR$VN M+[)-^<3qsI<:Axe]&`l9ss6mUncp>FXq!i' );
define( 'LOGGED_IN_SALT',    'eFfij|`7jS1Hz`?)hMa#PmjO Mx5`zB^sc1ip+x>C2h;knn]0RrLIZ151SPO[[yp' );
define( 'NONCE_SALT',        'KcX *;a,l)K%H`P-V!XPc2Ox+.nAkZ3<U{=sM1v*.1Nbm[qtm1qLEQ:[%M!L&JcE' );
define( 'WP_CACHE_KEY_SALT', 'c0G=NT<Ho%d?2E[c<SfVKA9*~lOg@U|)M,ZaIVrwI`t5]trc`~Lw83L5^o,-/NM[' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
