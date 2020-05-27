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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'mZ Dpuv#pd]:j2 wrise]N/2&{oxmXwyxX{~t%Hj=9fc^]Yh$32]RdFvcg>*|2!I' );
define( 'SECURE_AUTH_KEY',  'KcDE_LUo2X&1>d(V0#4)ltHK6B>!t)2^R y<w;B &iEm`W@|#m/ZV_rJglT@#0hP' );
define( 'LOGGED_IN_KEY',    '|fMg}[6{_Q0gpKbf) *`L54i{j=N]~mhn9@sl(l98_.*bF,GUiJy^)M]#|^pNDj7' );
define( 'NONCE_KEY',        'qlIjidbG%[4xnm%[1FQ_U<<XG&<,0hNMqvyTOT)pNQ)jBu3A;*{mZa)$:MAPQp-y' );
define( 'AUTH_SALT',        ';-11p/D:rlkWA_17g^; XH,7;WY+oc7:T?G~Aq?NJhk6A}WfI(3m!CMgiO9tEAU3' );
define( 'SECURE_AUTH_SALT', 'y_GX2;>#5K#{?dLN9O`4]pf/isadEU7*mP`3:sA~FJG.:LZ*?-NS+y{O+`CsLl7v' );
define( 'LOGGED_IN_SALT',   'EE#^/A^R.v3EWO!?iYbVD%4pDA`BQWLc2yX6L[+(C4p`EJ,,tLpN<FDQs 0@XK`>' );
define( 'NONCE_SALT',       'b1,Qus jFM}p=jfn[rCt%JrkfM0OQ,d7>m,aBi-C>%oE@6hHp:kqxq/N74yKplmr' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
