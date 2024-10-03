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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'ihSrZpPg^PcA7k6ZQr~];Pq>(z_061S:j:;f}XZ>po:g Lv}lt1gv(~A{,JNY3dL' );
define( 'SECURE_AUTH_KEY',   'nj -rWG5==c!?E6WeM-K/n`@k<(kdMwA0U.KW8-c[Cvrbc!axWM^B>+z[bTt$}$9' );
define( 'LOGGED_IN_KEY',     '+@ P8`%W3sfD~,<Q^ WM${wwuXnzXiCAp%}OHld@e~`lxa1EV6UsGX#U6$n(`c/(' );
define( 'NONCE_KEY',         'QX?WHjr~Lmby1fRynd!_bY[PwT#OH-WuklB:^|72l_0moKb#vygw23L+kBOUdi.6' );
define( 'AUTH_SALT',         'fi)eP9jRQ?mMuH%i L4s<p|?5}a;Dr6U#)`R!co=[>N!kr{y$D7?quaufC&[bnsQ' );
define( 'SECURE_AUTH_SALT',  'aqeQ9h9,t{NtVSTm|(:!^(Oc{|vR=d?32Ow]v1vCT3a>K;;`~dt)SQ;:eLnB[Mzp' );
define( 'LOGGED_IN_SALT',    '&NeV~HQ/9_<T+aoA&5w9n-_xgNSu(p!?Q+,$/RRk[*]A^ VGF@To+[$+Tu&w@pfS' );
define( 'NONCE_SALT',        ';;*Z_o$8pJV[Gnc%*Er3ENS*8_InuvD1kkw^[hLNjQ9[q99uX50{TL{_`~[c<V]C' );
define( 'WP_CACHE_KEY_SALT', 'ZR~]_=CnMN9kNCRiMSdSAJr.MpT|qN7~Aj@E1S^xj9ofG^FJ>^^F-Plj_+Y/;_x<' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
