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
define( 'DB_NAME', 'cordlife' );

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
define( 'AUTH_KEY',         '^`e+;YI3=5)N@,bii7,=cSZSIbW}1V$z [+5KcOOL6l(H]Ey<}Xp?:O;TgKT^jF0' );
define( 'SECURE_AUTH_KEY',  'qpgnWHK:]p|HU3+#D|Jy2H2_9[Mb|BJ;8VN#,U9}7 {v2kKafc)8K>hsiOyWAkz+' );
define( 'LOGGED_IN_KEY',    '&I(JQ7VIdJgr6o`&^q^H1wp&472J|4>Rw=G.KcN]e/, ^CMvm[8BV`6d3N-Wo9&S' );
define( 'NONCE_KEY',        '5j<kYcP;Ae;9FRy^}T0mXE[a$06!ggau,05oG#cJSAv]Q05}l=`SwslbsU87TsGD' );
define( 'AUTH_SALT',        'ZfqRnY+Z/c0&=$gv]dtPXo4TJuBylr{&dQ/tOvYE3 eN08>$s!,nbd}Y@Godr v[' );
define( 'SECURE_AUTH_SALT', '/AXX*~rp>:).`oE.IS3_*7%5[/_EbMY!U[Gpf[2P}|07c[m?{GHQ,w-oK2MEi2([' );
define( 'LOGGED_IN_SALT',   '[/Pz|HebR#Tqz|MLmsUj`IJZXFJ_>RO7.Rb0g6p.tTX%XjMub+*-Ip6rJ4V)JtA?' );
define( 'NONCE_SALT',       'V|r8N)o422;3wAoumsN`=v_kNfK]u?(9}IgmPcifH~#LnpQt@-~0z%1gws]`N__F' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cordlife_';

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
