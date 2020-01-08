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
define( 'DB_NAME', 'TM_privatesuite' );

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
define( 'AUTH_KEY',         '?eibDm5s|pBr]w>1_=`:>6!1Wh{D!ghx6Fr<gNbkl0.;. wPj^$.J.%X}Yqb,aA}' );
define( 'SECURE_AUTH_KEY',  '^Qe<zJCF<DmKgp#|18ES2barP{gQ3L;u|#+ q~;8n rNAzz[gkm19KeL9N@s]!6/' );
define( 'LOGGED_IN_KEY',    '^T@p^FKFJ}e<pX;W5o%8+Xj|.pPH2VczFZH9M{-3)`J5{yCZ*,=s]Gh-T#B8YRw]' );
define( 'NONCE_KEY',        'gz%~8`N+g1.krt!YU+|%|NMXvj%@*Oj&XCGILsVRU.aR6h6ItUe-SslO]BiB.5cM' );
define( 'AUTH_SALT',        '=wI>ymrp.;-:9=P}XKQ,njdG!m(lw)Y9;F&)i<^YdQYCg^.?F5oC4R%sN.u%9=y.' );
define( 'SECURE_AUTH_SALT', '/t0hxCsp0(<o%)$RQHnkWxFMv`>mzPvUvq<-S~~;_x~>bP@!qDCvmF}+$Q>N}m73' );
define( 'LOGGED_IN_SALT',   '*|+!>!*9V(I=yUtUM%x(rupl]H[*l4I&QqB,-jx_<OP?O%Cw!z1aiNt#Mf([z@n9' );
define( 'NONCE_SALT',       '#h/:,BKcN(4j7ip m&4<}T&K%JrU9Gy!O:H`5Rjn7&DO!N&.:Tb&cR>%#U0@qeLD' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tmps_';

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
