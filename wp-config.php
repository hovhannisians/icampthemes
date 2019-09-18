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
define( 'DB_NAME', 'icampthemes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         's)gy:M3 hX4bz3`w?k]c+NXky!JCl0hNvm9[RXJF{jy)3r4vD.h]F{*(+vd1>a%7' );
define( 'SECURE_AUTH_KEY',  'Qry&^]`*f~sRP62?D{0jc4|DyRL!Q.8&fB6 ?7HtyYel?BAhF!8Uwb3_Y_nxgU&y' );
define( 'LOGGED_IN_KEY',    'zI3EZV7BLC.fC*!J;rAkJ_!N<O9aoH_QspKiiN30wHf!%zo)x,(F<_VIJ=~BN:J!' );
define( 'NONCE_KEY',        '.~s0e-,sjoI]hJ./R4:JgH+Ql](B2 ~NICtEJA!~W}Q1=eIUWHg.0{<KMz l6L`t' );
define( 'AUTH_SALT',        'pPCjF<^`cBN6qkQHP2Xr825/wa>W=*g8uIM9-(k/HS_30Pmn^1$$q37$lx/;:D,s' );
define( 'SECURE_AUTH_SALT', '*!1RL&JeLCj|$Zt2S3kq.k>;p_!{K?)VT.=HtyOm;V(heVT+_t{]cZu9(gnT^a;u' );
define( 'LOGGED_IN_SALT',   'hpp$XFz{hgPH4)@%d,LP~?}n s:o/qrGd]g9,/00OOTkAXdo_6_9swG1ap7@~#uY' );
define( 'NONCE_SALT',       'fEZSz+fVFO.~P2y0p$!pRP):mu#(O2AC`m8?&lr:OR2sC[fH{by#W&|fyv9wj&HC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'icamp_';

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
