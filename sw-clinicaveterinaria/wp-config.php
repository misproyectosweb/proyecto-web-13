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
define( 'DB_NAME', 'bdwordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3310' );

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
define( 'AUTH_KEY',         'Hvc-=V%u/At3Hxm(`D/Y}#@eF&JOpjtpdz9K2u!)(7]i=z$}UfOP:f6~**1R/[,p' );
define( 'SECURE_AUTH_KEY',  '4<UB0wZP8=TO6iWcML~)=`!?!g*_]#gK<T!m!$b]^b0s%yy_QHFcb+6eOge^eE8{' );
define( 'LOGGED_IN_KEY',    '?D:Q+_K:s{5M6/jfm@Wg}d*Q9W#kqaC(De;cl>H,909YV_66K~iwE$!Nms+@F1zM' );
define( 'NONCE_KEY',        '{{CLGsBvw5,bV2k~vK4(8g/cCK!2,II#0(SjchzeWGuxAXu}I;k9bw((`5nrN;)7' );
define( 'AUTH_SALT',        'U,:w|6FD7vl+8s61Xx+U]ysR.{+E#jWB~@vRIl[WLvW)>.?)X2:?)2:FE)x=srL`' );
define( 'SECURE_AUTH_SALT', '<3{Lu`@Ra7W!R#LH[LYuC6)B4+QNazJ5K:i]3K.R~,m$`})|Tm*E6c#r+T=@qU3$' );
define( 'LOGGED_IN_SALT',   'W~|e2tY?0k<?1usDd+}5:Y]wlN!0=bWL`,o-Ii(Q w>RNiF,>Kf?<Z$wTAS$gt9)' );
define( 'NONCE_SALT',       'sM9C(3U)`i9Pe!WHLPB|x~KPJ=6^P9Rh,?UUa`*um;Nz]ymj+yUbhhh^2fgC%k=d' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_clinicavet';

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
