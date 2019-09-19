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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'zqv=EjmY]lv|ODEI-iK?5:V=AYeA&v!]@gA*,Q}?]V2PY&oQ&$.Y9(R)}@ujC9/s' );
define( 'SECURE_AUTH_KEY',  ';2q4B>>dt!gNN%rtif:KsjDFAN&zlZxZ@|LjLvJH#q4>Hb9~gJA^c!%?BBzQ@2!A' );
define( 'LOGGED_IN_KEY',    '?JfLx9(gw1g#>2HoeU^Fw6W`@CB^7-bb6OQ||_?g4R#|^K|iSu.bUUDAgccHn:cA' );
define( 'NONCE_KEY',        '&n/Qy7d:6#Pg59d. ^B{VkxhIKp9lcP@X;_pXv?mq_uYw`CJ}<i/D884-o<|QqRh' );
define( 'AUTH_SALT',        ']:O+8xlrCp}HN?7w$e%r,c<#_Y(K{y|(D}HF{`yr9o<;{[/L*,DqHZU^QsUcd+8(' );
define( 'SECURE_AUTH_SALT', 'CPu-RFeY0%qE[1Y:%1C{E+>Elr^L2+NmiG@=kKR&QmE8}VKks{?154UH}D/B+aKD' );
define( 'LOGGED_IN_SALT',   'O6Kp(ayo^wLh7!1,O[xwYk#Iqj)]H]d8zaq7l{QUGCg=zP{(!w9`N76HmPvT$^%I' );
define( 'NONCE_SALT',       'DYC}3h1<lR]K)D*O=-UG4lM4aKtDi|:$k**1S{>r5>_CVNov6m?{E6wb#0b8s_k9' );

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
