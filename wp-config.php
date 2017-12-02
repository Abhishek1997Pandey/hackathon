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
define('DB_NAME', 'abhishek');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'W9apuJDfA>p72!x&Kz+bn]etj5pQs%Pm7 Q;z{?uW5kEa7G|;S6`!aLp)dNBx;.$');
define('SECURE_AUTH_KEY',  'NkL{$=wH#wK|y{[h`Mo*Px/+;thZE2(%}r@H $<Aabrm{8zY~HdXs&0%{,<&PYhO');
define('LOGGED_IN_KEY',    'OFVdEdz;|(= wBqjZzJ4tLr]-jsZ=/aBdv%8mg}>YR8asT]-t;uP+O^4S9H6^Y:z');
define('NONCE_KEY',        'lIMA0SW?IbH<g4N1X<(ScW[yy;t.D.7Sc.p.{CkS2y66cTBMz0A2QQsec&hdad@h');
define('AUTH_SALT',        'U6|REEONC2^KQD4E3aOjk X=9m>&hk?uVreUWvBbv~IYQ1z~M4^PN.7!cQQbQ~Tf');
define('SECURE_AUTH_SALT', ' fgKKk]T^08Se2sJl I||G4A:**Aw..r7c,Q1Lx8/W.S`f{NY8XFdGaI!8#c*Eds');
define('LOGGED_IN_SALT',   'Qu=:RrFW-#G[uY?Sa_]Yb@<G)lL|<p:<<4]>M7x%=cV^*l[EPPE|9a)rM-VDiC60');
define('NONCE_SALT',       'B;O8M(J%M)|f<J(|+wpc%`S58kBdZ6&KL2l<sJyOD%rTwhJrcswmkB`2d+04aToh');

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
