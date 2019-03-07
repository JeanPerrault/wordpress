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
define( 'DB_NAME', 'wpbd' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '127.0.0.1' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n)Zz3.c0BdOa4?A,Fy&S!*L:FB+0B,[_=3)I1~yC/UKIT&S2i?0pX<P4!1=FEWwv' );
define( 'SECURE_AUTH_KEY',  '!DUE8yP##lD|9dyx@u`}|8w~yWDQ_?<ef=brDv|^_Fu1y&OHX!6ln)cjENBl7:;K' );
define( 'LOGGED_IN_KEY',    'cY8C,s(wE]:i]=}W.#%A0>=)mH4c=<aL`m5{nWwM#rk+th { :jF6)x`50A[3F>@' );
define( 'NONCE_KEY',        '.nZp<b44KcQbF*5E^E&64)t&48Cgmf#jzG9!Cu.=I(*),>Yd4ct/6pZU9?NC4yA{' );
define( 'AUTH_SALT',        'x`(Jb#)#wfE%pLwEUZ6Od%jxmPUnbiIz>mDBgoxg,v 3+q/0o5[[VNglFZfc7qb<' );
define( 'SECURE_AUTH_SALT', '@I2DEMSh|;3*W+oUk}K4?B@!VXw5epwj SDpXfLqvvYw1M<Yi[eXOLjBnztMY8VI' );
define( 'LOGGED_IN_SALT',   '_`]04rT?YeGhMSu xT[/n`^&H-=?qS:KD^u4I&(6g%}{_VjvK|I`0Owd1Jtz3W0#' );
define( 'NONCE_SALT',       'px*HIWEF7TQ*l9oV5nd.Y)b+BJKzPDOEW|_/9dCwgLM.8056 qRJ4LqRgTyN0Ay8' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'mywp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
