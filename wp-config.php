<?php
# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', '/var/www/vhosts/dulichbiencat.vn/httpdocs/wp-content/plugins/tenweb-speed-optimizer/' );
# END WP Cache by 10Web
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
define( 'CONCATENATE_SCRIPTS', false );
define('WP_DEBUG_DISPLAY', false);
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define( 'DB_NAME', 'dul55199_dulc65487' );
/** MySQL database username */
define( 'DB_USER', 'dul55_dulc65012' );
/** MySQL database password */
define( 'DB_PASSWORD', 'wc90$cZ9' );
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
define( 'AUTH_KEY',         'P<|AD3C6($eqv!hCQL{R>|&?*$:508,:N7<Fn/IF3HH>WluvbiSyQf:(?.{m z^w' );
define( 'SECURE_AUTH_KEY',  '|@/XJUgd0yOSVZ?h^l@wziN9]zHMFcNzT=RHObOl%?M.8c,pT#b@>YOma&R3-t{i' );
define( 'LOGGED_IN_KEY',    '+{CIOw2%~La$/sa6].7Ozp(-~PmK4B*MsH{P<N$~#`B7S4&ZDI!:oj?XZRuBaP<@' );
define( 'NONCE_KEY',        'L?}u}KA:$:[$DK(T2KoVAn6V-[ZC<(xnmC0%_=Ma$As $35(b3dPdqC_{cP7=vOr' );
define( 'AUTH_SALT',        '&^{T_DU7AmzecSE{$Eu_Kt)Z5o>v}]W71 ]NCxH pM7:v&?:GG+xFRrJQa]`nF^6' );
define( 'SECURE_AUTH_SALT', 'r)}+.Hb<UC=aNkx|W8ltQuB)/OaA-OUf6SfP|^3ux8<X.wxeQ$RdiB=I+Vt/F6}{' );
define( 'LOGGED_IN_SALT',   '-*CALPvtYLXs>R~91TibsXsk!gij#`:= R4!KQY,lWQ40(3knq4:S)8BQ6-m. 2-' );
define( 'NONCE_SALT',       '2k:}TB.6O|/>@z.^1M&Y[L,me*Yg%nt5kB4F5MCjv&9M>wWWKCP<3W6F?z<YDRcg' );
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
define('WP_DEBUG', false);
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
