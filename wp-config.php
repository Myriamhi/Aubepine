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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         't[0{U|/)B2b->i45^6Infw7HOu{e+(`GLw.LsGo+R@,1x*3H8OS$g5.4yiRD;0u@' );
define( 'SECURE_AUTH_KEY',  'wr4VHtr 4vb_+mtltf6BRd_q{laq3:@Q5U`i<oxzfp(QQwV5D_^ZxWw^0O<uGg/v' );
define( 'LOGGED_IN_KEY',    'pqZh-Vc+4NEjeN=(i>xX$Ua:;S%<#,M*Y95G1Y,|QCxb2)QE:Rme}Z!3s8`T]O4[' );
define( 'NONCE_KEY',        '@@kIUHt4x6!(8#Q:wD^J>IYL0_.SzLD 9ylN~hQg.5$w#H2>g(#)ZzjfBx[u+w]a' );
define( 'AUTH_SALT',        'w8l:lhH%JN+B`wK%}8U6d-0S!`0T_P?amMTaIb,-/lNn_Kv^*Z![y+$-oG4ES g(' );
define( 'SECURE_AUTH_SALT', ']7#!u(|bVFzKVE+Tqt#cn7EXW))=)iP-!OT8mhArlvKu4$w);QzYr?gGR&C_ZK{G' );
define( 'LOGGED_IN_SALT',   'glk7~7Tiot@W /{e3>4<b;b~*~3L9kZKUSuU+`Mm~G#??1uVU>K6xn K%#}6I@[T' );
define( 'NONCE_SALT',       'UT`:qWDEo+i.y_0?as_|Q^ QM?qG`RUQeh.hIJ>OmX8W9yX?n+gd drcAN75I-5m' );
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
