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
define('DB_NAME', 'wp_norpor');

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
define('AUTH_KEY',         'l!jSO5S|RUJ19L]XEOpnd9A~7rfo|`1li};e#&>(UY5^ [3G5jF!8m eqU zzcsL');
define('SECURE_AUTH_KEY',  '~UJ[Ju=i,v7(Z?Qk&t>^@Fi}s}Rx7P/L4#9g=L<$3Uj*&7A8]3+EwYzrd6!vLM`L');
define('LOGGED_IN_KEY',    '6-!9J*pciuEzNoT7;n;`DR/9ekw~yVn8JMJK1GMQSxB!aF^K?(X*2U;CAiV#C9}E');
define('NONCE_KEY',        'Hr5x8t(c],y}uOE5/FczVWepP8P(L8J YTk]u@io;S`+06)*Bsu?r0VS{IOhrx&X');
define('AUTH_SALT',        'yZ=(o/ +fhHPu@90d-jX6Mn${mO|6sG2 5ZkG?8*[AVexS}7$Lk-a.e&hR:v}Jz=');
define('SECURE_AUTH_SALT', '<7t$.Qp.K+a6/p}PWA9(k]H&q=zM%s /elvhh/z)7p#}b69=?ZRi,T/aRMAM=N#E');
define('LOGGED_IN_SALT',   '!|j DX^/rc}/_Fh74=~5QO)q4QclI#ad%]K(>HTK8m(j$9::N:,^qoyQ*LQ3%uCa');
define('NONCE_SALT',       'CE]GoE2Ro1|d$n??6dF(q@x* ~auRdHh-k&q4iVk6&h{AgUnKX5ViBYSDNO2Mz>X');

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
