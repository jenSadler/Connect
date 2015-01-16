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
define('DB_NAME', 'connect4mh');

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
define('AUTH_KEY',         ';R6}g|T9`+3.}];&E-Kq)a$#v-I[kGijmdo1zk{*jzY+NcekiyR8-_.5}NUY_89x');
define('SECURE_AUTH_KEY',  'NA#$gXP~IaUau^ZMst4jr%:(AOo<)a;~ozj8inSEmy:jln)vc0QtJIxzFI-I3ZDK');
define('LOGGED_IN_KEY',    'ssR]0})ou/ pj@ Tv_z4reJt3O[Q`1c&$PRNm2KXWE+#|CR]B?[Q1YFqb{Hp%{E9');
define('NONCE_KEY',        'gVFRHmY}:1054YFs1-gf#{BNZb_|hYnNH5MVo|y1UoAxb2.L|:CJu<;_R(H^46/P');
define('AUTH_SALT',        '&yndS#FG@h|rA4i+/fTr:@q|Wv9~Wg} v&8B}0 0<Mwz:Rz|{t/X +r7,V?!33xG');
define('SECURE_AUTH_SALT', 'G-HMX&Me>(w|Ac>VgZ|ogU JmeYl{1sgh{G|k4>5!DjQhJvf~7<:2y6/|sD-}ga^');
define('LOGGED_IN_SALT',   '`:O$9AH9n_S&Pn<COx1$V/yEDz5n3_iN2x43x.|(Pun&c:(vo<T<$v`-nmO jt]Y');
define('NONCE_SALT',       'QDjL[85R$5|qC`dH[&mIGzTz?H{ufRTVP+N6ZGQ6-+/+KY)9U+-wRC=p519xxOI&');

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
