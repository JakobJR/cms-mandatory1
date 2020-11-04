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
define( 'DB_NAME', 'wordpress-ajjs' );

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
define( 'AUTH_KEY',         'LY4TmF*iC6l7O+F]g3gr7ViQ^=(==X!?->EFC9{XK2}fN,/?FGXgspgQJH>2qsBD' );
define( 'SECURE_AUTH_KEY',  'S.w3k5}QzUL?p75z&;QFuL_5X`$#ec<?CCv75P|<y2)o;jxOa_:b*?fUa4}>dyXY' );
define( 'LOGGED_IN_KEY',    '%0y,=18A14!>$2l_sS9yU*PoU(jVv[x0,|Q8rxXIYax|ePng<-d2d*RU}d6~8zNe' );
define( 'NONCE_KEY',        'UsH:goZYZ_F=~J#fgyi_ld h3csm;Rg:65&?`N#>XVeU$D5FrE5%9j4!L7d[s-w{' );
define( 'AUTH_SALT',        '#uxd861R8UOHk2/A4z~CsEh5],@43moSdF&_M vJ~Inn}/M}9<Mp>P<1)SBN{5>0' );
define( 'SECURE_AUTH_SALT', '(khNxAGd(rQ40DRr7DyAN;zy~jhAN)D+ztYRg*g%{^L,jPUJv=,Um^mi%Y[Nqo6H' );
define( 'LOGGED_IN_SALT',   '|L`0%MDci2nA{~_grjdw!BlE*7qz4WMaC6>/0)7>CP.]s;Jv GEgQ)3+%Uxm%L_u' );
define( 'NONCE_SALT',       'RFGC3EWeZzVeR93pq+m6-I+*MQJ@9xVcJN%f=o8cPZnRWwNMHa)My,]r.f-!Bc+i' );

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
