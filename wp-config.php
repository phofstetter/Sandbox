<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'wordpress_c4');

/** MySQL database username */
define('DB_USER', 'wordpress_41');

/** MySQL database password */
define('DB_PASSWORD', 't_n1xSHU28');

/** MySQL hostname */
define('DB_HOST', '188.64.188.89:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '36qiz)n)7^g6NVrQt7N8rJWftplN*#me)BUWGyU3kAvce22FJzsR9f&&@*3yBHhP');
define('SECURE_AUTH_KEY',  'LjbZ6&^ZEKJQ)e^aONCTY%f#g78ooHa19fQmh4pOtIi6XlB(Z%9lBk)*Pd@xGxdw');
define('LOGGED_IN_KEY',    '*Qn4BBD!)AYP0nmTf%*diYMv6vz1@IUcoE8us*YGtxokj11ub^7#04TMlbVeubYl');
define('NONCE_KEY',        'Y*pIm88zjZlVmym08WrdtP2NLPtuX7RmPc4HEzZYxvz7(ibg0HP&(3c2r9KV&&GL');
define('AUTH_SALT',        'Q1sd&ZBf^nvPaAsQf#5QifS#WatNMec(MXvm^%L&YJFxEk1Wp39eaNw1!zJjSAv9');
define('SECURE_AUTH_SALT', 'sSJO0hW^k&1I2!V^QpAUNS)qI7IOQimnCsQr^pq&rWYN9sSig9%#JltXkoPKkMqQ');
define('LOGGED_IN_SALT',   'Cx#4X%)1BNxaE!ybIpQav(Z^EsVpICVBCX8%pb5(QN*5*3RGww0wXTQ^u(Nru!qf');
define('NONCE_SALT',       'hCDZ7hB^uk10j6V6luat&UzPcBRXhefJh5TVv%SBgL@d@oiRqoJtqFuvzB5f&pca');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
