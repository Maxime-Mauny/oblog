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
define( 'DB_NAME', 'oblog' );

/** MySQL database username */
define( 'DB_USER', 'oblog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'oblog' );

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
define( 'AUTH_KEY',         'O1K$zTUi;c~[5J(V*B>WPJ;H|*~g.@s@Y.pz]q:b@qp2M9,?o2*ZQE;)~h[#,y(%' );
define( 'SECURE_AUTH_KEY',  'UL/ g.4zWKCT#{fGvj9ugN% sQ7$CsC%C]$8U>R_o>G9[QEuavh[6pq}9WP~!PBh' );
define( 'LOGGED_IN_KEY',    'cH>qVgB_H[E+J*yb%9sao1;>`x>r).JQ3ag*CN%5bnXE#5x~z& `nyp^2*5Pm{qb' );
define( 'NONCE_KEY',        '|,R3$cEU7aZ_BJfyDd(m`!59_^?y,Y@2=EZ@HN#W[vN$C;fn-lGJp]Y`L1,%wipg' );
define( 'AUTH_SALT',        '#|nYDuB%e&b|H@MCx2xHmaRVGl96X0)H-}w<>.]xl39ZR7v:b5hwDm)/ {i5Jx6t' );
define( 'SECURE_AUTH_SALT', 'V<`y,@AE=S#?!eLY5gazbiMziy E^dQfmBMUR^mZ)5.K4O*Nb|@f$Mdag]H1Vi$4' );
define( 'LOGGED_IN_SALT',   'a=|fg|w>4qvGyh[tr>Ry-!CDf81#qw(7R4(*b f?q+o+eQ/2y?G`edFcjs}EZDM,' );
define( 'NONCE_SALT',       ']#5D_[TL@NrbY_qNXjh1!3$fho5@p2JFRGY8/sAEPnf`i#&PxWbcnH1NWRKM9HFT' );

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
