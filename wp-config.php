<?php
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
define( 'DB_NAME', 'webmobi5_primasolv' );

/** MySQL database username */
define( 'DB_USER', 'webmobi5_prima' );


/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1yA.lS+cl+*jbQggwGEOyr^}s~j<28q%ovVE$AAYvOL-2>aWg$9~Z&VNYD)Vg iW' );
define( 'SECURE_AUTH_KEY',  '0apttV.dV>7K]XZ:K~54FEoYrHT;Zl*j15q^{-/1; ^xgO#e<[RFXFaY{i=-prVG' );
define( 'LOGGED_IN_KEY',    'OF{ftM~.D:*>Wk#5]8#N{Y=.W*lDg/.04_$Nbm3>[5g]T-$HC~tJ tPD^AhFcOBb' );
define( 'NONCE_KEY',        'irJ(]22GVj*?fk*c*0~TB&p55xqzkG)fABxl?8Dr>V_f&LXS[)V?prf|v&J[pl5v' );
define( 'AUTH_SALT',        'IQYznXZF]OrrWXLj&QSx7NA$LZ+r#FgJzW*_]Yo%Al`3K<Xqq9g:9f=H{DN>v7@a' );
define( 'SECURE_AUTH_SALT', '<<7^z*8OgN%6g(V[Thc(LykFIo*$eiU49/z4-mc#S=qEjuC|g:Dh,}]8PlEH]^1/' );
define( 'LOGGED_IN_SALT',   'e;HWO>B1usA)>VUt>_@G!Nxfw|/-N@yZZ9H)!5nkPi,6`^DW@B%I](3w}EwL}_1%' );
define( 'NONCE_SALT',       'vP|0>i4iphILe@:!yH66dgt:]7Jb3]91a.kIrjfMDgmv*.fYfJ=X>yY]y:52~S;s' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ps_';

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
define( 'WP_DEBUG', false );
define('ALLOW_UNFILTERED_UPLOADS', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
