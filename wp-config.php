<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp2\htdocs\mykolo3\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'mykolo3');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@BCcM6z93!lS-80MC7,9.b!Gr*+lcgEbAd::Q43GaMbW7q~q:Lk)QP%q~(Dc?&Yk');
define('SECURE_AUTH_KEY',  '3G+gm~ #%Qb`#I|<74i#93l*H(r-,ZEmDa2ER&ms+=3W[z2(/-gXz6xA|9Zg*KQJ');
define('LOGGED_IN_KEY',    '@-9u|[dS+)+L`%}m VNZ: 8DKWEl|O0};2mfGNEt4p5rCy2B dlN[z>%+&`7:X[b');
define('NONCE_KEY',        'kqbGCU~0z~+o 8q)KXmj^]nKoOK/Dp8l`)*cmCbd^~132OewG?_B LPQA`4W?I3w');
define('AUTH_SALT',        '_i/v2>K!6U<<-h3cN|?V5]-~6DS:&5Ta6UmP^z{SH]>G#0U@P[cwJ+hG0U+AjldD');
define('SECURE_AUTH_SALT', 'yjicpw#0xF %CtP3r>adex/}^Wu<!33AVVF^FyN,M/@KaAGK7paVsE$xlUAFQifb');
define('LOGGED_IN_SALT',   '(<FU%kx+s(9i%*mw3sN2g<e6#}L|^eiqkR)+ZL=U@4AiR)HtTRSGNX~<}^BbL4qe');
define('NONCE_SALT',       ':rwu^-z9Rov3<[>qshvv:(/3 L1]K~CSe-pv:J--}Coz)fMoMKP$N9---7kTXr-(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
