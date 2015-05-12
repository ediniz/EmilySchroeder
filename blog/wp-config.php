<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'emilyschroeder');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f%{TV|I+koW=;A)FkBO`~}9K[gU<h2p2:(xy%sbQ+M&%e:#1S1(<a$a>=Q47slNL');
define('SECURE_AUTH_KEY',  '}|Xy0Rd||@kqVI50K?<y:0#|*KP:9HNL|J/vJ.{pjh Hm+.}&B ]7ZZ2KfT6~n3k');
define('LOGGED_IN_KEY',    'cuKtN+n;|j%08!@*CteYfr}@[t>3[r>95>W1W(zGvr+e,]uL>IkJYP%[1yf/R4XD');
define('NONCE_KEY',        '!Y$;bufI<@&a5N2H?oKJ[Mv1Z@^2CsRDq-!eWK_;P0wwV8E:81uL+evmKv0 tF~Q');
define('AUTH_SALT',        'zLdC}2W<c3a1D}C&}+,=f%+B( dVyZ>3<:CUT,IL|ds@aJy;i&+JNanZ-|n%*oqw');
define('SECURE_AUTH_SALT', 'NR/A4ls[Bd+3dOG{MnoReQh:=B-Vf{N/|cu7Q%d6X:eJz<4N#sA<:Vkc28UIoK[t');
define('LOGGED_IN_SALT',   'q|~C6Zo)+jMr3eHkzk0uGVkw}^Nu7R-U.6J39~|K{-b .%Jf+d@`Wcj qMWY|g#>');
define('NONCE_SALT',       '^H-Z}-Z/g)h/W0}nOMUOCuLvy<rde3*2:+ZF:fs),ZYK|YkJOlC;;[f65^c.|5{X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
