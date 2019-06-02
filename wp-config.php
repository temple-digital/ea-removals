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
define( 'DB_NAME', 'earemovals_dev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '7RkS>2RHeUr>kRT$>}Hzj5GNmI +R*o8CqNA^EYM)r+TqF0 %5Z)L;}_0AD%P  l' );
define( 'SECURE_AUTH_KEY',  '=b_sT&pz%NTb`B&X:5[dA9rBdcMe8YF7yPL]U`@aQ#_enD}f<Ib6f6M0 ^~gT/+O' );
define( 'LOGGED_IN_KEY',    '0=iNg!*p,(+m8i+/|gOqZM0T 4NmX3:&(4vKd`!Hj,1A%@[%r@tvKKyyY(xV{H)V' );
define( 'NONCE_KEY',        'bUMCtEht4/xmfH+Dx+n8wu6WCM)=!)CI+m){4_?_EUU`*#;!6=gACkt0O?>n{Mxr' );
define( 'AUTH_SALT',        '!jj~y?{jFi`|s^f.S3hKCY>sx$q9tP>ty<;6!6ywD%oX+Q.1+I5pq@i]z-7c><*V' );
define( 'SECURE_AUTH_SALT', '9KG-{bN&m<h9$z&pSp:a/%%+V_h7UGL@eqK<exdr ;?Kk>%s&;4|*xsnno=K/iw8' );
define( 'LOGGED_IN_SALT',   '( ZCx;It~j0eHu<}8|t%:p|6f~G{8?=@0_bL9xB+EG~Nw#mz+;}Xsa3!Ky@+cJ6H' );
define( 'NONCE_SALT',       'J(AB@W1TWNSoujZ0S%Ppm$?hw;cIqa|1BO.}zG$XhJ6</vO}(-)wjE ,5DK[@!S6' );

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
