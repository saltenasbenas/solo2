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
define( 'DB_NAME', 'solo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'fj:t3/J$]83WCU=g)?z1h$B{1_Rm]UT9}s=;Y|s/RO,9C6bU_PxMrn=/y|>A+>lH' );
define( 'SECURE_AUTH_KEY',  'PhE)[YJ;y Y9KMq~2/ECt$HA{b[_.1V{2?:O{[lxI[zBg,x}yNJPW6rYE#{+IJ&.' );
define( 'LOGGED_IN_KEY',    'CielqzZdR7GBu7rc(=nT)Be|s5nK 8[w!M[@QlltNMlPz{|Hx=V>Q~>8`2M?rk[B' );
define( 'NONCE_KEY',        ')d(U2B:PQ;b@F,{,, p<6w?ojA*-j}|ay@C-+IofZ,|Agz$,qH: $;HB^$HW1p<q' );
define( 'AUTH_SALT',        'bW^HG@u#ZHn3H{ cUqqY$pjz+a19z!!lHJnQ>e}n[)5GSTB fQO}O2HTrL@|[;5x' );
define( 'SECURE_AUTH_SALT', 'S<7AdlIv3i7IZh+#s=3.3zIx?]Yv~#LHOakK}3G0}-YGojdNYm~=+e;>ZkWexd@_' );
define( 'LOGGED_IN_SALT',   'gUFR#.TsI:693!M/E#KuHxam+%@uJpZihA=z0(q/?z!&f0[+(V;.Ne];5ayF_$WL' );
define( 'NONCE_SALT',       '+joET0-@V<p8,(-Mae5Xts=:?$}.jtBg5>?5k~0qt_zs==psJiCR$aaPnioebD#+' );

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
