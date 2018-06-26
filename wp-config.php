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
define('DB_NAME', 'arsenaldb');

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
define('AUTH_KEY',         'th>C82dh.<#ywQrHbDllr*hyFQM_A[x@!j5FThTe`?KV6oDw_^xAm:9]`Z/q?CW|');
define('SECURE_AUTH_KEY',  '.8XI/0I9h4Q,Qjc3wJ=gCKQ7j)B7vmYH*V!l!gvfQStThp%f]8F5==;gf_uLhx.?');
define('LOGGED_IN_KEY',    'N4xIqbAA{m!lNUMFOPfv@|pp7>ut9VKu(^>e4igEf<7,7O<l~@@=eO/bz)Iz,Poa');
define('NONCE_KEY',        ')YGpj:C>Enn+K]-CNvb@u!zGU*-M4I<L^4,H%m@mb;ua8oF_~>K-ImuZXP!nJ F#');
define('AUTH_SALT',        '$=~RP =O6OGP&,I_ W}}5m@ixx+gm7`US//U6tiP ~}1=s 7DIXL`Cc|mEhj%n8,');
define('SECURE_AUTH_SALT', '/64oRJ9qG3Qv3&^jOFAKD5r}=ajHT&c`}+Ci-]:1al w 3`NL[Uz*GN,GrOkWBN/');
define('LOGGED_IN_SALT',   '#{O7L}hw.&S61h*;#]0 s+dI18[W,upPR.=7~;YM{}l]gp]nIwUlBTXz8~PpPN2}');
define('NONCE_SALT',       'Ev)<lW>Uge]<3$abT/g1tsRP~]~R+G=w}r/cz;tMmCj=j;XDr^gL&$[08 H6I&@d');

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
