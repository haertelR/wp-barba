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

define('FS_METHOD', 'direct');

define('DB_NAME', 'u275908519_barb');

/** MySQL database username */
define('DB_USER', 'u275908519_barb');

/** MySQL database password */
define('DB_PASSWORD', 'batata123');

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
define('AUTH_KEY',         'aS3x$v>tJ=#:GosDT{*n4F0=deRD-jm%>4:6dVIjsO #>Z6UWAl@&Z*lnp@jQp4(');
define('SECURE_AUTH_KEY',  'KSX8S9^_dVNiL@z{>IB5m:usr[MH*!j 9@|Bu HO[+,r7$v1@s[ad$4a*Rh-DT!o');
define('LOGGED_IN_KEY',    'FX9Q(<A[Bh&&uPq[_:-Tqc2E>xhD~_ya1)FM%uc9%#ECN@LLcV}TaP}pISr=eL{B');
define('NONCE_KEY',        'O]Bh!;U`sJ8)RPkX~U9h>Ah_cme,ydF|xq@p,+-bxRB)=Og V!furmQZJZ)]6d^F');
define('AUTH_SALT',        'zO-O[2V_U85c`al/DmD]58M5j;{>;2-4?t6z^7(*#Nnc*D@n1Y#=WN(`LK:xc=r>');
define('SECURE_AUTH_SALT', '1W*/Rk(rM;Taj.}P9XNU)O7B8eJ>Fx$a8WNS^@q}bCdRdD:][5G,uL$o@q!I<?Ax');
define('LOGGED_IN_SALT',   'MJk.$BUFn8t ugpT&GR;1N)Luuq<~ol?r_4_9 &#Q2MK`Xf#llY.Y<8oCKR{t&2a');
define('NONCE_SALT',       'RTTq362{5RDN+ dZHl_^Ue_UWO1vz#?.|^v=`!dB k+ LjEIEs2P!azV7)Y9:+1X');

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

