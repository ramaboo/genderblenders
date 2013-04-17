<?php
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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'y]dmNC_f,WckQevgWx`:B[2lpfMFk9}w{soRg z!]2P^[7RH$-G?+{IkSdeCc21q');
define('SECURE_AUTH_KEY',  'p/(6[BEjy+6&zjZs+:+t0|Icoy_hYEUA-]p(SLtqJ;e<,`O0puG6S59rnn]zKz7l');
define('LOGGED_IN_KEY',    'Irl)j/V[B.gRdo$q0Ju+zt.DxSB|nsxEye>0$Gl{+0GoZG{{+|8acnQ+j7 ({OO~');
define('NONCE_KEY',        '|-t?4cYS{L@8fjF$LFE+?7<A#,1%(9j,?T[BQX6|O1c$Z^rx*j=gq-tz:hlgynP>');
define('AUTH_SALT',        'Ts61{2,qF>lb]pI|NDc1-{I([_2e8c1#0n% q2|56>|V1>=G&!vC+JC9L!>]uk?r');
define('SECURE_AUTH_SALT', 'p+_I9LYUk~r|%r:0r2r_mO&Pz@]cm8_R-3)wrFr.#$|g}qv$va_ia1`:RNr5@Aar');
define('LOGGED_IN_SALT',   'XLJ8H&9rV-WtOz*kuHIQ_ j;2TZyqN1yD?;mNdYP.ntM7.gZHu2~h]W<R@G|yN|<');
define('NONCE_SALT',       '&(}H2Ps}PT@{oM6lR((gQU(CTw!hqm zOpK+=SR=fi;U!SouXhZn.d(`y;X+:R?*');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
