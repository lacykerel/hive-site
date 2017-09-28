<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hive');

/** MySQL database username */
define('DB_USER', 'kerel');

/** MySQL database password */
define('DB_PASSWORD', 'heatvision13');

/** MySQL hostname */
define('DB_HOST', '165.227.94.190');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_ALLOW_REPAIR', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7Sl])sk@&c%X$GVxA{+u`-J8JM{lS.r38&%KJJ~{!LGb nnm~{8+aip/EPB?+9x2');
define('SECURE_AUTH_KEY',  'nIU3(}TG({=UeBR.::y+j4&e]&=q3bm|F(Qp4B73ZfAoH>=WKC-m@+Vy1z8b]7u|');
define('LOGGED_IN_KEY',    'y~hYpdwPCn>(=g4]tG&yJQP*sQ-0A#;>(=y2T{+[Iv1#G8:EK}vraB#wsGhR|2ZS');
define('NONCE_KEY',        'QB,sJHz0`+B3Yt?3yOrGz|Qo8cs6ZMSf43*qyA?pTfPfaV.I6:FhPThZ]lmQIdsQ');
define('AUTH_SALT',        '9tgV<0b6A)&[0-zoA;|!P !43}w+KAG)>R^e^|0www!|<cpj5Tjim@M6fsYf`:`0');
define('SECURE_AUTH_SALT', '+SgAX#7c|V+JBE%B!!1/wq}#N~]h%H=M=8[_JOv1qkwO.Rbz:|zAfSn&NiMW|St^');
define('LOGGED_IN_SALT',   'ZEbfW$}%)+f$FZ yryv``MLOl>Fh[:Qen`,e>NK0HNDpCET|N:|>sq!-N=OA~]Zw');
define('NONCE_SALT',       '(*3_q88Z}E;[%1tY;:9*4e@/l%B~k1<Wi@EqMhR^a.4weU+w^Ee6Qh.j!,61;S6^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
