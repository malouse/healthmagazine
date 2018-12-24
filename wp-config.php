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
define('DB_NAME', 'healthmagazine_db');

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
define('AUTH_KEY',         '_FkGE5X:pxdb5df%bq =<0JoW>] a]H7^!s09V_%BQ7{D2P4KT X%7<qR`b@dgyY');
define('SECURE_AUTH_KEY',  'mVxBNz(.(eSMY.(kH>38ht)1s1nbRq7k_)W9X&RBai%SQtZQaR[F8?:R$=yO[6}8');
define('LOGGED_IN_KEY',    '[;B9~|mUmlRT6SS0b;?1xG4gROU14@ZCTU{#b^#fcE~LeaRRMz%$I8)=H(QJ[X+e');
define('NONCE_KEY',        '*pM,,S`(^P68}8p^tZaR)$;O9ntOTxi78[ah#ubJnx>?M%K.QQOE;sZxHD_vc}Ig');
define('AUTH_SALT',        'aiv{J-Bl4.9D aG!J&3u=KsI*AodS(t(k,AxxoQ.$0K]FvM -^ml/>>;`*]9!RgK');
define('SECURE_AUTH_SALT', 't?m;bWn#U7vn~2A^*p:QEI=y.;?5.a55zZ,yjtH}p)VB-&#ATQUfaX5cA}( K=%U');
define('LOGGED_IN_SALT',   '$B57BTr4a-jT#YNzh0|L}M<Uh8KcAR6t<{CLLZR>It}px70kj8wq ~UlN2@b=`6p');
define('NONCE_SALT',       '.Jik;_/_cph.P%OoYB%:=0-&G6=m8DgIvW/zB[>|[2_S}#?xl;UN|8tx^S8?2(cV');
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