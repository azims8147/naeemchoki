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
define( 'DB_NAME', 'naeemchoki' );

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
define( 'AUTH_KEY',         'r 5y>*qZsJs/= ac`Z[>ILxtC3J_bM~DSNqcl]@`Wk<!xn{S*Y1[iJ&yygtKv)i$' );
define( 'SECURE_AUTH_KEY',  'gc[gfbiTz~6(ZgRnwIE.6oE.1[v>/Y{phiF:d2B5&5$c4fk:``A9u2VuajI_1JbD' );
define( 'LOGGED_IN_KEY',    'G.06VlxBi4wT&d6vGH?<8(I+^4e!@()IC/YQD4_K)X/C[y<D 7VN 5A9p!#Lzrv8' );
define( 'NONCE_KEY',        '3Z9_9@*g:/Kf+3(O0q8R$]e:g]c!E%T[XzOP)]hdVsuzOTysjAt5xOu`8>I{t:C&' );
define( 'AUTH_SALT',        'YARCLEY|=QY%%d6:VZ3,1;~};^SB|NS!1ri>fS6je=dyC5$!Zwr>2:Wx[z:sp;,s' );
define( 'SECURE_AUTH_SALT', 'Wi7ZJO@`DW=}vCbZ$E{5H^[g<j9!WH@Jr`Y/)W4VO)~skfbl%6|;C(gCM-i;9)|_' );
define( 'LOGGED_IN_SALT',   ':,|_rpRaFE|mMa2BAz87XQ5EIJH_-f:U9DUsJCz@&i5nXGFTcw,}Ui4PmAK%f8mJ' );
define( 'NONCE_SALT',       'K94<zB@%D6U:<?#XM8G&v::cO7.vC0EH~gl?T@Ve6r=67a+YXZ9OIicjCsWug>PT' );

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
