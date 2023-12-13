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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'EyyoH8CG_KTWy7C}UqC7/$F&T.DGyy/VM=%MNrDLr{In6p(|d-pBNlW%0[7GjiNw' );
define( 'SECURE_AUTH_KEY',   'y4W<N=Bygl+{PU&-#df(6t88F[3A>THdp3? GMtVk^$` .MjsrGGao^jh:rM`k=a' );
define( 'LOGGED_IN_KEY',     'lkIQ]203rB&=+4&grML{u4&Sj99glM1tR.>&]2cNE{84PP.;>e~*cJaklNMD%QP9' );
define( 'NONCE_KEY',         '0SutAzxFt3f*.jTLA{/Hbu?<Lw+^v7`7TfbrY?~}_&7cTz5FTCN[X0Uoo-Q<.!jf' );
define( 'AUTH_SALT',         '.tUj VX|?*QfSJm]<r[~SDi]/Ac&2!dpCB8$;jc`/75q:+a5A!4ShgxQ|;P xj0-' );
define( 'SECURE_AUTH_SALT',  'EBlB~#`]w=~y8zm9H0o#z V+hWPYh!X4PrJ?MYR2Lwi9M$5RC1jM)Y?/;l4Y<!+x' );
define( 'LOGGED_IN_SALT',    'oM4}Qv2[GaGCq7B|:V.w9f;lXUxG:2HFK%(pq=G79:P^I3}oldx1fg`]E_3|cG`Y' );
define( 'NONCE_SALT',        'b.^[`ptt5f~x5!rtY?VM9o7xhfwL4yND~SkIr/`U{f6R$~*y@[v?pBURjo6-7j W' );
define( 'WP_CACHE_KEY_SALT', '*_PC$$]ql}#4Ry#a >vCiyMG=cu<1p+uwF@d$LM]kMyw-<nP,5+Oab{%Q@QuI7[H' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
