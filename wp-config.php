<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'gym' );

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
define( 'AUTH_KEY',         'PxB<j]7$O$EO>(/SMI_b{@eP4iF(u0R9M8m^Kiza[sw.rfo|Mhv&ZL%S;s11m|Go' );
define( 'SECURE_AUTH_KEY',  'bwLzPY6PgIq^U&L}}; FlZ#J@@DPR82eV%.D>-hv9ZFzP 7uW,e&{EN4esr~9ts^' );
define( 'LOGGED_IN_KEY',    ':Qdf)Y0MfK{-E@s5r}tk`Mf2-CdIe@O %B4Vsco7sm4)B0&N;3R1F}W/cTKpQkw%' );
define( 'NONCE_KEY',        'F-wx#r.s?P]).VzoZf[q/g~muc/&yG[pF^c/#Eo<@eL@f4RRpA5)u/--7WwAsg.`' );
define( 'AUTH_SALT',        '.{$s*pWXOH2jeq_B5i`S:TUa#I4u?G*o9I|,bs/}U{-DNhLKt0&|(*oA1KOv7x/y' );
define( 'SECURE_AUTH_SALT', '$.DP~WveD:|;B1%4/}].TcIkqM=W%F_mZ->=A_s_>(ff*#9(8q)QoDWE0?lQ exf' );
define( 'LOGGED_IN_SALT',   '<29W^3}J84{6J;5{000xvP]`DY}gZd+H3|IKr.pMwNHw=~8xq^}PxQhm|dhSuA}M' );
define( 'NONCE_SALT',       '`%8fSlpM2iCCfF.Am~a9^0$Z,C`43pY%1p/xH;/l!IvwS&z#?x3l!.|_FcrNY-<k' );

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
