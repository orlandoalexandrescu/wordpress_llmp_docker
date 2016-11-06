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
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'wp_db_user');

/** MySQL database password */
define('DB_PASSWORD', 'cucubau123');

/** MySQL hostname */
define('DB_HOST', '192.168.50.12');

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
define('AUTH_KEY',         'se}4B_iN2Ta?Z_D6cdT`K?Q]Z7 &z|ATT>ek=[hz200LB/scs<Z%A6RyCoM2P{6o');
define('SECURE_AUTH_KEY',  'e;,Ub5+wK=cbL>Bgz{N8C`G,!Yx<_?}%]Z3HF0Te=i:HQ2$Vl?#uHj,|1|x<ouzn');
define('LOGGED_IN_KEY',    'Cs#(w}s6o~v^~2^id5U#l]iyK mj+-Z#$>Hf8&,IgRb,|3&23J]ui`I8c?*I3&ss');
define('NONCE_KEY',        'VDMKu&-f0ry={!Q=W+GS~uru!TanVF%ewh2h4cs4|M<r,7N@>z<20<r38,A`F}t}');
define('AUTH_SALT',        '&,$r%V_&:.1!,R[9bmw&8%)RS59o+tv;XnfRr&7)kdt/7PtUt4*?^)Gc+R,}IRPm');
define('SECURE_AUTH_SALT', '&vUwY(=@)lTsg9c4aD8jh|nMA]1XC7+iP2>e;f!}Kwaf;s]:Sl+ZJWvPTdD%V)uZ');
define('LOGGED_IN_SALT',   '@z{rqEBt|t(04i:@#N!Tqfbo~{94eH$|q]ri2;*E:fhw|v>/!)x9,yey$v7F6/. ');
define('NONCE_SALT',       '=;uL4_50HMM},zm@L4]O3Nb60^?l{l3;?QN)s} lzvJ PQ+]e8Cx-bN!-v9?Z:)T');

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
