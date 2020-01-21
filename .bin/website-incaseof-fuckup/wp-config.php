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
define( 'DB_NAME', 'dbsy9gzk9n98qk' );

/** MySQL database username */
define( 'DB_USER', 'ufr84smayep4j' );

/** MySQL database password */
define( 'DB_PASSWORD', 'araw8sk3rrn9' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ']*3V?GXZkKua9Jh<$gm?p@J&JS^%HAo/xmHQVsyT%AYDZt&7gK6M:HKj|i`[B8vK' );
define( 'SECURE_AUTH_KEY',   'BqJ^2_oAmJ1_Y U[OP?E&7 0NJlO L VVp2)Z,e&#.,/2*`8q*d)3Sv.k?INBC+@' );
define( 'LOGGED_IN_KEY',     'iV]uR~`ti7:30f~>Eccn>=J>_)8WK-.=BD z5]z<%IiRI{hanhLqK7s1nB:nYy|N' );
define( 'NONCE_KEY',         '={F930vZa.8?^KQtT$,zJd>3fl}8W$#S|=(ZsXk|0WknWQ~szh=4ltES&c&[kQ*X' );
define( 'AUTH_SALT',         'C6]p^5@s,]5#h~{ ,Wzu C!!1Z]zS$?O<YEhA9#Cc)k[7pK[<97=K,CQ/i1%^Lvv' );
define( 'SECURE_AUTH_SALT',  '4%A;|R#a@ZUu&-^$;J]^*nWx6-,IpQqWvH%Kg/r-N&x<^fFr#SjOJ.};`z!/miuy' );
define( 'LOGGED_IN_SALT',    '[wF Rc@d?S$=$(o:CU+E?^.~#,YA)!fHxs<V,NtU6,zSEvlwiGU^Cb~,zXR|NF/h' );
define( 'NONCE_SALT',        '_eP.!+v=1AS`hZ8J.z*7X=o`{[58gp{!{|UmEQ0|q~X>>7,5qzFF*A:NpS7D5[A6' );
define( 'WP_CACHE_KEY_SALT', '9oyrh&?59+h)-VgV*x[ZAf{f,MESe=sT}$m={>|p&VGSs|HAFx5T~K6]$z9kVciv' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
