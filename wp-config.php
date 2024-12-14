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
define( 'AUTH_KEY',          '>%|xFl5t8piZj~U3zVVF[ADY#|J40E%0vh*zeL:iRd 3R%-xfVGW-a:CjXpO,Awk' );
define( 'SECURE_AUTH_KEY',   'J%_rWrld;s[5*Zyvx_GfbnC6[?TXV:cexf9S<f5>!#-7_!!QAH=jubD-T=Tf+PcG' );
define( 'LOGGED_IN_KEY',     'eR]+VpiyTcUo2;KI)YP/sx/r{[TZ#@K52<)%|GP,d^/5K4Il(!jq>`W-$::3rKbv' );
define( 'NONCE_KEY',         '_^?MqUzHhk_/N{S4YH/s/h)zyb!apoZk&S#!7.7..V lK[<[F(YOc?.y_ion@VP:' );
define( 'AUTH_SALT',         ',.PT#$#U+t$#GxG+|/`NZTd_K%(}74pqmp9WxCa:39,mO95i7-0`^k;06a%,_8&k' );
define( 'SECURE_AUTH_SALT',  '{V@gu2S(@7<Rr,R@pW:9gW]O@%c&5CyuX+Y_f_[?eU)d|@6$[_V%+P<6/&I89F67' );
define( 'LOGGED_IN_SALT',    '<*s+)f4PQyX%Bbvz8/|E|QO2;26bg^eGD-o-9-`bE_SzdW}2e}/1SQ!^{KDR!31~' );
define( 'NONCE_SALT',        'xx.l4%xN;xljg(E:._?-hrmB3~bZ]`uc>la- ?m,riN_ukX<CtBc$:<Xtq]/kkcL' );
define( 'WP_CACHE_KEY_SALT', 'tof-k<A6_Z3M`fr=ba +Yod`4(/=JJDg+YTZfC+eqtT]U!YhBegsYUKITx}t>.Vv' );


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
