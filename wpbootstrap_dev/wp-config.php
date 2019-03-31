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
define('DB_NAME', 'wpbootstrap');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'rGw+@lyCvUyd9{n+.]%Nn}1:z5.^w.UgE%<wcdNAFKO]8Zxm|2&.nIDjUq#H[@d,');
define('SECURE_AUTH_KEY',  '7/8?loe+gBHz3e(<9Akey`;M=@Zt-Jvovd)sajUFSup+%8q HD=@q5zP!_M68<Lx');
define('LOGGED_IN_KEY',    '<2dkaRC&*}w-W?9[J!WRvj-Pc=CEi_92Wr5;*Ti$&jW0l^^R<_18Btu&%.|y+c^B');
define('NONCE_KEY',        '?L0O~hQ]XJ1z8L3>M1Xxz!8eb(og=-v+<>9t]f0/UaH?Z5HBZ[X$m}3=AJ2pWY8r');
define('AUTH_SALT',        'JN,>gb[~#,5NH/xEjE(0>*rA]3Jhklh^8NfI#X@/SIM&@W;k(3-5EX9+1MsY)9mc');
define('SECURE_AUTH_SALT', '6Xp:+9[ar:x(U=2*GcZpx7ee?f4/2ug6P:u!jydp0KAA7V#$2Y;6ZCeBoc4#(bNE');
define('LOGGED_IN_SALT',   '%m.]chVN5Ig8cs}OM/uw4.*Qv&W^I7F$)zWsuQ.]2v$dJq12qM6][+@pHF|XaanS');
define('NONCE_SALT',       'g kZ7DHv7}W?9G|I[32{6lq|IXqZ<!ne]q=o`t[Ya6MiRB6ZsBk|3G<t,o1mVNy5');

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
