<?php
if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
 die("Your heroku DATABASE_URL does not appear to be correctly specified.");
}

define('AUTH_KEY',         'M3[uUFgK8Z?>p:i$,dEs?H9t $xH5X;xS],7Bf1?.HY3wl|6*%J?3uvac#q@4:U-');
define('SECURE_AUTH_KEY',  '%*Ypy.1zZG>by+*AR(tK#+eBl)Gw`dsd5qJ+k+tjH^,dql!cfL&Ph+iK10DOgiq2');
define('LOGGED_IN_KEY',    '@;f3|Ar24]}Q6MhTO+wk!1$.,14Q7CoiMaGB|Gw@p0O<WQ6/Y.cN+aHmi&+Bov6:');
define('NONCE_KEY',        '2tv-[Gau1pXc|_6sm34x)i$pLVlW.Lhu |xAF5I++w5KgX!Pm77A~@$<vq6,dIY1');
define('AUTH_SALT',        '+T0:wplNNr15f8/IcJuT&x@+asbF9[r/B-%#*jX|}:Obt[BQ:j{-!lZ[)$E-LMSA');
define('SECURE_AUTH_SALT', '/bi6@}2|^JY?i{lyg&-e)+aZGm,r/[Kt@2N;un8zkw9@tnmG6j+p;,w8PztMF %f');
define('LOGGED_IN_SALT',   ' 2;|gdE5[Z2/rG:h5a#_XUez;VLJ^14][)2/E-X<uPJqfJ_`)|-6EI.T+4^a6vd ');
define('NONCE_SALT',       '%_flqka5e/RR<_1;cbeJ0lsl8.+d|u9l_,J|UV0P1KXi GlRKA_y.e.b^w.rD:>D');

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );

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
