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
define( 'DB_NAME', 'wp-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'a[C6DNq=I+];B~sGPWPhu8!T!?]Et pE<96p#L_ct8/;:JC*upEpM?:bY4k+mnyO' );
define( 'SECURE_AUTH_KEY',  'lQJr&|:=)^#)4 AAx;S~< v(P7,&|.U$a<#]r[*:bB]Qw8nVKZ$.3,PU$q>%8RtP' );
define( 'LOGGED_IN_KEY',    'Jg]AG[H/0*>rbHq;zo~Uv}&tiQ%R2# kf]@ hs+7U?=J^hiA3I-5@S1b8A /%8KQ' );
define( 'NONCE_KEY',        '{lzDA0/sn/ExYZ59tI6l4>3Qhw|3ZbjL=Ruk!VynEzE9;#:WT&^W#L{wVDMMwGTw' );
define( 'AUTH_SALT',        '^4y:?9X,Q0[X^c*xFy`(eFu} ~XNh&.pyItFO.806ZZyrj:iVPkstI]f%lHFunzS' );
define( 'SECURE_AUTH_SALT', '{0RaLC~LLL:woe|<m-BLD_zC;kEIzqTm%1IL]FEVtzQd .JXas Ul.yb8E( 1e:$' );
define( 'LOGGED_IN_SALT',   'yJ%)~.RpuRISO#jK]>X$IUHt!0vVc@6vm&wb6dm{rW,O(7*3mUM`7,@s|l)e[UGG' );
define( 'NONCE_SALT',       'J`~tch-F+7G<WBrE]W:|X}z11c6+)(K-U5z<8plb)s>@rcI`F,]h4pVsT|z7WfKf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_2';

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
