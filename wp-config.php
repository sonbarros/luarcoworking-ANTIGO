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
define( 'DB_NAME', 'landingpage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '?+utOkAixtpPcU60dsFZ#kIWk<bWW#6|HQjrPm($A@P!~fPwI&+!LBQ0{`HKDd:g' );
define( 'SECURE_AUTH_KEY',  'V0hTA`sv|$vd~+.!/IHd}h+&*A<PcyOTv3A:ce5ydqJcr$4z!s^Sb9+C^t@}-#*G' );
define( 'LOGGED_IN_KEY',    'Ia{ix,*6<MDYI#G--]8,qt.[%j~]Dp1BP)*z3wko80@P5 _DYA=r`lc%SXP7n<?d' );
define( 'NONCE_KEY',        'DE2G+;1QU^AaI|il;c#`rd}`+BT):aLP)6vIlxwE8PV~/?Q7YfF,PD~f,u<A23T@' );
define( 'AUTH_SALT',        '^e_xRg0p2HWin!J&-l*HOVL7+a4@Uczgds<tAY(8o;u,7RX=ThI?e/1$I+^2}ZU1' );
define( 'SECURE_AUTH_SALT', 'Q,m#WU;u*cxm2#RDY&Ec:PdeTsEq/qAYHZ>`w|,M.3M%#n0F)x.0|80ZU:EK~,1p' );
define( 'LOGGED_IN_SALT',   '=Cm4baZ;u2RI&Qt{m(Jh3`j<kf`8k!q8i9raZ?Lg5w]E;_^2p/Sn<|H7_/S-Mfq;' );
define( 'NONCE_SALT',       'JDfHHFw_iS)2i_n4*XAa:fOR/fdJ=*+x3Vl:`1ws2?IURmAv;nsAE02g7;y!3z>w' );

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
