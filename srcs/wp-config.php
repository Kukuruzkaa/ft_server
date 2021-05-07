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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '!r[x&{+4f_ 3(N38YWr~XJe[8O![Mg]QGEy6rJ3MLL,eYPi&t1xuv^:PUR#!m+{0');
define('SECURE_AUTH_KEY',  'R?KS+Gqg9 KG2{x-+r,5~&gvaqv<|&)9P!4NsW/ gT>zVaNjDo0A?x@$ydx`|jp]');
define('LOGGED_IN_KEY',    'MX?;f)Pnz|.amg$L UHwe+|k+)Ij_3xI8RJE#oUk~kv92Ayo@@WQ<+|0=XR*0|r-');
define('NONCE_KEY',        '}a?21uKDh_j_7DneYoqB~RL;nN-iv|{3sxwxz4smn!-]*[o}o#[u9oY#w:}@#|V{');
define('AUTH_SALT',        'Qc j$hjaTR:]H/Tas7zqtuPB1^)S!1Q#^(H;+X<D;@jl}u6OtI)~5=g%QbT,+izJ');
define('SECURE_AUTH_SALT', '4au|0(Hv0a0Lx>-HYk*nlrv:+D[gO;x^cz&rIn_agp+3@23^wT#!]K^tMg;qvK%l');
define('LOGGED_IN_SALT',   '5A-YI1!em0~;J-#pZ!eMysdsgi~7?2pnMTG+aye5rL=LzZ@|[L1|N]:0*jvGpt39');
define('NONCE_SALT',       '|;pOpwZll+KuB|mbnk1U{`p!5+YCr!G fFR$DSC{)2sOfI!75;Q2xl=S@k3)8Gw#');
    
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
 // Enable WP_DEBUG mode
define( 'WP_DEBUG', true );
 
 // Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );
  
 // Disable display of errors and warnings 
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
  
 // Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );
    
/* That's all, stop editing! Happy publishing. */
    
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}
    
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';