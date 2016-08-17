<?php
/**
 * User defined home and site URL - DF 28/01/2016
 */
 
define('WP_HOME','http://52.209.166.225/');
define('WP_SITEURL','http://52.209.166.225/');
define('WP_MEMORY_LIMIT', '128M');


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress765');

/** MySQL database username */
define('DB_USER', 'wordpressuser765');

/** MySQL database password */
define('DB_PASSWORD', 'SPf|bT-46Brs');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '*OU|m*bo=7g#h@pXE~|}By`]&Q+zTtm>h7r_;vV|np+c3Sy?6H@4f8~>(eB}EBP+');
define('SECURE_AUTH_KEY',  'mM!+p Y=}v|z-{>Z@p&J+G[TzKYPdPbYag-(AI1ucgiP#lJYyjN~KSfZY.g+++Ay');
define('LOGGED_IN_KEY',    '-tARetf|q4N#Dy<?xRCcz*UcekZjWrNpvf/qU?Bc&:3qA7:Q`lpu^SA7St1D-p;&');
define('NONCE_KEY',        '@>E:C~;:5C#F!OSJO]c:.G9Hc5S(D;6S>t34/|0eJB]w8sK:W.n,o*p+#0UPOVs ');
define('AUTH_SALT',        '>V,`-UZ:]MgOJ-icnC1PY+1E3|0+?ZXC!HAuS5}5CGp4.~YGYj^U5[Mg1/=|D<//');
define('SECURE_AUTH_SALT', 'BV+!m~Z(e^Wb.r0J<5DmTi-)!pC&8{h4bvq5?(hp3+/On7oe{CGp!|Q+sod}MZp0');
define('LOGGED_IN_SALT',   'tz2d7Rl|PJ-%y)f@jEV7:{,z]l^4B3aq@c1E+Z&|{;EOAi; w+nqi>eY)nS&V@aV');
define('NONCE_SALT',       'V%m-u[W-E!iF(>~q<j27_{qs-8h;>k%y,aTB@=bTZ{;3P3e|~JHZ00KW6mv}K|}S');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
