<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'avocat');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>{J(/0t~]fit3zFn_4B%7HbCYeZVgAGH+H7mgUNk+6{b57t>ETYlZ%SA3JYPArW>');
define('SECURE_AUTH_KEY',  'zWYg?J7.wK$+P )/|5q7AYS/X+|K|N 5]gTa!4IXV}s1w$6_ITGUKoRiP!&L(ji ');
define('LOGGED_IN_KEY',    'e?W_.VTe].8Y)JrcYoj3,Psm*!6IU9JL:5Iost3:.:/EO36b|&nqp<Gd6)Us0]e!');
define('NONCE_KEY',        '?YyOY&N$xF+[?hc06-kv[E,2s=F^JHlJ0;-iX*3g5-G4oUoT xW}sQ)>~hHr[2);');
define('AUTH_SALT',        '@hK(ok;J~>SCzI:#UeU/kB2OKn5[8]0>#WN=WGYZfSk*LQJ8E{bmM~%l^^/8[*/r');
define('SECURE_AUTH_SALT', 'O|wftV!754FA-a.j8TqllnNG6^N-Nm4pUYl`nwh9ge9 C7U.vIW!aGIIR]q64=@B');
define('LOGGED_IN_SALT',   '^Xa|3U5Dc6_h~Kw&Hv#.?ISNq,EEOD+Yp>N-W#:7j;(aezJ4:bW~pgVsc><P>v8p');
define('NONCE_SALT',       'L:c(V_s?/::Upy!G <:yWjMZ ;/S0 3i<aCiH`FV#t|iM)#$D/a_objSC|JLRf|d');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

/*ajouté par arwa le 20/04/2018*/
define('FS_METHOD', 'direct');