<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'childhood' );

/** MySQL database username */
define( 'DB_USER', 'child_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '8f0ff95575' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VD|Mkty-4x7Rq D}4]-2fKr%9^AxOHr?Mn(0Fu.>:K-dN9z<h{xc8&KUPiJ@,>+m' );
define( 'SECURE_AUTH_KEY',  'Yoh388_U1)jKTp_ARN<|kn(b]@<?EUtn>eYlU.f_Oy-j<0Fc/@#9PO8Fah@>Jtws' );
define( 'LOGGED_IN_KEY',    'uT8O,5vT7!IRs_92sri6^nP+1$e<CGNOfn)wl19lrA1b>2MQ5{dJ$3_pGAQWo E}' );
define( 'NONCE_KEY',        'z-Z:X$}vj-v:0~jt&@{NcGQjN@ednti;Q1+$j2,eI?d=~O{ 2YcF0g7X`@0$>#r0' );
define( 'AUTH_SALT',        '~aTK.3C`7TCzs3gt_=lx)~uYbfvg7 iFBp+}QfL#l&pf0IDHS0R)LGLyIGXyW@X7' );
define( 'SECURE_AUTH_SALT', 'UJOJb;+3WL%TlD}C>]!5*8t%NOJNz/yu2:3!IImvYlg0$+8kd#GzRqLG~g-Pmp B' );
define( 'LOGGED_IN_SALT',   'DN2klYev[g_`VO<=rO@!NDZS^8s$X)GCpWml,U[{(J@>Be{<D7{iX!1fF|=bcsIl' );
define( 'NONCE_SALT',       'n_M_,#Qw nvq.d,r~bky$!n50&Tj3#]MM%U+9q,R8+7ZGh[Rye66g zX|+6{Ie34' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
