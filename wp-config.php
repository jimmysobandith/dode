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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'workshop');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', '25.17.36.213');

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
define('AUTH_KEY',         'FBw8~C 1k%IRu~b~L,L&;U3y|/?<#hBIcFAd*#Ajey@/ejYmh,jRWBlJozc#jogx');
define('SECURE_AUTH_KEY',  '47t`I.3lUz5+}?Z!dA>!580>30|gl@wK7z_7Dt`h?u]V^t;hF=OjQojj3XnR]32M');
define('LOGGED_IN_KEY',    'lug0EjHv=&x!QD`u#tz%tRJ69]}*x9|eVpr,kQty?Rd80zR{=}(69cH$M(zQPF~T');
define('NONCE_KEY',        'ut%P~pqek!c(sX+{@ m:HX_;|u*>(a>%fjnR<:;[H@GC;wfp kZp$F]L:gy8f-{ ');
define('AUTH_SALT',        'f1rQ =ePv>p+v&/yF7]}=|SB)Cy1U/W.G2c$2S](H^Rc^M(1BF(gjq0Z?46va@tX');
define('SECURE_AUTH_SALT', '9RE<u/}8g]ko.V.#aP+XP%@>s#w7=0[<_oVH]9J%GvboOI1VXl&vLMFq>}Qa0E`i');
define('LOGGED_IN_SALT',   'X5;Dzk$CIRneMRXa~rT]<[7B/XudK9VE9]2Np2|buZ$`$}[bF#$tYi7PfzqJU2)0');
define('NONCE_SALT',       '`TrT}VwGz&Z9UpbAOB>r_Ip+ka@i> Zu0@410dFOqav/8Z1wh-atiA<O1>GXU8sx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

