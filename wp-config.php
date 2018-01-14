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
define('DB_NAME', 'dormal');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dormal');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'TJo9lbhZRVQ49iQ');

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
define('AUTH_KEY',         'Cbjfjc%r:wcbK}^e?2KVmBcr$KnXGbc(CNZe+15W9U% uSy1kQqLWoLrL?~K5%qn');
define('SECURE_AUTH_KEY',  '+Lj=_c7FL/SS5_<:|FsH9z~3mXrgfT=q<K@]&=`.+*q(^LUgj,#yGi~DBc=j0*!i');
define('LOGGED_IN_KEY',    'MOGRiSgPwOsVha)=2?42E7EXX15x])3wH7immpxuacwY7MwEgI2d^h*k{F!!Z^6N');
define('NONCE_KEY',        ')S9iIZ)ek| d?s=)On:Hm!CW|/.$fT6H.ne5,4a:<.{JVB$kJ%D-HGYTw[ sy9z@');
define('AUTH_SALT',        'hY09xe~aEKo@IWHoCDCi?$4n],[4qr2.>q`SX]#aaB0MhljZ:!RZbEQ^IJYv42AQ');
define('SECURE_AUTH_SALT', '13?AH;5E-4*f/,dGOzst<V$CmU!2<Mm{<aiZ?KKsg| #9=WCX1vRX{wJ6rWGmG*k');
define('LOGGED_IN_SALT',   'tuG/E%NjIqQUy4s</[SIJ,@/~btK:2Qm `%m%@B&l6_gVtqO!<T$(uL_^4Xsf4IY');
define('NONCE_SALT',       'D^5bt6!$?UajT:7!@~:7q~-#HE`T,4~9+&|)<WB`<2N<l;BeK<=3.a#i#,/MKEgI');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'film_';

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