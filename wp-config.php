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
define( 'DB_NAME', 'elsygh' );

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
define( 'AUTH_KEY',         '9f %SJ;!$+zAdu!s]3@p;0*)^y=Q]8`?&ZJ0Cw|=!}`u!#wXwJ!MI[d<3FqUWmDZ' );
define( 'SECURE_AUTH_KEY',  'Bp_no@SPdieiruGj,}[)O~s@wy 0}.WO,3k9c@Ba[FkI2(`ED:-b6l1Q<8AKt!<W' );
define( 'LOGGED_IN_KEY',    'tk:i~YbWMhfq/()SG=3@lF{:>8>L^I`x1?j!;Il4U>_7PZh]~:I4HH5JkGF3MU9A' );
define( 'NONCE_KEY',        '(J!p60Q}e~5!wy0UAbVP184Xq[Y{d;TB$jdU,@LKZkB?x<w>!Yp_1dgJ,>KC}548' );
define( 'AUTH_SALT',        'YSs`#2cEL{1V+:1]YS8$(X]WC[lYm0!sSgbO+ MHimK>DbHv}p)]?n/LU@.v~85p' );
define( 'SECURE_AUTH_SALT', 'Aw=n|0_vgjT<|D/(3OxgP21&PU!G.)9A?[8R3@rQz5O$(~AJT_~/Z00FJ1!0cQE.' );
define( 'LOGGED_IN_SALT',   'R:]=%!_%xNd}Pk1=y[#{`P_f!EuLDj?I&%hss?2AeqAHfB[9f;@W^,UL[_:RnfM^' );
define( 'NONCE_SALT',       '$kbPCn5Ul{4VB:1~g6%r4^?gd}{1PHyw$jILV^gs{n+&x#gL(}0N.e9uTBJK?,f0' );

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
