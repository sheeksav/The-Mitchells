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

/** MySQL database username */

/** MySQL database password */

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
define('FS_METHOD', 'direct');
define('AUTH_KEY',         'iZKD/X.&Z.}AxJ7}vj3qrpZ}%lZaRm.8N_|;@E.ItQbhLXc<bTb`ZUQ1`%l-&nn1');
define('SECURE_AUTH_KEY',  'Bhtz%SIg{(UP91~dVzrW=}eI)Cy]Wh6j!=:HFIJeqPzm2?T2T-Sf((Qv1MPG;yKV');
define('LOGGED_IN_KEY',    'E9$6GQ%dAR4Yetaty~+?7!2]xWcm31B^3BZl@%^sm02I9|3UMy=1t.t=[rHtIAP&');
define('NONCE_KEY',        ':cI|5qY/+lG:l_vEcCVF:NjaIf93S.Pr=uJ%.F_5yc#GX|N}(-%4ls=O0%m89j;,');
define('AUTH_SALT',        '4F*$+IE+O9f%j6G-6otN|M0O9GM4@!3=(aF~m _{9|DBH]|vsjgqzQd2<uL;q@>F');
define('SECURE_AUTH_SALT', '!6eD}kJU0YtXDN^gJuo#5T6rnCdf#O}aWr!zt&QcIT/d-N+?!.5[-*8KC--}j->K');
define('LOGGED_IN_SALT',   '1jdq^{d5N*?Qq0RR/Qv+L-e$yi*~2F0MCBqfI}[JoGu>E=$F)H@x@F3MUdV6s#E}');
define('NONCE_SALT',       'RKorw2^ud5x_c5f:Nq;Z`1g=o9<vf^_Mo4=Dd!%J-(hnn$Yc/<8w6N jSG^fQe{~');
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'OHYqrhgn37');
require_once(ABSPATH . 'wp-settings.php');
