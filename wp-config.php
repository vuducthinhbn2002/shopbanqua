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
define( 'DB_NAME', "db_wordpress" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'on4?82<as/0OnBtpR$xGA}qU$O&)Y.&U6*Tu-IW>| 7y]> =)/h[yEwSV eAa)$`' );
define( 'SECURE_AUTH_KEY',  '=aBe0mhEvYiaoUe.a{HEy= j*h<b^3L%{Js|f!D31W*gI1n0)Lb6w&xSDOz!MJ@N' );
define( 'LOGGED_IN_KEY',    'C,!nqB)31D{VoHBvfCEW> u*IiZx[+F2?]2Y<CrSR=]gZtbs?wvY1;H[JR8ZMhnR' );
define( 'NONCE_KEY',        'RBcUXH~s^ywrCNk`-qj*|%X&Nt%Lb~QpG|+SP9!R$EU,Cw!sT;<DpOz4Yg_,U|I2' );
define( 'AUTH_SALT',        'K=K~NW_3A5vG~RBFWk!<ds<d. W3TH7_8@.-z$d]Q~~the~T<vWHreG`I3eUll1p' );
define( 'SECURE_AUTH_SALT', '#eWmA4`8;a&]l|-5WrDlwyJ48&eM`1V;}Bhdm#%6^La:t@ |feI/CXS7vz}<+/eg' );
define( 'LOGGED_IN_SALT',   'zck3F43ctZ+2rGsT4*<g*iV8n-hmat1N8~j0=@MR}CHSnQZ;ry3>4Sh0V$2)w)gn' );
define( 'NONCE_SALT',       '>rdh?UWGM,o?1vE1z9Q7_6h[YY3e*E}(VFHAvk~~$B@vd<F 1O9WcvBbOVo6&olU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tp_';

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



define( 'WP_SITEURL', 'http://localhost:81/webntt/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
