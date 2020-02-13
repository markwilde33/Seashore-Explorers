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
define( 'DB_NAME', 'seashoreexplorertours' );

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
define( 'AUTH_KEY',         '7~u+>A^xOy{)F_bp2W+)cJ[DQ4xhj-<JgiR,-4lP_YXz(ruMSEiqw-|S@YZG&GAD' );
define( 'SECURE_AUTH_KEY',  'g6@9{wA7H{OndL=YWZQl[1H%qV>o$Tsv1](iVj<jX&&n017:}&/0r(RcO=ieX<R8' );
define( 'LOGGED_IN_KEY',    'QnOC(CZS@#$-N-0v7<Rq(iPS,IF0*(!$5HD^Ez^Mk]eI]U.QI@Tip3;1#>n}q)}2' );
define( 'NONCE_KEY',        '*GOX{u&j2Km>}@H^xn8v@pihS^#0WiCm[{<R~T9| qfJdv5#TA`~OsM%js|R2[47' );
define( 'AUTH_SALT',        'aaxn?]j5|3AF_ip@mP-Djj?B9[J@n1Fe=99Yf!^D,CtHn15O*2.+gzRdO^EfafuE' );
define( 'SECURE_AUTH_SALT', 'RLb:CQJl+>jK8J>Yce2f-bt+?w/:VkumpLd-SpiBQ:XToYY 87:Y-+&9`E(9yq$p' );
define( 'LOGGED_IN_SALT',   '@Rvy]]vV VZgPfS;T$OY,Vyg![%5r@We9BgDZ*nBJ(w}gkcO8Iroso Hh@Te::Hj' );
define( 'NONCE_SALT',       '{n=/RIa7#u%^!R;DJF8v1%eR5IYam$:+qk^)M>X>!+p9rkxc@HsrM>g@0e7k[~`p' );

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
