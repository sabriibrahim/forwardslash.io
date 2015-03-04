<?php
/* Development */
define('DB_NAME',       'project_forwardslash');
define('DB_USER',       'root');
define('DB_PASSWORD',   'root');
define('DB_HOST',       'localhost');

define('WP_HOME',       'http://local.forwardslash.io/');
define('WP_SITEURL',    'http://local.forwardslash.io/wp/');

define('SAVEQUERIES', true);
define('WP_DEBUG', true);
define('SCRIPT_DEBUG', true);

/**
 * Table Prefix
 */
define('WP_TABLE_PREFIX', 'fs_');

/**
 * Authentication Unique Keys and Salts
 */
define('AUTH_KEY',         '%rpe]J SATJ7M:C/JdyO<y*}abHi0zIY-!|+Z|Hjv_+%_syD/L|D}DA|2nBU=x|*');
define('SECURE_AUTH_KEY',  'rW-;{DU*L3&g+Gc;&O,;d0hp-r7`v6qlw8K+Ss-{N!%Xmm33,2Ff/U20EDSh6a:5');
define('LOGGED_IN_KEY',    'zyRSFHbb^!m/TzEHBdnzS.N+lGDx?7ZlO[v`[;L**#dIR?7XQuA+sf7C|Xo O|KC');
define('NONCE_KEY',        'YwDvQxJe!7b]Z|NlyF([:1Fr(3PpS4]+.wc:`iuB3&X/w%akZg*FE*pFt%uAm3by');
define('AUTH_SALT',        '&TG,lb?|yA&UBa;&Td_vbHfnP{^q]1k4|U.U}:zm,9x9@b|moHs6REy?,4T~G$Ob');
define('SECURE_AUTH_SALT', 'Jn|2bSGl/hGkX+6|,$rL|iEL-x98OX#UaX=d}3(;7U(S,Nw0z4o)Rc pyU{RxZoT');
define('LOGGED_IN_SALT',   '`n!.&-||o471iOOwXh;J3X`v$-9juQ_4NA?h6xj-k wuHB{<U}I8kBvM`YGo>*5?');
define('NONCE_SALT',       '_.mZ}eL<Xhm?E*Eu+0. y^o31`elg2Nf:j5mZT^fy@vNu2#wi1Eqb+y@HsJ%?P^3');