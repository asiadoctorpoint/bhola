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
define( 'DB_NAME', 'bhola' );

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
define( 'AUTH_KEY',         'yzsCHr63S?mIKyO},m/G-cvAQGgRJDhV6b:npgai6h O9re:vT4mF@3MNs+Oc|D=' );
define( 'SECURE_AUTH_KEY',  '/:?rPQ|p~_Cl]v|KTlIy*SNX7Rw?5YefDEdVr.Q`$a>trxtE6)}:(63;.&AgiJG;' );
define( 'LOGGED_IN_KEY',    'BK^LnfmXo/N,+qdq}^NeVzHQ}6OLz~K=c1kw,]`?l2H<&mk3sc13 +LElo<5j rS' );
define( 'NONCE_KEY',        'l%Y|ERc(NX]^u7WVnoN:oc!/HV*A@zmC-HMmyIW],mwS471CuB$T;XC47bO2B>(p' );
define( 'AUTH_SALT',        ']XBq|c%5=vBCpm.M>@)bib1nmf=CWn.deG-8Q(h5V+6{]&oLI6TUBS@,mKrT?x~ ' );
define( 'SECURE_AUTH_SALT', 'cU9l$UCrYBFw%/t23{:3BT&{QYfIV+`hl&T&#bnvn@;s(YL+o}Fb$vS%u]O P($v' );
define( 'LOGGED_IN_SALT',   'KSKxsySQ$k~7KZy!Z$]BUNLhlf83d!{VUb30$?.|lO5(46v1)r_BdqKb<uUGz$DY' );
define( 'NONCE_SALT',       '^`=2C(D)1efrAdisij(>eLyqgo%lN:D8!;jxt@uy).^y$ c }`(6P(jM?br`;am%' );

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
