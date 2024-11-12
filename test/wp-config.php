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
define( 'AUTH_KEY',         '9D?7hX/rC;GGJ<YU>k&`2]quzau!EGS9+f7E:%Uf`$|[fa jzpS9T&{V30Mm?A1p' );
define( 'SECURE_AUTH_KEY',  'Wo]Ux9d@p>F_mW[;I7vqr7v1cKWny:tB9@(?NvTJOQ.&F:H1bR!`&#~ilvQGhK$}' );
define( 'LOGGED_IN_KEY',    'ZJ}E8_qtLZ7O;q b:6?X?kMOr!$cA1zLJ~&lGLL-)0qjL$2hK2JrJX*G7/mE0#o<' );
define( 'NONCE_KEY',        ')ov.2N}Z/ddbkR:QnY[@O:Bt+PW<.wy,C7<KU+tAp6N@*e^?`i!)ayQRI~8g*.ih' );
define( 'AUTH_SALT',        'C<0_Nj ST7o$r|~T9[/Ul(PZ6qI#U@KKl 7MjmNpuQigZT:Nsmn@S]*B_d||# Cw' );
define( 'SECURE_AUTH_SALT', 'w-t_`y`5DBT`-J.Bp!/wX^TVKaA~]yMcr]:)K4VVi,6reBgu6g_Ml7#];NnkY6Ud' );
define( 'LOGGED_IN_SALT',   'Uv%<CzVN7(hQ}dtdKvk7*K9*bV.#p3x*yx-x4Q[IP}+Ik&)oag)Ra^I}z<#5/> .' );
define( 'NONCE_SALT',       'R!%LsmuSzc=(@k,(G_00,=8M&5-}DFKmxr8l7mMdt yt Wc_.kRmz(TAZO[R+x0(' );

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
