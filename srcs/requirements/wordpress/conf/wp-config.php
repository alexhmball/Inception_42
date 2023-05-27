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
define( 'DB_NAME', getenv(DB_NAME) );

/** Database username */
define( 'DB_USER', getenv(WP_ADMIN) );

/** Database password */
define( 'DB_PASSWORD', getenv(WP_PASS) );

// $Host = getenv(DB_HOST) . :/var/run/php/php-fpm81.sock
/** Database hostname */
define( 'DB_HOST', getenv(DB_HOST) );

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
// define( 'AUTH_KEY',         'put your unique phrase here' );
// define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
// define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
// define( 'NONCE_KEY',        'put your unique phrase here' );
// define( 'AUTH_SALT',        'put your unique phrase here' );
// define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
// define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
// define( 'NONCE_SALT',       'put your unique phrase here' );
define('AUTH_KEY',         's(b#43]t(zIbOQ}RV?:pr?mNT$76e{Q5z%}0u{(l!,g<r)4>q@nL!uL1J4wOQi~r');
define('SECURE_AUTH_KEY',  ']N[.kUY+BNi/L5 RwyEItvRWT+2=ZB}s<(?$a|0C-_.e_x*x)48hy%xcVg!#){xR');
define('LOGGED_IN_KEY',    '&&!zN5T$$J<6cDl0_<Su!`:+B#sK)xFbv+ZYb%{o;%tq.[qmsk)*QpIqdi8[Trq;');
define('NONCE_KEY',        '[FEMcVpQ/K2|%QLKbRKruXNVYt<@+Uy(~p$c9p.?-%*EB@s5M<pP!>OWVc`f8^p[');
define('AUTH_SALT',        '?1fx|qp+wC}<3VJ<8 cNJ1w{d)Stc{erhwFFfe7C0r*mju$uY5n_+wG$NOAj#55R');
define('SECURE_AUTH_SALT', '^4Oa2cUIvXdeDY&hf)kn+w3rM2)+hn8R[+&ncm+r(tUE9 OGf+q|gN}|`dG46>t#');
define('LOGGED_IN_SALT',   't`0NJT&nVvu/G4vEQ?pC+=8yz~i)X0R:SZ1h(z!9!U<][Qki_d3/EVJ-+3|=p!-p');
define('NONCE_SALT',       'FjrSZ{ !.xi-20qgaX07Ba1(Co0PPbg|Gg1dUlT/wQ~#*y5eDLP*Nc6|h-PTT+kR');
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