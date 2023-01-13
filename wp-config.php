<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'W.%i@C^K?k$UJSjZL*O>30AUa+|2h:[,jtF_lE,GWK@Eo2R]!^CvFkW)Iz2)a4U8' );
define( 'SECURE_AUTH_KEY',  ' P)hw8X.9P!ggMbEKS#ob)_MWDzw(~~^L^r56QBS=RRB6[aMbx71t.ko|Wk)@L8s' );
define( 'LOGGED_IN_KEY',    'xBoNADUqz6wn^V&;]LdJO[_IpR;a~R`+|14BSAnv{!.*$G9k]}QO^Q^AS$+_n;+l' );
define( 'NONCE_KEY',        'B`C@0<rcjUxd=<_n.D5X18tN>ry;|$DCx6NXj |<{sW3W@%b*z~@KKKAQeA(LU,.' );
define( 'AUTH_SALT',        '[g3vnk@bv<Z@9~m8A~.=/w%S170Zc&4}=x})Sc&A7W6!2ShtQd1Uq kQMm+{Ab):' );
define( 'SECURE_AUTH_SALT', 'lhM+>F;45xA%mTeVkW.AS4m/3pFw{.)<5acI2D?wmu(8?Q#+&{sj:J{M@xXj8b+m' );
define( 'LOGGED_IN_SALT',   'me2n71V9KDp^^jt:y >#TO(`_>ps3u5%K9_)+mYd8jtjT`U0]c+*$JP5O/D#G}!y' );
define( 'NONCE_SALT',       '=:;c/:(4G[M^.>~6PYb9UPek=nzL{?eOOry?uZ;=sR-dg9eGY@nYJm<8Gqt>]b5`' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_luna';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
