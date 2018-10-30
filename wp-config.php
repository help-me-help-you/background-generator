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
define('DB_NAME', 'motors');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'sAm!~6iv:^PWtU!xd/jNZal2CmiNqWlpX [t<q90.:wv4i364V*$@||Xt1XlOaDh');
define('SECURE_AUTH_KEY',  'IJKhuwCHC{(7owO+$[qt:H,Ka[.5xTk)Zz}KVP`C|^;q5>H>06DE~*VPZ`9H<}a;');
define('LOGGED_IN_KEY',    'Qz+i@}~=Lj-#QQ}rEWh^rE9Yu{y?ES!N@R4EO5pE}zMH_N4(+g[]<_j..ig+p?w{');
define('NONCE_KEY',        '##s}.byzEZK#7|bM|%baKs4x>)sJgN%|g6^$X^H}5f{T=mp~[K(+)WRY-._N9l5j');
define('AUTH_SALT',        'jZ(07e6,~oRXhP1{<`#prcFW{5`6^S<H2Y;uCV:76%= P^*tn0?m>|Z4TC-)q~Gr');
define('SECURE_AUTH_SALT', 'MIO6*PW8~c:gp& VwtF()y3MS}`?8IuF5}-CxUn{J37A:NO1A8-jPd/-]]p3|;c-');
define('LOGGED_IN_SALT',   'T,|kH9C?b?97eGa^!Vl_`XyX7&7qGb|co<nbG$JB~(QdzYkJYjiu:b6Hl[LAJRih');
define('NONCE_SALT',       '9CfSiroDF6hdu1w.:S2SSenGP?JF_2E6]xx#?S9e&X!j*fmov63<4Hukm`y1`*qO');

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
define('WP_MEMORY_LIMIT', '512M');
define('WP_POST_REVISIONS', 2);
define('DISABLE_WP_CRON', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
