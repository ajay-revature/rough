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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define('WP_HOME','http://localhost/rough/');
define('WP_SITEURL','http://localhost/rough/');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rough');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Z}9/64lv8]mg6?v3c&(Yz@&6sE<Rr[D5yFU}+oE@xcS=lB (9,fwk4GOT>qKTeB0');
define('SECURE_AUTH_KEY',  'lTj9ef}ITg3k Mp]FbB2:^~(+BUm[PboL]l4BoC8H71^%TsbgG)gw~u>wh)sCbl>');
define('LOGGED_IN_KEY',    'a*V7a[IiCEyd!HK~cdN;~*3Bn(o%~m@S@5G<!M-s0hz<xR+@!r^5(IL(]e};R`Ot');
define('NONCE_KEY',        '9,u1zQv_BBA~0yp=5(jj-*-.`cS.D6Kt:NV4lt1IJX0H.P1kX_V,y_pZ:x*)|4hk');
define('AUTH_SALT',        'bc&3t8H!x/ff,5jRGnuv]A?[:d7Zn<m=AQRzJ5{?;(~wJZ:4! Vp}PA,bhM_A5O~');
define('SECURE_AUTH_SALT', 'bj-h,Ix x,`~;h(^<tw`}8.;Aae42WoB:4#%[T(`v{hfB22hu&>X[Aeyu+;NFt3n');
define('LOGGED_IN_SALT',   '7PqND0#U0#0BJHapq*M+FFK+Gr(fGQUTcy-hG~93kQ(+R5h%+ofJW44=KRAypauL');
define('NONCE_SALT',       'u;6]}@/Uf7HQb${uw@!JP~jt$PiuSQ]~%x*>OL_@J.Gt1?7N`%*?_v$P$=K)L^J>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/rough/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('ALLOW_UNFILTERED_UPLOADS', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
