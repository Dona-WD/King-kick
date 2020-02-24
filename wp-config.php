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
define( 'DB_NAME', 'king-kicks' );

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
define( 'AUTH_KEY',         'WPat0I{vtR$U8Lb,a,)XV$F% _O ieN0!25k^&[^,=dJ&B,Uh|rY [$5 [%$sv|c' );
define( 'SECURE_AUTH_KEY',  'dklnEN4aT]$4`s%{0@-HTKIhQvO*mKmZ}Jmu7*$j2#>7aEt$j0s%UfM1]eP$Ovoz' );
define( 'LOGGED_IN_KEY',    '6.^Wq}$W%}kUeH,A=NBjgxWVH%$SMm/F@+;cXYBiq>fVy])%`pEyqhP``-CD2s7v' );
define( 'NONCE_KEY',        'R[QD>o/=loAECJmBu8^:z(P}Tto~Ny0D=(S?jWbYg+4F#np)77P5_+T{pMTrze5Z' );
define( 'AUTH_SALT',        'XIjC2;Ov:ys+Q*%CbpCvOQ;j9MyY54Y{=JPU9)XlTp]`@k16GQ4Q$tLByP+{@xBg' );
define( 'SECURE_AUTH_SALT', 'Rui-O+2fH3r?yj&fvw+7fLM25(uw,)tllz)YSTN>^xA=`1N#{L:%|>,l~b%YNem)' );
define( 'LOGGED_IN_SALT',   'o9ywyaZt%hoL0RZK&@<E`PUD{r7b)[maw%s2[dmFbOLQISM]q`:r|Dt@Dy:`2T&j' );
define( 'NONCE_SALT',       '4aK<m5aP;yBW2[1^]I7fd.k-MF[P6zp)?/<v9}F|h,kXcc]24Gd-b;z9X68|oBz,' );

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
