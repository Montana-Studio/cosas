<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cosas_08082016');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'lu<(Q_UR9C+CdQ}BIKkrQ+KG%Lm[x!`lF/qT5O&B.I&,R<9(gw}Nme*Ib%|18TMI');
define('SECURE_AUTH_KEY',  'iwP,K ^C ,9h-Q`Z59ytN_vz=ZJa/!_$o5LF.{ID:H:P$j:Jny|o^7Ema?>3BaSr');
define('LOGGED_IN_KEY',    '?z=?|-7{7(KK0gY}F|,cu6M*zDW,3 3rd]t-LWH)C3L0+smUS1^RJv!rd.G2amTb');
define('NONCE_KEY',        '-8VtTt7s{Ga)c9Jp!X_|PnV9 yhL#%BS||9@(nL<[|[;CwDF 9gOjo~CIvN>e8wl');
define('AUTH_SALT',        '9IGn%H.69&I3m/2y|SP9&/D,#/g*8zg/w!SfQ|Z8J<|5[J@w ]f?OUS|qiQCZ2SZ');
define('SECURE_AUTH_SALT', '`9m*Xze8/+(kxdG9K/-Wsjm@,hrM*wY>K]v>LM3nsa-G1@4)Gx)yu~#i@m|,CY4=');
define('LOGGED_IN_SALT',   'I~uD-Ve{[5!SOc*a2oaB5k?pEK6@S!B|d,l/ Q0--ig>O-?i;jZ1dZ.g-_]UT_Q*');
define('NONCE_SALT',       '/hq}#/,a.@F{.c1|2c{#$Mnc*JWIAZ*,W~in!R}YG@BQ)gHb,7JNd9:HT<U$_csd');


$table_prefix = 'wp_';





define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'cosas.localhost');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);/* That's all, stop editing! Happy blogging. */


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');