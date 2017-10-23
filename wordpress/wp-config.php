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
define('DB_NAME', 'wordpress9_wp');

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
define('AUTH_KEY',         'SLY Lh3)Ga9>g+zcH5;rh*f@R ,oB5N3Sb(~C/5$zZLz;;Bwk:1~7CNBU~<B[dGf');
define('SECURE_AUTH_KEY',  'p:D/pHJ=THsP^2+.aWH15)s2v[`4+dFwU[^2$x@+Isb`E38X8dKE&7@H47Q0Sz}x');
define('LOGGED_IN_KEY',    '(|p{Lzu9{ze(3+a7t#dt^tr.5d,t8i`w+vm*wmWzV*,U>][UBgLmoAKlu>7RIPe&');
define('NONCE_KEY',        'nAE{3B;0@F<=A1pD`3f^e<4uTzU)|x$.s2St}L%1^H`VgT@4^@>m!#![!g}]vMZz');
define('AUTH_SALT',        'lL`qvz|.rsMVw-.bCg00MH^O]dN_r>p8:#q=C,uMk,@^g?U>CF.[nzbeS9/nKN0`');
define('SECURE_AUTH_SALT', 'Q1feu>x54Ziev%7!Ztgdy/kc4q}bv2.fw-i$~T8>U]WJv.Q18eo7fE}SWu:|=V T');
define('LOGGED_IN_SALT',   'C6T`#ktc2X68=KS@0Ke:;SA}u&X0gD|GuL9Jg)B(,[]F#$0b/U3^oH:,3}C9TUS(');
define('NONCE_SALT',       'I=DW.nP?0=5XLZlF$7%nJq$:$HzW~S!s>UMQ7}orM L6{hYS`9R?G^.B31+t}N9v');

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
