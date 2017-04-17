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
define('DB_NAME', 'db_partia');

/** MySQL database username */
define('DB_USER', 'partia');

/** MySQL database password */
define('DB_PASSWORD', 'sTS7QJIn');

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
define('AUTH_KEY',         'FAE/W(/J~+3!l(Xk&h<$+h_!hOgjqo9[EguJlAzO3lf`DDeO2|mCT?Pw-:h3Zcsx');
define('SECURE_AUTH_KEY',  'M]rCtw(S;-e(uouO-7%ML2<yAm>Q2,1ruP._K-&;?S+zbjL)qhF)%W~f&+;c2[n>');
define('LOGGED_IN_KEY',    'KcP;#V`s-e|MF>&ri_lsGd/WRU_2e{.?obKng5o 9dO}|)`uM:5/(Q)$SCcCZW-?');
define('NONCE_KEY',        'LWQ}6-e?r4|>3?+v@g?7-cV[xF- oP:(%^r=+o3Kb++oE8#IF!2?:Dg^Z@%O4-ob');
define('AUTH_SALT',        '^PxeM5aGAr.k+V4lipim=tTw=ejtvmL`_{VIo?wo8.$Aa2A:>]*u,_XvnZ3w|uY|');
define('SECURE_AUTH_SALT', 'P3,@qOWRF^iT$ZtLLMr#6r!lF|[lUnfj]]f^qB^es95+CF==Tn@zEAXhf(A~~K>[');
define('LOGGED_IN_SALT',   'p3A(>A|%_t8jn-hP!!ITY40(t Zh<+ilT](! /%k^v+m! KR*vj$T{)!IpS4Gf}H');
define('NONCE_SALT',       'qD41;e[MCPJG|,Y?YyvPAuPSMdz%TJZ$1YW~.?W7tRs3gv|#y8kehr#Irda%O=cB');
define('WP_MEMORY_LIMIT', '25M');
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

