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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'publishinaja' );

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
define( 'AUTH_KEY',         'BeZ(3/m$[_Cg=8/B{qm/dLVQB(hqjY|{L.TC{)$-dp[gE=~20GIJgSEgobi;qYEA' );
define( 'SECURE_AUTH_KEY',  '=YVb:5[LU!Tz#%L*#=X:u~L89h*O-qsm_VI;c=9vle5Ask)*ERR4uC-<8^)sXKf(' );
define( 'LOGGED_IN_KEY',    '3gxDmi$RaE>P;#M3k?*Vw]+PAMN }2C~%M1C`An5FtNs0{=B1P2[+!YJyl3)W.o3' );
define( 'NONCE_KEY',        '/Yw,JNlcz__[1v>H0!*L YdQ+U`qpWpuxNxXx2VCxq0Y|`AiNpmAYQ|siW6].]n>' );
define( 'AUTH_SALT',        'R:3NeTfa0B8.l(t-Vm$`bkS+AidA(.Lo/>f7QV/f{d9-L<agJ/ifWHP1$P*B}V@r' );
define( 'SECURE_AUTH_SALT', ':0zRX?v3#|7cB)aqo,>hjfbG2UiHo(Lp(TXBOUc1DGfRyZL8FaKZH2jn;au,$GBO' );
define( 'LOGGED_IN_SALT',   'x)$7HhgxntPwl8M7`SJofomO&$P[{*#P_<=uR4kMbz3dW3n g5~}fs,ngAN3ja+7' );
define( 'NONCE_SALT',       'r*roJQEb@2v!xm<xfO2.vk[M0$?c:V$#Ycxp[!}]6H@Jzvte<Uf0$$A!<LR17!H}' );

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
