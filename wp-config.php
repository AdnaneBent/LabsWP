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
define( 'DB_NAME', 'LabsWp' );

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
define( 'AUTH_KEY',         '|m11C||#+vNZi=`4W1|.B ZMLL|lQ^!+E_U0<fcp;i=xZxNzP`PyE7qaAY=r 06o' );
define( 'SECURE_AUTH_KEY',  'cYqA,~qDSPuT4Q 7,u-fQyR&[ChPQ[-1X98l%,x~^SG s5R9Qd ,5XFu3JJ9A2^-' );
define( 'LOGGED_IN_KEY',    'V/d)RQ3l&P69I_~k$LRn42PHK/A$+)2mWjS8AZc*-rEK: *Z@7O!FS8juKK@b$fr' );
define( 'NONCE_KEY',        'e;/ARN_]rL q2!TZ;nLv}hpzPGah1P`o(t_}#oyHKyb8zqI/ZoQIT5]d_<Q{#j6|' );
define( 'AUTH_SALT',        'NMjgGI%Pbp%W^g^UA!hnzJaOQF1UBQj*C5sGU~l$~9LO6A9uR$4Z+u 79S3/Z|tO' );
define( 'SECURE_AUTH_SALT', '1Ed$[m_vFI#Z5:O`Ap;Hv2{=r!l~[UO,S98oIT TRZ2(.a}z!jyP7zw8*X%>dka,' );
define( 'LOGGED_IN_SALT',   '~ZrT3t%a.nLE bT_s5_Gpm?jI+S8Uovq<h;kTMm5Sl!JdbnH@9Zd0TFB;>LDimq>' );
define( 'NONCE_SALT',       'z-lNXZ6x[DEis).gWYr?S)TXG|5#Y.ns @n;(F?%]+.cQTY@m@!<} &5mW`Lpxrn' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'LB_';

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
