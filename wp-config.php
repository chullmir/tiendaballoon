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
define( 'DB_NAME', 'tiendaballoon' );

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
define( 'AUTH_KEY',         'KS>z&]vC-xt0(P-J5fZ^.C9:k~y?C=+DD;Lx{/LlXK%E;$z@`f/R$}v+N=pOfV=7' );
define( 'SECURE_AUTH_KEY',  '/B1AA=Yp2NqP#w`I=vn{sF =iOvX1.HDxBm.G<akniosbD4q+zpaPgJw3YbRN.<X' );
define( 'LOGGED_IN_KEY',    '(rVB&`0o;Um{[*~j!N;};3X%)8NiOaAxUt`}:C:j;r*<}LbM$a~Tkt4ow2{-V_XW' );
define( 'NONCE_KEY',        '|{`7bm#J]y5T5Wt=,7@MU=einy+z%49/1Hp4{c6z^3@E<]`,3U6gRh}gF1N&4j{]' );
define( 'AUTH_SALT',        'ibf6Cao7X=-P}2cbcbNprQ^NfU.}IHjbz;[kYRYP6uWT5(yGaBn6:1nn@;c.bhNR' );
define( 'SECURE_AUTH_SALT', 'TR8t!CA{f ,iAXt%qb>T>V0fP_~s1.Zwk(#,3w}xJoe+BPa5!IHWHYZz:nXUx=hd' );
define( 'LOGGED_IN_SALT',   '>$V9S7=@NOWnpIwp&/,dymqaR3_ThK/OsI#r626i[que]MOHv/nYx*_?6o3>^]{A' );
define( 'NONCE_SALT',       'NmUe~r7&[}G,u6`EXAY%F3!nA 2la}c/qwhx#aRSkcw1`iYh4{D;P-/$BRkh0?)l' );

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
