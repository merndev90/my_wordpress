<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'test' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xaEnNSWVdpwQt<8t4wM#*1VWEa/%0Viw)8R%9Z>j2=P;./aW9:WCK~}G#>&<;PXI' );
define( 'SECURE_AUTH_KEY',  ']LgWDB_hgnt|{3~5k2,;N=LQh3@KbH{Zcmba(b{ i!x}}!;9P}k9R[n%L>K3HET`' );
define( 'LOGGED_IN_KEY',    '_DZX$T=)4+_.vdw/i}|;P0@C2`]9%$!cmUOhpw92c9lZ}ZZhr%O[ldq/d!7*a<>)' );
define( 'NONCE_KEY',        'V+<Q{QCDv^+@].]d86`=Vp}p2V=-ysZd zWOq(1KW&F(v(CQdUg70(([>1|w@&Dg' );
define( 'AUTH_SALT',        'kcr07{H H1_K!|l@TiW=P%S]R5J(0BK]eN4d#,}_Y6(JhG6LLOF1Gl|xh!FLUTN<' );
define( 'SECURE_AUTH_SALT', 't>yE+)-He9<a!zKZ~@35t0z/j9<cpk4^S[7IGYIY:8jf$n06Z3ocy 0F(By{>pf0' );
define( 'LOGGED_IN_SALT',   '707lp>O2;%XpbsZ[B.]k]r4;pPp^5>xL,1`r==_q{T9~i%`q+48)pKnO(W>7~;q4' );
define( 'NONCE_SALT',       'B8BZ.$GR]R8%*VF}pN6~R:WK8-V2zxZy$5pvB&x_m`:9%4vk%C?0xF!9mc4DFlcB' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
