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
define( 'DB_NAME', 'rotaract_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0`Oe#<v|)>X>qACBI|_0Yu;T=hoeh4&f-LBrMKKg* b0il7p|[M|0@4fG<[-]@5.' );
define( 'SECURE_AUTH_KEY',  '>WJgJ0@`i6,W?AQjkZ70{-aozjU8l<3JMJ4Pdg$`#i]v5}gp_8-$qBRz2SkR0Gw8' );
define( 'LOGGED_IN_KEY',    'j>%rX,TYVQnK9&iVzM&Y9m$r~lL_BFii1nbj!?A+3fcRoCv9@!Icfy+i3J6^mEsp' );
define( 'NONCE_KEY',        'OJKdnQKrvcIv2d_>0lGVObW[{GPQ!fC.SJH-]q3,MZeq}[ekSTCoBU-B#4kzK^rq' );
define( 'AUTH_SALT',        '#bSk<(`E,{JwQ&Q:>M0jC_RL-@u~i+`nD[Zf: ];urUyG/tE`!yai%*B<2[JCOWB' );
define( 'SECURE_AUTH_SALT', 'O|f0iYSX=Tez~?g1`JCztaU_z!=r^(bm>af/Y0V`$$/Z_=|U&W<m2T;vk)UNo[!i' );
define( 'LOGGED_IN_SALT',   'rI2rSm3W,lUrs`08QeD:lAQ)O@+zN d%$`2%FHjZ|o2*OLhK]tW}|s,ID~j~V7a!' );
define( 'NONCE_SALT',       'tjgNW~le.,5+|i?BJ,tZ3YY/?>#&La ?A4;,[Oy.z8Bs6sl0y]c.9)z7TH6lJn`v' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rt_';

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
