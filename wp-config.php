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
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         '-7JoKqGH+Lfm*-KVK/zm1v>GvXyxKS7o~PC1-^R ;cR$e-2PiILc;VFr<`1(bX25' );
define( 'SECURE_AUTH_KEY',  'L=96Qr$`C%S>*;1UY6DX:t&SL-?P!0;)s=v2uSQ$}u>CvO%AXUO7-NW}_^.Mlemn' );
define( 'LOGGED_IN_KEY',    'T,;[{jQI#IpY6I*60kS9t^X(G0)Ex(=kmgQrq2)$Oj@C!aYeL|}<e;MqbWj%CXFO' );
define( 'NONCE_KEY',        'j~XBo/W;,zIN@h(0B=5Q^93S-~++9HF.:: p{F]TKCLCeBm>rnOS`S]QJ/QIDRhB' );
define( 'AUTH_SALT',        'OJ;rAN!DP;EGl7h)yz2JB45sIx&*$D*8@<6mBD{j-T9y;vOeKHDlmmYX_|#I7Mvv' );
define( 'SECURE_AUTH_SALT', '`r5EMsgN%^vsjs]!>ZC/RQ.b/WKa)X>9~-soP#^,}#S~/IL`O3v4y__0$!y<G=in' );
define( 'LOGGED_IN_SALT',   'y<}F Enc >;3ghueD4w)S,Rti<H2p7pv7[h=Wm!jZh-ZGF5AF( 2s&|,Eh=U^lu[' );
define( 'NONCE_SALT',       '%^`U3^)]n1CnI8U|==~T)[w-yyVZ05YB){9ill&*7xw4KZ^:K6/hh/QOdW@c~tt8' );

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
