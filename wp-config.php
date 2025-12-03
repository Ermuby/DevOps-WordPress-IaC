<?php
/**
 * The base configuration for WordPress
 *
 * This file has been generated automatically for your Vagrant + WordPress setup.
 * You can edit the values if needed.
 */

// ** MySQL settings ** //
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'wordpress' );
define( 'DB_PASSWORD', 'admin123' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 * Replace these with different unique keys as needed.
 */
define('AUTH_KEY',         '`IJ*sH>[9|.g;__N<9AIu%uth+-tV&3io?vMSK-cl:9-W&LxDRwv%5;rJ|ar*i|I');
define('SECURE_AUTH_KEY',  'cqOL_7|-$[O>.tNiSYrXqg:3$zcA3W8xr+KV358TNpJoj8uR#-{|r>?qO2A/uNE1');
define('LOGGED_IN_KEY',    'basT?]tOp>+)|2@rF[wT !+vF|0)h5|;++=1/AZ|7ZXSz0-+m[)Qz9U}SX%,|nq[');
define('NONCE_KEY',        '<D/JRq%FZ *f:+Z0&s2G>6H$jq4VIL6?DZUu}WLcr&@+Z~ |!uebWIc!w--*eh78');
define('AUTH_SALT',        'DosGR}^b1:8?[c?nsIij!Yx61DqfZQ<(]gExYLNWuis(zW0aXq|-1~AiYKX:QQj-');
define('SECURE_AUTH_SALT', 'KPiW!Zy_Ihf)KGn`eHLv?P]rwS+$KFmV, h*dm),=O$y;Yh4%~+GM33K_n*eU+|L');
define('LOGGED_IN_SALT',   '$-$Iahzyks|t&d<O#ix-X.r151&b%QV)hM/si,;dz]ZjeJw9<-.@nG/caZsB=3Vw');
define('NONCE_SALT',       '-RIjNoCgeucm8CI{/BwvdAubKRSK3w@nxL+&T%*jlUG]<53ri w.4rgo7Vmk,!qr');
/**#@-*/

/**
 * WordPress database table prefix.
 */
$table_prefix = 'wp_';

/**
 * WordPress debugging mode.
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
