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
define('DB_NAME', 'karkysha');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'o!kX}>W]ng.rtfMcO8AUp*(4kcAmH$?@ZjQ{7NZ7~<kf,*ut@S7|ln,w}bQjf12?');
define('SECURE_AUTH_KEY',  '0AFTrNcqK;CH 5z}U=Qkca.a,!3.L~-f.*!C$t4lH8XW8vxJs7y~bHTNJ5vFL9{P');
define('LOGGED_IN_KEY',    '7B!e^CY&]%Fg6LCannm&RLV(-P[,g~3d=iuK+gC99afdoDq~=cW1x8!=NuT9Y9;t');
define('NONCE_KEY',        'qWnE3C^}6eue,rB0YeUFZ2]F8G~Hp`aP!F7f%*Z$NH~NbS?CgRXN+D]*A4JliChm');
define('AUTH_SALT',        'Xzkvh>TO`U>RWljNep/Lz8BvK<enSZZ{nFyX)4;ls-PeKhwFq86wr=OZscump2 @');
define('SECURE_AUTH_SALT', 'RLSUObo}2Lgkr!DlJr6b<&+D/LQyZ)h}nMp1T+(DOyW~qLpe})vNToB&uXH5eO~9');
define('LOGGED_IN_SALT',   'E/V{;hs6yCcyolDC,nG=KiGcOVG8!W>|<}p)Y~Ne<g~dI0-{^=)RA|k7(5T:(D1!');
define('NONCE_SALT',       '{Z7g/]!_}I-;hKNuZ8i.ax2|BU+fK(4 %BY7^/ykg}qae4fTF#2}!AQ*IT@H:NhG');

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
