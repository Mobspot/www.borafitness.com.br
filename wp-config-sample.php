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
define( 'DB_NAME', 'db-borafitness' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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

define( 'AUTH_KEY',         'U/gD`+rr=0;z-;DT f$z!>%bA^ok-ObEPnNx#z|Vd_R=0kfZDw<(DI=kM.6CS)OS' );
define( 'SECURE_AUTH_KEY',  'ppzvQ?C0#Gq}s/&>D{L5yN:6<x6-St-{q97/WfXuN1Ga*SXpFw75bqE|j(5ziw6C' );
define( 'LOGGED_IN_KEY',    '<PmUY*Lyx HY-s)%r0K1K=8>%$:Y,*+`D?EyWXH:uq6_ao$K(%]gV=O^I&3:4$#o' );
define( 'NONCE_KEY',        ':4Q~/.<>rua.eV.H1/Un<I-*kd[2D*.w2M]7[CJF>KH{e94I&nh*Vxv($8[s-l-6' );
define( 'AUTH_SALT',        'kqK?,@7nn=:E,/IJF_lhIpYf4>pMwiU?C$<+5w.I[@6 Xc6~xm<7~ ;AG=Ck9fRl' );
define( 'SECURE_AUTH_SALT', 'dY2S>*aLI[YwTK$%l9PwG^4nNrhf]:?9K}A<s:Riu48/_-B@R)@+xkk}2q:=@9.k' );
define( 'LOGGED_IN_SALT',   'UHUfmh*O(>rf, !v0v1Dc?FQNtEm6vcXB-k *I=}8btJ%p0C@E<Q2!AW8ThKgPi?' );
define( 'NONCE_SALT',       'VzXgH=`FxsSz)W2`@NfaqhEeaP;HlF))lB)AVjrkEF>l%5iK^jTGPJDR;{LmhOvD' );

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
