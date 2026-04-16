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
define( 'AUTH_KEY',          '*[m)QC-C28+#,;ES5zWs5Uyux,Z~VZ>RfA$Z6?vv8st$<l.}P/mDGU9Cf0r]bib$' );
define( 'SECURE_AUTH_KEY',   'Wx!e4L1C<|_K/.>S?A2t<SVRg-<9|shldT7r`FuP^Cp@58%{NI~LF%NO;Y#_?a#*' );
define( 'LOGGED_IN_KEY',     ':SS9cV3)~XEQ|Ds&kX&GB?@`5bgyDZ>f~0aDz{,E!*0&^,KVM1L1qJ^MO?-oX K0' );
define( 'NONCE_KEY',         'Uq(t`=lrV<ifi/Mhy2]7%#_Iv#~25.uvjS<:6ljoi7p-Z})>DhjDB>rO$7^(_dZ2' );
define( 'AUTH_SALT',         'b9;&-X?q=0jN|aFFq}%w?0_Q~JE08h!;`5a1Z.R5Za*v~9IdXp9,eH(9bSqpPgV3' );
define( 'SECURE_AUTH_SALT',  'Q8/SMF4zwYmqS@80+Sup-2|_`#cp!Hd_:Kv&;e?)/[(m_*=RozP!?$04.GrBeG]p' );
define( 'LOGGED_IN_SALT',    'Dlh/o*0,Bcq1.7JiDYNjcw9/ 8^0ao3gbO]`pT|tqW~xYB]i<~?KjQJ0MLdm&O(T' );
define( 'NONCE_SALT',        'DdKwzTl~[]?reav-<6P)~Bws_KPut?3D~{7 oLEjk7A9&}Ez6[lzgF:2H))jnpjn' );
define( 'WP_CACHE_KEY_SALT', 'R)n}QOI3+8h1[1a=-d{<3ru&X-f`4;E=#UC?V7od2D[+l64x91Rg@9y-8A@qBKEc' );


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
