<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Portfolio_local' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' T[D0!D2NP720I_N<U`.,hEN=T/c@#eU&(0L,Fy4ij%qOHLWGH)sthHk?AL[{`eW' );
define( 'SECURE_AUTH_KEY',  'KWaN*8kAu/TT`1^wOAv!e6G;l2%%~3|naLp{`.:2#C%xEmXHt41?/.:-Pv<0<P,f' );
define( 'LOGGED_IN_KEY',    '!T7y9)j<HSI`3FC{hp@nY|r9gz,JTN^HBJOO*wx^8;X+v{FeSZ7RtbLIRS^SO8Q.' );
define( 'NONCE_KEY',        '7gYCrdh,X6Go{N?GI`(=6[D=:608Lye[=6#ZEVTi)})fF`!tQ+>s.#<kHS?Pi`u/' );
define( 'AUTH_SALT',        'YWm@emY!NN*!R!n)y< 7q[@ONpjc&DyS;/|/im&:]p$=x[Mz!BHO4EuiZwc6Y&oi' );
define( 'SECURE_AUTH_SALT', '_^,]YW8Yu.*fL[l:zPIia@eYUVAu)X^Mi&R<cthNHc=i7VN{:0z;#jIzkFSa.7;[' );
define( 'LOGGED_IN_SALT',   '~:yb0>Rzbg`^F:7goGtqr**(`_,U9`/9j]Fauwx-w-_{GCj 6,H)1@U*3C$:T^pG' );
define( 'NONCE_SALT',       'AR0$985jKISSIB+P~:ki$UT~7S]hCr.}4{/Q6VX|@z/0LRDT|fwOj,aM[oG6XV/V' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);


/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
