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
define( 'DB_NAME', 'acchan03' );

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
define( 'AUTH_KEY',         '3_&(n1{=_F%;)w0c)oAaz:,wZe&[8@ DJNf(}Ej>c24NyicHGeDO&,Nx/:>5%C]>' );
define( 'SECURE_AUTH_KEY',  'jfV_xsN~u!{D;RYn{/Xsz&Yksu1`NjUwS|{#%-e3^[sW(dpdZmjnt)+$/899_IDf' );
define( 'LOGGED_IN_KEY',    'Q-E1JNsf2xC_il-ZXT}}OxVvXRZ5+hrU3~dU `~;MjW)Kj`[> hI9S-D=nU2>TH8' );
define( 'NONCE_KEY',        ')rSn71}N%jDE_Ve=kZ&xQH:@)saZScV!(z^07!@9{k/!x2_APaAUdXXNm:yN<e8$' );
define( 'AUTH_SALT',        'NAS/=+Y;IzocfmI{iR^&/h.n]Oze^z g9|-*}0U-_?z=,0ZoG[B)W)iI7v3|}`:/' );
define( 'SECURE_AUTH_SALT', 'uANQw~T%G>No]jJq#%K1j:n^FYqfB,]x<Dnt{+n[5-DmNM>F3eG`_f 2r{2#or/T' );
define( 'LOGGED_IN_SALT',   '?[_2({}Q<6rD<M&P(;fZuRiv+Ss3rf8|s(D>,Bo.SzK[|$b 8Rp)?^DTcb tIsTq' );
define( 'NONCE_SALT',       'c8pzh,0Tj:v0++@K*%?% 2n{g#ms,BvT?Ydi Za}Z/TjoQ)wt,3sY2xS.@gCf$;>' );

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
