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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'devgithub_db' );

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
define( 'AUTH_KEY',         'R)(;kyAL}]KGCX)$LT+P^ty2u(Gi|`nH,3}yX:,]*C/jZT]>w>~fef~4M&+PME#u' );
define( 'SECURE_AUTH_KEY',  'Xr3zCOp}yM2)MQI99l>K#Z28slI]UtOlT[`;huW>J01]<=7T97AVAIREMNWm_jRk' );
define( 'LOGGED_IN_KEY',    'p@^2>*n^YtSA7 $rprNgsX`J,rB Qm3Y)d_R.e{SNdj?A)[Ap<y>=9-@*vXRNMF]' );
define( 'NONCE_KEY',        'Z-CI-T[ H/+ZVKb<] NZM=/pW-;Hm!w8Usp`vGNwux~E|)]h8>3LhrgV>VR40Rl`' );
define( 'AUTH_SALT',        'vwn!Y%iHFNY| `t*:AE>%,M3]~JWf)GyLl*2(eb6n>E{cof0ve[D=md1I<(ra)/W' );
define( 'SECURE_AUTH_SALT', '`&Ye%M>l,jgeR^nO$7q)P_<hasN{EtI$bP9umjR8x*-HYG7=,Z{Ah|1U42FJu,i[' );
define( 'LOGGED_IN_SALT',   '*fQ+mr,whuF{K=_ pJ3,Y7-MBVTW^(3-KziTIv!,Wh.YBn$L0A)I+DgmUVeG;AWQ' );
define( 'NONCE_SALT',       '}Ps04-HK*k;a&WPC| k{=RLT{V>cab3[f*:&Km_fp-n/# ng-4p,Nvk&!DkE~mF9' );

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
