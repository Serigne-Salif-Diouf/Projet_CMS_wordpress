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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress2024' );

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
define( 'AUTH_KEY',         'hNXzC-0W&$4-n6PX2N[E[-VBw:)l^O*~$Nte7p7Z)#E=`c:!KSJ.#kgV:(w.8FpH' );
define( 'SECURE_AUTH_KEY',  'W7&-65 GzhB?=k<kKmRZ@wh~[uxz,Nr?iEmbK++/TfEllr!$d~LcI 8Tf##/[|N+' );
define( 'LOGGED_IN_KEY',    'w27.&C#JQ|r&*CZgJY^Q1RwOD{#DuDkA!#9RP{Sx,-,|ThNaerlXN*-#i/lW?g2G' );
define( 'NONCE_KEY',        '@rkaMc-vh=cC/c(pX;rAl}A=I!Bu>@eq[^FQ*B tv52DLM#s4MM02aZEdD2 i[jH' );
define( 'AUTH_SALT',        '_.%Y 7JUEe(!q9r^7d37q&l}%X75%~21ytN4J@7(taBO_0DkGv^!Z#M00jFozk:7' );
define( 'SECURE_AUTH_SALT', 'LbLP[}IDz5<FP=t7M=:De:3j9zO8XC`snrQH6FwfSeum;vBtI)d4_y:5(vmI?T9o' );
define( 'LOGGED_IN_SALT',   'tOUq9IeIrK_;uC&7HV7%Z:#cVsI^Y7B!O(tk%Rhl&uf=Y-_o0+Lnqa1X?4J6=&s{' );
define( 'NONCE_SALT',       '^.@n+nv|XUu!|_}!-?8q3$y%=zeC~cL_G{_( 5lR`Ao[.ArnA_Oa1`T//u(u5.,J' );

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
