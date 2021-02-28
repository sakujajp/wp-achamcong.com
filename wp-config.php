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
define('DB_NAME', 'wp-achamcong');

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
define('AUTH_KEY',         '1)A8B+L lH_TI2)$]-=@5mD|i?DA0Jk;%t4EJkD3|$FsvS*RZn%igzJ3tw5LIaMf');
define('SECURE_AUTH_KEY',  'S]sq>V/dco/M~s0*YA+d(2OlN,LRx^Us,or|7.,.=nlh{A=3x2P`9SX22({6AjX ');
define('LOGGED_IN_KEY',    'hg:+P2C){VMmUOxMD4ue%4{;8Hw]AIkzNe3O=USqdM&k#GII#Zbxa6 =p)^Wr*!p');
define('NONCE_KEY',        '!6t5G3zIK.Cn*h>9h7.9)u;4336?&-i=0AM@js>-QToTI&9a}DWujY8IKAaI)$X1');
define('AUTH_SALT',        'CWU};_DGF=zZ(_]r:N@C|3QY$Iq~2J,K%]@/0ka$EHUs`!De?tF96X~4_H34xesn');
define('SECURE_AUTH_SALT', 'sFA:K/T,Q=op/eG dB<*-~j0vJ[2:bqoXQSN6;>|3fiM=9|9Ugwk)V4`a}_~n+Lg');
define('LOGGED_IN_SALT',   'L+&)5Wc#YtOcYg_chPym`TmqH+N]}|@?8Ph+aZ4$`Gt,V.A[[sfI;&d.{Fur]%>1');
define('NONCE_SALT',       'D]d;(q/gFUu~ikv.jP:1s hs0c2x@%c[R[FeQjZ,-6&O,=4DvqqLZ>:o{jKjs;bT');

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
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
