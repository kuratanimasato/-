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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\tyuty\Local Sites\originaltheme\app\public\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Nk<<l:L)6J feN6K%:$1uhy];A&[|w3/tZUy%^-`%*s-O&um$,+AmZ7}poVzQVW{' );
define( 'SECURE_AUTH_KEY',   '+f-.?fnc1)7L`SbY(p(P[oKBlXZ`LWvMJ]9zF-Kbs)TPzf `zQ@C||3,,MvKZFkU' );
define( 'LOGGED_IN_KEY',     '/uz&=I=@:X? &v#OBr8/jU25px~~K3E lbaRo+%}>r8!sHsg+SVi<aJkk-p=?4c1' );
define( 'NONCE_KEY',         '3<RN45gb(%-!oA6iqKtz!:uwtS1 lb=&lO&Bw|~)/9WG/}[<$:5JbjJ/J^OH?&NQ' );
define( 'AUTH_SALT',         'KMpuJQlqSCSy,Q)vldEEcI-zpIO;;4]knRqo+D8vT76{/+WD$+#>&[&`t$wQ5)b8' );
define( 'SECURE_AUTH_SALT',  '_BBy d)_w;2UNIx[bcp9m<c^* 43|./],UZnel6VW, v][t#+J95h=@Aga<o4q#s' );
define( 'LOGGED_IN_SALT',    'QC^Ky^j6JucnXbf:A?Kn{i]h0S{<1uu.@}_ikS_vFfQQE`*^dY;@zuqtXiC:WpY ' );
define( 'NONCE_SALT',        't5}s{<&1B`e;ZDXkB(,[VzFalK.YM*@:7|.Fei2H{>]x&A5JtM=/>/Vb$g/;P3Y?' );
define( 'WP_CACHE_KEY_SALT', 'IMjt9|aVv; cMTY=?2WUbtAhQ@FKL|DQP~.)JE(D=p*TXv7]w,ozi&54+_EnbxeB' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
