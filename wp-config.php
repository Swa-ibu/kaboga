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
define( 'DB_NAME', 'dcb' );

/** Database username */
define( 'DB_USER', 'bamboadmin' );

/** Database password */
define( 'DB_PASSWORD', 'ztrzxHGoCNLgG0BsZG7P' );

/** Database hostname */
define( 'DB_HOST', 'bombo.crxpohgjkbgv.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '+r&`E=sljw~ZS-e&paZ>?8n_M;/*?vg1pju]bz@;!V|jYzqYh*y/hi:5=}@Fd.w!' );
define( 'SECURE_AUTH_KEY',  '5C-=38(K=}_R6:Vjz4sOP,3kh/K-P1mjV>bmm)Giud:DX}5+1[_pAF1(akrgP`Sb' );
define( 'LOGGED_IN_KEY',    '!d=pO]G3x69k%4tWMr$Tzl+&6^hjo&+x{ccOZR=MLof3R_?/E+[zxS9R.p-jjkxG' );
define( 'NONCE_KEY',        '-0f5#;xMrf9>ZM!bPTp__N+Y%J0C8_lz->X j+SX$d#mW-+io9XBr)g)@Cuxa=MJ' );
define( 'AUTH_SALT',        'cF;O7+N}HI(}ZGO_$Ehvywrrm|hpneq.|cY%#QC_/v+/sd*yRur14#[|)qx4|)o?' );
define( 'SECURE_AUTH_SALT', 'S6-w-{ =!Qc+Lac/PXt:HDBVFtrM]48WWxxoqS!9sC&V$hN=`-P$0H:yBvlwsFBE' );
define( 'LOGGED_IN_SALT',   '-<G|uAB;3{:;#9yjx-v~TqrvOT^^q<~7_Z&|6iqQJgZrZh1X|Q|Mj$`-h-n4F$5&' );
define( 'NONCE_SALT',       '`=g3|J#7-+j2/UpN~,/F~XQdF%|3fV6Ba[*L+yJNa4;B,Av#T7A<;Lmn@#Ii&dxg' );

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


@ini_set('upload_max_size' , '256M' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
