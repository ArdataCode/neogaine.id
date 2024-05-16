<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
define( 'WP_CACHE', false ); 
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', "websit19_neogaine");
/** MySQL database username */
define('DB_USER', "websit19_Negoainew");
/** MySQL database password */
define('DB_PASSWORD', "Ardata2024!");
/** MySQL hostname */
define('DB_HOST', "localhost");
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('FS_METHOD','direct');
define('WPLANG', '');
define('FS_CHMOD_DIR', (0775 & ~ umask()));
define('FS_CHMOD_FILE', (0664 & ~ umask()));
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define( 'WP_DEBUG', false );
define( 'WP_SITEURL', 'https://neogaine.id' );
define( 'DUPLICATOR_AUTH_KEY', '3 lpV7V>P#`iH@-TKxb.Y6}LZB{93{5}T/eF /ihGA$>a1`FxTT## gj!l2pYi}T' );
define( 'AUTH_KEY', 'R5wWVTeNeR69miRtorttCSVssMFr6xgatY4PxcyQbrFIPBjaT4nE36LzgnAqoApR' );
define( 'SECURE_AUTH_KEY', 'VF7fiG0h3tx16BhcJ6dw31xI5HwI386B6i04JdWjDHAvKUb4ISyLq6R6S6J4QMcs' );
define( 'LOGGED_IN_KEY', 'G3d9npDY73HfbzPNz8NceyfzNVMJg93B2u8zHmngMKmWyjC5M9ShrKwcRyV7qdMn' );
define( 'NONCE_KEY', 'KwLGU3uisp6zuI22cV7Q0ny4zoR4IjHAyeXIH2KutYWEa8L785UdxnbDPVH0du6o' );
define( 'AUTH_SALT', 'DNyQ536fyubF8i76PWGvFFY3Qe9pYbdwYyeEGv5o7uP3vKQMQMCnFIzGezTxLv0E' );
define( 'SECURE_AUTH_SALT', 'sq2XUohHzmjVRWMhjdjYHjFyYa6UQySeMKpALGSJrrIeNoqSudHnKtKSsj5dozb0' );
define( 'LOGGED_IN_SALT', '4U8K1jo5JXw3BaMH3CTWnuWPqv7hDU61sQSijSc62a9Y2o2m3asbQiEYPoFYaX1X' );
define( 'NONCE_SALT', 'K3wE9eJvFqLE7eKqPNPagu5BiY9sRKDtnDEzX3M3Poa2rMi4Xozuqt3j2j6ScKsf' );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');