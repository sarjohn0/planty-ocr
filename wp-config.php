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
define( 'AUTH_KEY',          'Uelrtt~,GU%@Fg{D1XA?I]H{~!(^Sy%[z?T>3:4Cjl1qSC;d!{%B}Cscl7Yym7l7' );
define( 'SECURE_AUTH_KEY',   '[-=_AGomz>Q]VMt.3|W1Y.beYjb9 6ehC(gt;_XV&wkX/{ 9~@`uODIgN8/zU8ds' );
define( 'LOGGED_IN_KEY',     '=#uw37R<iV~Ny`/b%JkWu;Z&%9+`wF#FX5YwPgf`x3<aGZJG2-v>AE_Any@#8dyY' );
define( 'NONCE_KEY',         'L1Bs#|g-#tL!;wr,@8{^%xuOv1<r!VRMx2R%B(,Q+@C$uly,*vIi7M&,Eq&<(-0,' );
define( 'AUTH_SALT',         'JdLpUZ|Z_iM/n=Pg-{cx6Ip#lOMVWA3r0GHc{=$i3!d)I S29,#mT}ryu)oOylD;' );
define( 'SECURE_AUTH_SALT',  '_pDzcrgk}BW%!kulp$l(rxW?MkZ!q3#np.ES5U1Y=bW33Fy/yVIT*v[~16(k^Vyi' );
define( 'LOGGED_IN_SALT',    '-XjN>$uj=%as0fl7gsW/-Avxi&Epj]DDA%7O9E+@rnrwF?eaV_L&b.?6k,/_WA.!' );
define( 'NONCE_SALT',        'nTT~Ud{DriR g6y~kTJh=/IV6-W[Gq8`I1IMbqR)|.x|dV 7]UD]Poh+Xw MKOpC' );
define( 'WP_CACHE_KEY_SALT', '!`;44ori0U>s^*pBBeO_}*.Ay_nm:}pVlh|m`}<}|Ne|ffseOB<peI}L+~#>I4z|' );


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
