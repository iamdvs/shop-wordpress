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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

/** MySQL database username */
define( 'DB_USER', 'iamdvs' );

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
define( 'AUTH_KEY',         'gjSo9CHi)H8lT0!8U`OSSz:FNC*b@CkF.`o9=(=y?Ox2hXE0j_<n<2|YnD}a29Xp' );
define( 'SECURE_AUTH_KEY',  '9:xbN5lIgY2[)`^Cth3|z6s1Z/LN/,D~74tx9.Vr+D=JIJUy30jYtib0|{[6QoR,' );
define( 'LOGGED_IN_KEY',    'xSdp*PdJoj0mguNQZ}MZ6=W8(}x]Bggm 8}X${G|_;,!(d/X3%+Sp!c#Da$+8gj/' );
define( 'NONCE_KEY',        '|OUF e5J8}z<+HG)1{W6-eP:@;^K@xwiO@IYZKY9|-b&$#_`k$8D#U9905otHD}/' );
define( 'AUTH_SALT',        'Jx!q;j]GtsfX>#I`PJu+8WX:+St|VhLO0hv#gd2Xip0L[9od?G(C/zQhnzXg9FlF' );
define( 'SECURE_AUTH_SALT', '=6nEVr vkXdy2L-iAuDpB_6.~Z;ci94J$veh)axc;%k A)$)X<HE[MCGCz<]nDbG' );
define( 'LOGGED_IN_SALT',   'A3Ms|%#Fz`Iy@_8E+@&nwn2f3Z!>uhu[Nzr jdHX2AVb|qh<,q(x?BMA$5%[%Nry' );
define( 'NONCE_SALT',       'BN/*x.I},-E9UF#/EP4.;sYP?e+WRKlp6!(CS|akU4L#=2klie|7[:kXS3p#xHLv' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


