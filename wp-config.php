<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'christoffer');

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
define('AUTH_KEY',         '@/tR-a[<dzBv=T)$-?x[nbMY{1Bi*ed.3!)v|Zyq*/.npB&O=K;7Jfk?S|swF3+G');
define('SECURE_AUTH_KEY',  'ultySS/d6,XdXC~X|J9tN222UuFsh?cRq7RN|`8|25HcTEtSM0maa=]8nLF8dV(n');
define('LOGGED_IN_KEY',    '%`b:WXX&3,<s.(@/OteZuN`xIvs B@PzR|;Kkv@`|R;4!h,4afR1q<M,VDs-;DJL');
define('NONCE_KEY',        's;%3X^0i$NR! l-vN,XLUFg5l?lI Q$U|26dhh[`)}lQ)%xj>$@>#I_98QU#Pg6[');
define('AUTH_SALT',        '_c>{<x2GGOq5N-1RH+BWSO7 jbO8=|b52 Ur0P_ ;-W7yw;ZHIe4u:ael>lI#FWT');
define('SECURE_AUTH_SALT', 'iRZh_Ek/Q6U?{i`v|q./m0,]Gl^n h^G#]||St,Y^T%F R&_ZP!{;/Zh(R%-U/|$');
define('LOGGED_IN_SALT',   'WJMv_A|JG)|Qr,&$Qhj`i$y<Ql;)vu0bOtK{kFkL`qeP bWZK+L`@rVvyveE-son');
define('NONCE_SALT',       ' {VzaJi{-lD{@=|p&_]EC-1]kpj%DQc+s+E%d~1`<4_4G^o{WN0}u8$MWyWpf%O,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'sv_SE');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
