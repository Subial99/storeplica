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
define( 'DB_NAME', 'storeplica' );

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
define( 'AUTH_KEY',         'C23vb+#8x|6}mI% G1OUbU}dMSU*t$oZ*myObrVy@;MczJc1!%dld,NMcV pf,tX' );
define( 'SECURE_AUTH_KEY',  'piBNq87o(w{6R:mJHV]S6/e8{A`kN+vAGUU6L#~V4qDB!vj3uEA*-vr`a{~$llVP' );
define( 'LOGGED_IN_KEY',    'Y#>o8V YWt%*j`fQ7dy~2`;xaV?%3.:}>u:oh%RTR3Dxk1>J/Av^ne12~VJp.0{s' );
define( 'NONCE_KEY',        '6UiWg,|!YGX;%;{Qe/--M]NcTMZ2)}^ns1!*q6hA5ulg9ZtM `LzA.#_wCgzhNUX' );
define( 'AUTH_SALT',        'CQF#+}*6Ly;Z3)kr}5GK1w)7JJETgI(BciNdvZt&;^7R>j]Kd:#4yJQdM5^IPI9W' );
define( 'SECURE_AUTH_SALT', '&9tvCB7J!wE9I+2::$*V2v:8*($FdTx; TCi!mnlRg*N]wgq,wo4^<i+qY9jd>,L' );
define( 'LOGGED_IN_SALT',   'wmqY-Zjl_yC#<-kcf:wE]%H:u=aeqB.,~?YZPQLS#%FBzvh-+.A,K*j,`Z`SgIfA' );
define( 'NONCE_SALT',       'bHSF5!;&+v?_aqM(InvlQN.iPb1EJuvmC6*@k<?UI`0Uq/Qo]5O&Eq^y*cd.$hvx' );

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
