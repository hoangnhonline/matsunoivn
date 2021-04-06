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
define('DB_NAME', 'matsunoi_vn_9310');

/** MySQL database username */
define('DB_USER', 'matsunoivn9310');

/** MySQL database password */
define('DB_PASSWORD', '011a773d25c07fa5');

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
define('AUTH_KEY',         'F3E>R]v#Qk=BtbsCPEftA~GU?.8r?rc!u}ejb/+8i17IbAw]31SglQ]xQdA2VwU,');
define('SECURE_AUTH_KEY',  'g5eK#N`]t8$YCARswq-%Soje<AdY8O0B/R5)v,ygp^-[/VH>x|J_1l?3C%rwtv6U');
define('LOGGED_IN_KEY',    'eoAM@],R00199+%+d#ix<t5Bri,d k!ZgS[<%Z[p49Y{SwX7{L@7_:}rfcb4q.wt');
define('NONCE_KEY',        'K]E2W<3tMpcVM<c.44qDemJ>!#W1 72_*b-jVvd7>F/*>*(7/Jp Abe-G$28w9~|');
define('AUTH_SALT',        'hW%meTD;(nZ@S+&hbJ/RHEYgZ$cuU-ZjwSmV.A+a`fS:~|]>zYvl8[bnt&6rJ/il');
define('SECURE_AUTH_SALT', 'jT$2#IFwmAw7)ip{Xm*.RY`T6,JDnSz@eWwDHDORg*.@#U+Z#ZQ oKa{dg)WRzKX');
define('LOGGED_IN_SALT',   'EAXI y>_h.2g[46|spC$e7X=TP8*}6Ak.hz+n4mKMr^x&LP$1cYQmAX,xf7^Ha|f');
define('NONCE_SALT',       ']Z-g|I.-Jh]:vD.bRT=x^f9D2N*pH?><RT_5owArlzkqi`9]Fw=V|],DNI <l2kL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'asset_';

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
