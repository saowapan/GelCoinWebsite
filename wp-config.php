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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '3206cbbfec5ef2f3d42140f5a89ab11a805479b8f9fd5e9d');

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
define('AUTH_KEY',         'UHMKl,gEI6M1LF*`G`4Uq>VTUd%g@C=etFAUyP-46KP~)qb7b0(}f3X_zr8|Ml{=');
define('SECURE_AUTH_KEY',  'tl>4z|J24QuzXq<!94D$FgghdHf-o{!3VQ`1*|_lbQiD|V(307PstTowe(KN[bpu');
define('LOGGED_IN_KEY',    '+uAo3&D.k[v}_=4iy1Lq[ r0c^pa/$[rLzrE9W%K4!Ns#Z9Y/H^p,P72m*DBleFU');
define('NONCE_KEY',        '5`%NyVQ]0Je,+U$X{rF^HyU9so3WQr~%oKVUgEs6~YU>T!.~Xv:rA<BD.nmo.^uF');
define('AUTH_SALT',        'HRnqk}IK5G-+rcq`Q=`n2:2SQN;*L3`OFH9pMa4:+<b}R20Q?6L>4~SsR}O_+7j$');
define('SECURE_AUTH_SALT', '}{Qz0:,NjFhiG S|u8/Gghsp[=UU/L>)*A{;!$Mx 9]%[42&kU3aiib52?2o#PlP');
define('LOGGED_IN_SALT',   'Q~&TlJgK/6#Oef<E]s,l[9b,U[FPn.qBXsr8 uQBg7=NH]7{NcV;67_}7~;&0fIl');
define('NONCE_SALT',       '8aVrk&^!sk.O1Q?Eb8?-s/ nyNz_?Uc;p<1^Ay]jP#NU;T[ElI7i-C3|+:^*tB.a');

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
