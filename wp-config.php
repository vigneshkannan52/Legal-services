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
define( 'DB_NAME', 'legal-statement_db' );

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
define( 'AUTH_KEY',         'h<O%~}c:B$B2KVqLq=^q:`kI4X^<?:*5F?50~j#c;`G&1}8}U+Oye:N@2b(!D_Nx' );
define( 'SECURE_AUTH_KEY',  'PfLz*?I9Cm@*bldyBMl3,xzKG17vSdAEG{3J)u`momd;jf9JHyKpRs8cz*ge~q?+' );
define( 'LOGGED_IN_KEY',    'RM|U> ;,Ba,8NTGbK[1HEy0N;C=)B#R)q4P7um(2VjdIrUPoL!Jp}@m(!/:DRJF6' );
define( 'NONCE_KEY',        'ZEt6,Bu3T]a9%8`BZi,/zyFD{<u7!!$K}ua1U-S-mFN7ASSNv4`:SUv.{1kka!V*' );
define( 'AUTH_SALT',        'U#xZ<YD*qR$wl)JxWO$>Zc&4i^GjJ<7E@#=$Kqoe0Tk$:c-Q}3hx0:7Oq)Y].Y%2' );
define( 'SECURE_AUTH_SALT', 'vaH6]H,nC8S_v:()EhafPHx11<){126!v[mAdQg>s<vEU4HVEKRpkC+!3SV#jlJE' );
define( 'LOGGED_IN_SALT',   'x|3VlhM2}9rz@f&[rBY=-OC5i?|&W8..BFEW^A.dg6%WPc//I73CH>o!i+{3H)B~' );
define( 'NONCE_SALT',       ']+N%WQK ]h}j4?Br5-Jgjhc/6m>1jf?G,^pNDLDM{{s?d|s>E&1l|N9dxi/_stM!' );

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
