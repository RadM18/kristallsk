<?php

$_SERVER['HTTPS']='on';
define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);

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
define('DB_NAME', 'cf97289_kristall');

/** MySQL database username */
define('DB_USER', 'cf97289_kristall');

/** MySQL database password */
define('DB_PASSWORD', 'xBTHgVK9');

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
define('AUTH_KEY',         'J{yMlCc_<^e{?)I1=R&2be<s{[5l*_I=[;.zIV[2,+Oh|]-wHRQTy#D;M4}{2vt$');
define('SECURE_AUTH_KEY',  'pg.{p`C,wK:s$05`d&8^ $cw,.w.M4eJS&nlzE$?=h`N6a0KUG^far1u*vq:g~S<');
define('LOGGED_IN_KEY',    '?N,eT059ZK(ws&k=bXo,{7PMI@J$+i1xcOh&ZZ/Km2ln0(x?YZl+S8]E @3xM[^F');
define('NONCE_KEY',        '+<u2o5TL9}@/frc<)ck%f4L/BoP6rHRRb7Cu 6~?B+oRw<Jr|(M@[=EF{WO]_Lgv');
define('AUTH_SALT',        'w5nC6<sM + b`%K##TUrSeq0q^*UCom.:EhLY(u~wK&|h.GgyGv/^u{R;$n< cxL');
define('SECURE_AUTH_SALT', 'HpVX{T<_=0UhN,.r2w9Nc<c2D+KT!WIKW!Q>Jb.w YLk2/ W-A[hVE=h|Li8=Gbf');
define('LOGGED_IN_SALT',   'qJ&RLzoE=C<0@:0@y@>:t].?Ai]/,~P|cxX/sd ]!e,pT`~D[n=($y&x]<WPmL|N');
define('NONCE_SALT',       'CX-9q_&r*JA!jCbqUqGH$6tsJUsByAZ84>;FPB?U85l|(z~rRakUF>.WnGaFKWcf');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
