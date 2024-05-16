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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'libros-en-orden' );

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
define( 'AUTH_KEY',         'RB<+|5.nPi><T7&Xrpw+/+w Zil^v(D!;,<qi;7f`>d@)C@K<(<:3tzD$V%Tz2![' );
define( 'SECURE_AUTH_KEY',  'tV-OfvH50GX,kr}k;YFQ @aS.s;LH&[Bx~V^M)K?jxR1~b,s[_vty6tE/?8&DNgr' );
define( 'LOGGED_IN_KEY',    'f_~6]@%b8jk>*c28-zm~fu8yD%`~j^ uNOE1NF8R7biT<G38@6 7E)&OCp[NiDzQ' );
define( 'NONCE_KEY',        'LJFFA .Ux69=zzL`.4<w*?}`Ad@0*4+5MW6lw/BM=>z~F6:X[5WL5&Q;QFofCbwf' );
define( 'AUTH_SALT',        '7ebE<E).C%$uA#kSa4 C/vyXQ*p)G:-!oRI3yFT2[.~k2Po?1}oEV=Xuo;0PZ$TP' );
define( 'SECURE_AUTH_SALT', 'G&p[]yGL.3c2anLB<OVxL>s/6JcIvA(fZ3n&gBl]0d5KCaK7eR_ ]Nk_$bcb;X?F' );
define( 'LOGGED_IN_SALT',   'xr5z$PU0Vi}<dDHU]Y6#b.M<[1,m~Wia!] -/Qm}]!fH`*]Dd}ke!;ykKyBl;uVE' );
define( 'NONCE_SALT',       'WN7],6p~G[5/L }_YQZ#{cg^I~PYx@k-u>@-AzqUF<#)w~7dO2oH(M-*d#M!8(Wp' );

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
