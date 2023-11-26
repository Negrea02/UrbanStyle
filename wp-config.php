<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce-pi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9tvA<n+J3C)m/D3FiwY9.l$pxww|/ptwLbQp&fA-RwSyd+W`#ZetRw!t9<-^Uc${' );
define( 'SECURE_AUTH_KEY',  '<WKkV(I1vniCm_R6lT,o9kr{cs(lSfDx^yrf7p5[wm#h?+:^,XD5u&l Yu/vL1Rd' );
define( 'LOGGED_IN_KEY',    'ct1eig++3,z]@G}?QnKj}iRbuUPAFKtjm03x?o(3+QmD/,e6ZU7w/9e#cFBlxdMv' );
define( 'NONCE_KEY',        'A=8y$,+V8sTeCK$rMoXOI?CktWC7e~UH=4qUTjzx0l#8/l%tYDj],jwN!Xm}Ao%<' );
define( 'AUTH_SALT',        '/U2LYIYe+ov< m:$IO#E#:Xce4phcOE9ZW/0o:U11QGHi1*X|2I?Jn1;.pq~P*Cb' );
define( 'SECURE_AUTH_SALT', 'Y5l(dV+HS:pE_EAcC`j hNE$*%)O*s*E:VE7lqp-(zL0$M,@H|P /&Qd&4FB%[ 3' );
define( 'LOGGED_IN_SALT',   '0!)7 q3XfyOCiTMuo~f>6/{1~78AFfWfwO6x$q%O~qYN=0E5xkWgV_o~+t@rj&/I' );
define( 'NONCE_SALT',       'gI0csA8(Sfyl1{O1JQbAWQ?^><;5J]MA+UE55=}3O%VJV)H-.i ^T!gUoPx7<j#,' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
