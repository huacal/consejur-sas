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
define( 'DB_NAME', 'csj-bd' );

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
define( 'AUTH_KEY',         '15:l;:gwI~.4`Aazrd*D^)gB4O^Y7<9A;.i(AO)>a2T&Riz1hAG}Mj5o9CHwF/eM' );
define( 'SECURE_AUTH_KEY',  ':^)9-LS8IlF}I.L1Dy|=F$z$I5ZNpMB%rt;Y:GA05t$OqbT6HN&-gEGO?q9> _=Q' );
define( 'LOGGED_IN_KEY',    '%;%(ve5}QKys=$,E!?b`ak<&ifNPcQrpD;h5}s3N2BP=AGmMM]D;#r83UUB>8cCR' );
define( 'NONCE_KEY',        '8OLi8fi1T,(c*%cbZ?m9oZA[sK^3As#B7lpM~br@LL]}bPK_rR^Iy6xL9o{Lqi N' );
define( 'AUTH_SALT',        '2V,UZGH#g<?Xb1;,rM:x5Qc?:o>P&e$7hR4phzO;%u&:]Va=A1.4^Lhg);jmF}P,' );
define( 'SECURE_AUTH_SALT', '{fqlvZJ:iS%bXL|Y|z8E`S&u/+PYoB*3?a88iBkeJBpQtk.zZdGCi 3sU5709iMe' );
define( 'LOGGED_IN_SALT',   'p6gJDZG,DcO:i[~Je^!MMXca6h.Zy{w@}dadd_Td!<cFLdbQx%^1KYce1IMxHJP>' );
define( 'NONCE_SALT',       '_K9dwB5/M~o=$99AH3rjq,>/9bAD=t[MoSHTse7SLBqTrim?.Js1qg2gc651H;`W' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
