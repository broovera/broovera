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
define('DB_NAME', 'broovera');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'prova123');

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
define('AUTH_KEY',         'w#UK(BX8*&MAAzNpmC$31IPlj99R~)G<(FD28#,?AW[~Ig)tv9F|>sU|!ao5/2_H');
define('SECURE_AUTH_KEY',  '8`(I}^^RkZT4@}mRn6/=JlWXnEq~Y<CTe=QVkeY7j>K0EefU,%Yu#Z/!` 1HbV]^');
define('LOGGED_IN_KEY',    ' O9c$82%o)Ep_C#q=kDq2}ed32?Rge:DvZEI#P/7LW %NzY%N7lLsM/M5HNQFkkD');
define('NONCE_KEY',        'D}SU~H*=E~0<=IaW?.LdO1`nb`B-;}*pZHjNkCEfo@#sH=go6g25{IzslyAH$.A$');
define('AUTH_SALT',        '!FB7-*Oe( :S QwtEz&-g_bk(7)Vc9CYT};!k/u5fPc5nc9wpZ=ym=(ZlcPr1c>q');
define('SECURE_AUTH_SALT', 'pXz:,RQyAL]U2Q=Y.Gv;*_(mlyaM& 1NEIbg_1L(spCf9E-*6e&r^f@<5uUf>B;g');
define('LOGGED_IN_SALT',   ';*-*Iy4NGZ~{8r,kkeAYt]rK/%1EWke@q~l7&Ue1SY1Ly^U8O3pOWjZV}~F4/U9)');
define('NONCE_SALT',       '`hZ~7#m4qXZ?P@7l7M&WgBB*I|KhE!+;vP_*qsv-ZQ=j^?/Oa@hG!0PN+! bH]P$');

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
