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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test_sawubona');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'I!K5Tqr2ANz3jtkNAllC8.eS^)Vd^H}/VE]@ii&UJ*n+27wAs^|j}dKhxOE9Jtv*');
define('SECURE_AUTH_KEY',  '(%Z%oW-1;$re0aooV=uH;&O=Ky?I=1=X?)__+>|iT4d,=y|phNuN*B(KMTx}U@.5');
define('LOGGED_IN_KEY',    '{8HTcAA&[da7(0`V+`6.060+[qF(i[N#buxElk%T84unP{PRM_[Q`a[3{l[<m;X;');
define('NONCE_KEY',        '@v%~U]{f|i1/*VLPVqBq>Z~L9+~NPgEAV3Dx%5RRcQJj)wz<(KBX0Ey5oK6 ~X,N');
define('AUTH_SALT',        '=Yc>AR>eBR_L^{/un3l6J9] LJl$xA!|iENquqE*Vq5CuoP OjK7<fAg#$G*UHT5');
define('SECURE_AUTH_SALT', 'CB:m;WKK2{<i+E_G~,wQOSA092j6Rc~qvdY]Odky1>RTl*gsUl@&a=4kQ7t/2_v(');
define('LOGGED_IN_SALT',   'w&?-W?z:y4[D[R>-Aw:)mwKNBV=Acz7&jF8lTmOH3g{<^_cF*LSRkX,+:xQ~11u,');
define('NONCE_SALT',       '~%=0[RO0H5Z-/iT5Pc.6YfPtHPE5z=Y4hoAzja!]&b?xS:@O0%hFW-s`Q)*s V~U');

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
