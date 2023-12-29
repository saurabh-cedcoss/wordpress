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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'nk[:OAFAkF]Z&R.GdKh03!M}X(5j&rKZu?v:iqf*dFJ,y{49R_0u%xc`CGw91,]O' );
define( 'SECURE_AUTH_KEY',  '1bX{^5fShOL7L`1g=|6nB(tT4;g8x:Uya${X&ee@i2W`Cb}Qh^4d<_sfOL!ekKCy' );
define( 'LOGGED_IN_KEY',    'q]=?+O?ko9ESyYGy;eUnfPPX]y4]pC>0]aWMzeG,JHh(JR;@H`hp|:Qw%PI2Qgwn' );
define( 'NONCE_KEY',        'vBD,#COb@7P3}>n!HV/:=O<u+Cv~0yb&t?Wr}(C%$Oo*VLy-_(4[U5>y3%;q%.!F' );
define( 'AUTH_SALT',        'p+w}cqDKR/WYjUoA5JgYM5`V7+A)0,fNZ H`e-~4chCalBuaWLdV*MfEPCFomQ|8' );
define( 'SECURE_AUTH_SALT', 'Tf5bH5ntSBq5{HcG,j~:d;v~e0cVh /Xzo}=Hm7qic{e,yl{(G2F{*l?)%l^~eZ-' );
define( 'LOGGED_IN_SALT',   '^i[QH3DQKtr`xzx8!dQ|dkvbtx@mLhkE}7OTa4_nnr[5uLW7.<K x^C}4?4y[`}7' );
define( 'NONCE_SALT',       'fC,a|o{$Rcm ->v1J4NuG~>(z/g*o5s#cscYZ#|GD2kudYw;cYP4#58jgER48+XC' );

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
