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
define( 'AUTH_KEY',         '&5*F1mr1AO>myGN}t/.M%e$;rw_%mebZ<V:_1w6}{>=p!~?H7c.[p,z0*KrajJki' );
define( 'SECURE_AUTH_KEY',  'sxUNo$wq<MP6%BONnweN&w.R%BriT~)HP7QDd)nv+}zDLH24Q!wwVAG;ngl[=,8*' );
define( 'LOGGED_IN_KEY',    'H%5i+~z?TpVke8,8V_{Xx30+m^Hp7a]_ZD~e}a-$>pq~8eRae>h[t9f.VM>5)Bhk' );
define( 'NONCE_KEY',        '6]r8|sf6qKzCj1R$Am=MwW@N5w7!z|6K8x_Owf,0qI%R7pcP@=H{7$d1B-gV`HZ8' );
define( 'AUTH_SALT',        'Vr::<VT+SQA<NGtv:NAYYlUPf-@^Hp1zA^/2_b1-E.cV)<6%42o,jp5|Jh+aM(Qb' );
define( 'SECURE_AUTH_SALT', 'uDsU78xc0MgO5{C.U-^^qm^bAs9R]?F29pBoyLl~)s?K->&yh`]{(}#2h~l<S&nj' );
define( 'LOGGED_IN_SALT',   'Wsw8]j{_,fBqmi4n-/IO#l@C1$g?0C^`nT-mnGOUMFk9{*cT=2z([4m>G`Exqr6<' );
define( 'NONCE_SALT',       'oxybtZ%,6i;myavYxDZR1_~/i|+7(r>2gy&kl]{ S$Rsum`|dlfo[b z|.;EM^t.' );

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
