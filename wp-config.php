<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u949944707_jKVn6' );

/** MySQL database username */
define( 'DB_USER', 'u949944707_TrvEN' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Mo2kLB2tpK' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '>BoEGI,?O2K.+[biav(&WD^IUcY&D9@-vK.].)?+B+o.V0Qb6%+^syxd@Uoac`R8' );
define( 'SECURE_AUTH_KEY',   'U8-4zAP 3f=SQRdL|FLDJTK*F&m1 JP:qyxyceg]3^5CUW}:5/>Nn_jQ-gKOj(=~' );
define( 'LOGGED_IN_KEY',     '[7|#}K7<msOVkvoMup %?kM8o{)HFSRe53wUL1y7RcC%>rvgLT[f<7hGab9H+MKk' );
define( 'NONCE_KEY',         'yHvtP!xfGej,1k,,e^y@4;EA5wt|coK!rB7g)vY;YbV%=VoC6bvth(J9SD.6Ww>o' );
define( 'AUTH_SALT',         ';=KU?< Y~K:Rr2}U#gE2wHT?&VD?%,~ES!,Rx+Ob_:K ~Q=3:>RR^f,^^x4sa^@]' );
define( 'SECURE_AUTH_SALT',  'Hz)z{/J9Xy=2J1.@;x ZwUo%l{&A1Ifv02T6f<4+mDrp(N#;KAx5bc)y)#M4N3am' );
define( 'LOGGED_IN_SALT',    'Fp1N*f]hq66ATgEj|Mr *F![P?#Z{2)O=XLE<GJ{d,H$P{|H{]*@*)VG[.Gh6uO)' );
define( 'NONCE_SALT',        'Fy2+qUa9Q#5syE@l<,7,w97NFlOci-YQ5:pN>9=$LGgC8mp/o$u:p*D]RV%?,`[]' );
define( 'WP_CACHE_KEY_SALT', '1a>RL5.%J2hQbpFx`M{ kM@cN|R-$:&.XQR+_.q0k4/kL;t1&@[=EDnKH7Nk{*d,' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
