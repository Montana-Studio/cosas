<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cosas');

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

define('AUTH_KEY',         'aBXVdVG#1mlij{rR)d^>+2LcL|%pH` q^;v`Q8 B$tdOQf>F-]b3(UsLG8:Oxl1F');
define('SECURE_AUTH_KEY',  '`ATVLPiKd<t`EdC(JzT8<-`+H(Hfz0$9k)v-Z.Nu){ll|t$ESWo!~T^$q)/he9NH');
define('LOGGED_IN_KEY',    'Bh:dJ4{,ips(I?&RY20-:%(m.X$jO<c&=m5mj};g?c!{fgF-TKwaSm-cHL7zgb>j');
define('NONCE_KEY',        'c?`0jSdY5A+n*GuF=$r lz@NBz_Pp-X[u/zQ6tA6T~F=5OO7tBO/b<hutY+Wdcdb');
define('AUTH_SALT',        '2|UMmJ+@r+[2)M+ ~?@lnv[4vK+M fWqxohMO,NHq+Jj+VQmp[oUZ75lL)EGLP~&');
define('SECURE_AUTH_SALT', 'ghX[5y*+TV&|yB-z8(ka n2}w/4/wqz7*!!DJ,tobxU!I_l,lL&=g|0{-CWc2^VE');
define('LOGGED_IN_SALT',   'w;!T(f+e:4KI=>=]{<Xb#bsl;HpGO1-3!+j IoN8w9]]+_T}uRNC6g<]_#,5>js3');
define('NONCE_SALT',       '%G-<A8n$oc_&(,yZY+W]^Y|)2<>-=1du~y]6,0h!XSf}QjmLE#vqM*$6[:U^Mor2');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
