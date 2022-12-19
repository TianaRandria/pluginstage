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
define( 'DB_NAME', 'amsd' );

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
define( 'AUTH_KEY',         's8-.dn3$+kJ<U$DI#WwvQ{0O;*Zv[,Fe2|G(>93Y!+K5|2=BtiQ#Zh:,Mm[H =]X' );
define( 'SECURE_AUTH_KEY',  '@f?jwcp=vjB.teUm:3L>[e%Su_*{*9/eW+ZuvB0)zl(d70BU?&&klN=(t+-TM2gK' );
define( 'LOGGED_IN_KEY',    'WczSgNxjQpl;E!wvNEE^1 kWr*f?<LJywQLEK)9QV$D6Wf)VC~J}~MTBz<#%jb7%' );
define( 'NONCE_KEY',        '5:o.7]G>RAz=8@p~uiXV,Q>*[x(]hsZZHFiXvasykWC]QDEQ{8Wp<1$O~g7poVX+' );
define( 'AUTH_SALT',        ';Ns&,Z =rqal3[@q9/$UFzLKQ,<nXj1h]!Z*H&O#&nn3@K4}Cp E3L~=gQ1*m<NS' );
define( 'SECURE_AUTH_SALT', 'H7}4BKn3#]JCk>x*6iKH54QAt^x=wzSof(5Y{vq)w/QSxdoD6HUH8r,w;-05NBSK' );
define( 'LOGGED_IN_SALT',   'u@@Y5]yT.>;CaKd;@C!t0$B2#a42e]ZggT2WN[NFz9YHYxrwAWqJ |(Flb;>If/l' );
define( 'NONCE_SALT',       'zI6x%=x2fL4]4|A]fi;e^JbBbo~xI<WW;,o=gojw@]!#Rl9T& 4F|aty<1f*)gQb' );

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
