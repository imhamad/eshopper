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
define( 'DB_NAME', 'eshopper' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'hB1D.O<X#Aad0k9PH}8->*UQ&HD4-t;I |;sSB$H/%)+$Ne@l%.2hN{qsu0H:oY=' );
define( 'SECURE_AUTH_KEY',  'h&^vS6@}4w?Z@x--}Zaodv_I`]]Iwk6bd_:#vdpYN|5;r@1QVDpg3{:n`qWzlo P' );
define( 'LOGGED_IN_KEY',    'S[=1/Mdy%R:jR!f%t?nj;^Wbp%myI#B!n-^zH;u*pP|#_,<k`5+gNrDsx=1a;*0.' );
define( 'NONCE_KEY',        'H_Xl#AW_~viYc=[X_>cv;AQl4>tpYOz*fd%?9;R?1|]bx+CH!F4-ywWal*sPGfqK' );
define( 'AUTH_SALT',        '[2VvnJv_8obTP^GN?$&-]h+u ffU)aEt(7U32*{[I3/1o<erv-!Topl5NLSG^Jo.' );
define( 'SECURE_AUTH_SALT', '+=A?SLK9Mhn`8|e8?$<uRS33+CyHUY*dKOMXcFVtFr{(oPA  /Wm,K89[+=41]pr' );
define( 'LOGGED_IN_SALT',   'EszG%($makIU+fZiA=3+sso]}yYpzNh<H2EWdHrF?ttNOu0x/l})R20!>%RTRt?H' );
define( 'NONCE_SALT',       'x< @l@ /mFrsMEuHp%xcEsWX5lfBb,NxSQ%z,6.YJSE*>[/|<cKU(cg.V)E.IJhG' );

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
