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
define( 'DB_NAME', 'esport-promotion' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jMzubz!42,pocbRDzWamPDDspdyzJ#Tw-zD&Sm:_^@WS6qI4!-+F9N$+_j/%|p]&' );
define( 'SECURE_AUTH_KEY',  '_G?deUg)te7+/>]4HYN24a.* ~c|2(+Ig!v1L%{ 0(Y~y+.S(V~Na!+>7_:0b+Vz' );
define( 'LOGGED_IN_KEY',    '.r:6w|kl u54)_Q4mUE -e7xs&(+5a-?W3|jm/zZ$%Y7uA||N;$^${uA5;O|rw4R' );
define( 'NONCE_KEY',        'p`[uZ{$X{eyM`N$VDVsg9[xG6$u=yZuHGy){zj&&uvf8b*0_z$m*hGNN{)0i)[uM' );
define( 'AUTH_SALT',        ' !qZ<sQ_rX^k%aM-wlp;,JnXVd`js.f/C(6>GdDBT-I^vZT2ztXKYvP}jo4M.q#o' );
define( 'SECURE_AUTH_SALT', '8cJh[ksk?]#O,7{1crIO9/eYMCzp)f|w#i@NXZ66hg 8$=sE-qRJ]lE6AfRcmm* ' );
define( 'LOGGED_IN_SALT',   'Hes3=RF$099^r]:whG(C|Y^EWT8JCbmc]M]D^x UcwMZ9(3F43w8MO0NcZ5R.!%E' );
define( 'NONCE_SALT',       '` `OjUBP4iU@$tdAlqE$Yt_=vPUZ):|[`tkl|u5TYt{0>KY]>JC8,/6AuFac$[il' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
