<?php

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the installation.

 * You don't have to use the website, you can copy this file to "wp-config.php"

 * and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * Database settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://wordpress.org/documentation/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'local' );


/** Database username */

define( 'DB_USER', 'root' );


/** Database password */

define( 'DB_PASSWORD', 'root' );


/** Database hostname */

define( 'DB_HOST', 'localhost' );


/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The database collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication unique keys and salts.

 *

 * Change these to different unique phrases! You can generate these using

 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.

 *

 * You can change these at any point in time to invalidate all existing cookies.

 * This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'B4`G)0s-vhtM!,wvz=LyzD0s>%b,m;-w(H_f^y..f9XmE<?R-9YI^FJ(Kx?M!=_0' );

define( 'SECURE_AUTH_KEY',  '6q$wq(w8?MY%bbJg)Q0m)x^MrFw*A&x@tNj2iuEKd[*qZ D}`]xWcbF#{;z[)>ii' );

define( 'LOGGED_IN_KEY',    '?139MhP/_Ps|lbsZ[P|JZaNSvo0^< YOV4?/5pQ%f7(/m4W^7Z+=o9Lhw~=cS3I?' );

define( 'NONCE_KEY',        '%`fKm1Y;|k)^`KFuVwR`Xxe0G5)c<~7|]l[G3gQRu;uD-:M2Y[_`E!g$~v9_2G/x' );

define( 'AUTH_SALT',        ':~nk8z6A^HMMA5)q(&skC>0VJ-v`2(qKoP67o>3gC&s.H1MgM]S9ui?i6[>CgntT' );

define( 'SECURE_AUTH_SALT', 'sd =0C/!ZOtrIm9q_##aabZre~F|?ici:sqhwFJa,&=-L0&V:*)hakJgalHkj`}z' );

define( 'LOGGED_IN_SALT',   '_@9k` M9lLdt#Qqw?wAh9VFuew~Am<$aB,h!q`TRJn?vp;$yv0D_~Rqz4z^0UTl5' );

define( 'NONCE_SALT',       'tM_Ng;S3k.&&wB55-$i_M]MPp<QDSxRYUg{T]Q*b-#{Ll<]PE!eam[]~z7;Nq!6/' );


/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_';


/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the documentation.

 *

 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */




define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

