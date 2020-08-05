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
define( 'DB_NAME', 'mycardirect' );

/** MySQL database username */
define( 'DB_USER', 'sahil' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'VG:XhfsuZj4&BCE3ni ;i>m6rS#_aQX0Ga`Ay`[yOy!O-~Ifo!//d`JPkr.FHq%p' );
define( 'SECURE_AUTH_KEY',  '>v^isAUp]SvF7QaWbBJg(i547=QckJEo>:8t^k%TURaVr#N7H*|zB5K`o`Y0CKcr' );
define( 'LOGGED_IN_KEY',    'NZM X,/{SNyC%8]+y;h3%glS|;?r2Dr2b0FTed5`D59>k{e?(1Ckn0_W22P-6O0N' );
define( 'NONCE_KEY',        '-;/vC4V{2~UwG7?G*#qd@NIxb{V`k+!l!Syn|oJ/6Jqj/lGP08)d8 PMJ7uN|-y>' );
define( 'AUTH_SALT',        'Z9Ok8`xGF+l-_2c#]Cn-W*0$Tl20])ZKkM4!^C-J}Oll)gu S(Xpm/b>w}qD>=c>' );
define( 'SECURE_AUTH_SALT', 'ft{CkJBMJZv Q[6,%DS$4[?#,hBG44tf6dd78f[0]|tK%9W|&hSToTG}mL0=~}T7' );
define( 'LOGGED_IN_SALT',   'uo,]~f54CxxJ1J-n1U&,p<G>S`xZOkGVD|N$[F!%43,iMNr~HbH]gU^xYK!&`a)/' );
define( 'NONCE_SALT',       'Ak(w*A;|fO]TxoI%OJi-[TgnplZ8DL<X{v2y=%<oRZ3`|8g/#@0e.IC$HbvN9A9c' );

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
