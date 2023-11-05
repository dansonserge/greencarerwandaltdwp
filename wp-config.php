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
define( 'DB_NAME', 'greencarerwanda_db' );

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
define( 'AUTH_KEY',         '.OFNZZgO=h<WB}@GO,(mOM^ LO}p=`S4B]gN4Rb)=y=Ik_-D=w1aIG4sk:4`TV=w' );
define( 'SECURE_AUTH_KEY',  ';;Ck2& rFU*{cKPSYF;v8v.!XXR{XFCCM].(}NHRk gg<ZwuU7?2)Sj/J{LcHj|d' );
define( 'LOGGED_IN_KEY',    'HuxrU<h/,n2wIdRM*e5x=+Z`C6.]U[c}:~InUr-Y>.;=zh;D%P0S|7u(.^qfgDt-' );
define( 'NONCE_KEY',        'A$}6r/av30IN/Aa%w#$NVgJ9(2Nd$2CY7%5%+5y7=Ru@&j C|Id66Kj&OA-wD9bG' );
define( 'AUTH_SALT',        'Q0_7E3CIY2&l0{cuaSnG<EBx_OvjvH.teyG@~9X,ez}15l[=*WecHQZbm^: 7<cQ' );
define( 'SECURE_AUTH_SALT', '.?20>e,H5A~j~;{Ac/kqSD&c6)70;7NX1? hb!ES+EGZ2G1dF1@smf(oO`3x&txq' );
define( 'LOGGED_IN_SALT',   'uC6eLqB/L~mtd?UKbz%sx03k>0,QUOJ-kV }wh$&yXP8y`c!6tv+gkFD7J-?(D>9' );
define( 'NONCE_SALT',       ',c4IrrMjAt?aT20F_4@fX#`,pqnzf_E~?pu=}WcbT.r a~:<w.oB%v?K1:-sf$VS' );

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
