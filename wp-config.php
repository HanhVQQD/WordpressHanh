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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'l$f|:kE*w%6y;khm$0PC/AQM~T4@hVeS)<7;D[&o*## (u]Ju k>UsRm@IL@Z0e,' );
define( 'SECURE_AUTH_KEY',  ']bf/C;[)JU|`RLAS`tmC0(QhLZ.JZX;5iemW; H6qBm8ao:^ct#?0UJ*P=.)[hr)' );
define( 'LOGGED_IN_KEY',    'p+wV&1J2d>xSe!g|>Rv.K]S{4#l+Q309*oO<6P`X`0|oCa]csD!|W0SLxT:eN2[)' );
define( 'NONCE_KEY',        'vh`7^dRW>|D@LOkY!.?n{xtgt/=jq#]dJK(b:+Rq^zb7aV+bHr-7?DD.5s!9f5S#' );
define( 'AUTH_SALT',        'T>aomO3<UNt.j6#W)Tki[eJbMHr)#[3gZvSI,nK^]u[tcmzi)a$lCGKiE^LU:J`s' );
define( 'SECURE_AUTH_SALT', 'SX>7Exi2?>CtIu)4z=Uh>bw39aF%3x%Ic}Evg_?dr3X%=FQMqr>W&P7gn=N,?n-3' );
define( 'LOGGED_IN_SALT',   'nh~$z*p!}(J$3Khujht^^9t-L@G!3<2@%wLnC{EWg(wlVk49%wg?[Yfn<rpfCXD@' );
define( 'NONCE_SALT',       'MnZ(Gl80eI4;OA`[tGl1itCZJ(PK(S[UJA<cN>TWg>19lbv)zsq{A ^qz}&F?Rrw' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
