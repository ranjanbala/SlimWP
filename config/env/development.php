<?php
/** Development */
define('SAVEQUERIES', true);
define('WP_DEBUG', true);
define('SCRIPT_DEBUG', true);


/* Authentication Unique Keys and Salts.
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
define('AUTH_KEY',         '=crqq| 5V+]CG0mV<3N,OK(&.v>w,#F%vMYPJtWI7GQCZr4$3@g=b0E;;c+f_k7q');
define('SECURE_AUTH_KEY',  '!DrK9+MS2][i%[SB6JEJ/Dqa_)];u>HYb%oP;P@0+i,6wCzeE2u%(|*:*%E$+Hu^');
define('LOGGED_IN_KEY',    'I]eWz4*%DyZ;zA+{uHX7/qfqd,@[:m&L.UT[3P|=G:dky518Yi!:}|.k]^8b-qcL');
define('NONCE_KEY',        't}R8aMTMxa2./%V}x>MtRT[LGb:q[?EYu0O2X<g-:-bq5?%Jr;>Z+Q*#u {b4Rjk');
define('AUTH_SALT',        'gaKf!{OV0lWU;AoA]JnCsF>v*Y,P^+S5W#%Sh=HwSF2mNgj,#dFG5b{2%@w5rO<m');
define('SECURE_AUTH_SALT', '`?$*5!tqf/~jW>gQ2Z,e=uu[N3#}^hw{>TMkmJ<a[$)*X2T-]TI3sf+Tv/pGTmy~');
define('LOGGED_IN_SALT',   '5q=,UC< yF>S|Q<T1rNd^:Sa+EOC/Wr!;5V;]vX=)fBGHg^|2WHwW@Qu)J1 Z[de');
define('NONCE_SALT',       '-48cg|O;@+bb2>zEpQHPz:;wOJXP-%fjsfQHN`}fa| }zGNl}p.-6qpC^Ii>SOXf');


define('WP_HOME', 'http://localhost/gharsansar');
define('WP_SITEURL', WP_HOME . '/cms/wp/');

define('WP_CONTENT_DIR', APP_ROOT . '/content');
define('WP_CONTENT_URL', WP_HOME . '/content');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gharsansar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_unicode_ci');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory.
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');*/
if ( !defined('ABSPATH') )
	define('ABSPATH', APP_ROOT . '/cms/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
