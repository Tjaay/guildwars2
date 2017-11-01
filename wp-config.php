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
define('DB_NAME', 'guildwars2');

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
define('AUTH_KEY',         'q z>f,Kz8B$GZH* n~]BQeVi{[;Wn{F 7UXg!Yd:ySN:O<bvRX1v5KGK|UJ VT]F');
define('SECURE_AUTH_KEY',  '=|]tY7j=fL{|W.Ij(s]Sc0J`teWlDW|.^?]L oE?{lL[fW/-,}DR+h-nk[E%V)[)');
define('LOGGED_IN_KEY',    '%D@g2psVsN/D)b:5zC%<b,:&FTpGf[cy[k9FPppED2!;P2z MvV8G4V3*dhhQt(}');
define('NONCE_KEY',        ';,g6[7v5M-L+Cd?w:XwQDr|<pfH,NvQ$lj{+!?~qxI(+w.hH@&,!B78ejrzN7t/m');
define('AUTH_SALT',        'J)b!g3@<gZleI:=xDWGe2f2<Js#[$aNP6c,vnG<?e`N^1voxuE.60[Q!o6lEzcUH');
define('SECURE_AUTH_SALT', 'A+C9M)q{WCIw}A)vNQJ5MEa*ucYhe:xSnst{#dxFH $]YmL,$:S|t&vEv9`<wY3G');
define('LOGGED_IN_SALT',   'Hic$J@ZF| VnGMqa_eGmK$ q;XmO@^!(CIBbn<Pdft/.}m|kHie=)~ifa+7<na8>');
define('NONCE_SALT',       '[d3J`Ta;w(?pZ@)RZ>!miz)o;!i~hz;68ovCgRL=-1zmBJ,9&~6),LSt3,WrXR9O');

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
