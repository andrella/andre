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
define( 'DB_NAME', 'andre' );

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
define( 'AUTH_KEY',         '{*Tn7diwIar3+?}nxY`-~E5a;)~+XiRY8Ys^mkh`aQV- 3.@N,*Ows%YJ[g&Pf;%' );
define( 'SECURE_AUTH_KEY',  '>E]b5jri|7GSmEF=_2w%hUZ1YdUw~tF?=:Bc>(JORU-d,?t)9x?|[+?wmKUY)qwg' );
define( 'LOGGED_IN_KEY',    'yVh*;{v3-72^#0`K1tcaO{m ;wVkZXDslKj<x^J:IlrE%oBl4fJ3Qjf;P:$:qOU{' );
define( 'NONCE_KEY',        'cZyhCy=6pf{@KZk8&(w1*Q:Mm*t|E]tTzJo/,&kHkaJdlm$.2V9[(4cNOX9N3LDa' );
define( 'AUTH_SALT',        ':xJ+}+tiT#Fl_tZ^V y+XO8) }vlN4q.:]i}{g3gI[z8Mg!=yD$d_2*Q2N4~[[S5' );
define( 'SECURE_AUTH_SALT', 'vl/VA`*1yth<([9*9U|7c/t989ziMGKx{PCpV3m G5PWCtoDM:,!VV:}Ci}6g4_|' );
define( 'LOGGED_IN_SALT',   'Jm71?YAB$`H$:LV`}O4mzrK#Vv6^^p!av@ig%GX+kU~-Ah HZtscfJGuoRa5AzZp' );
define( 'NONCE_SALT',       '[~-.EGz mt:E|PRd-sQ(6KGHs7:A>?H9}7T0}-}, 1>zjC:{yBk7k.$*VFFn/J(+' );

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
