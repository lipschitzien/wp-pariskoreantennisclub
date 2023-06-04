Aller au contenu principalAller à la barre d’outils
À propos de WordPress
PKTC
77 mises à jour disponibles
00 commentaire en modération
Créer
Bonjour, Meiling
Se déconnecter
Aide
Merci de laisser votre avis

Nous espérons que vous avez appréciez GTranslate ! Pourriez-vous prendre quelques minutes pour écrire un avis sur WordPress.org ?
Un simple merci nous rendra heureux !

Bien sûr ! J’adorerais !J’ai déjà publié un avisPeut-être plus tardNe plus afficher
Le saviez-vous ?

Vous pouvez augmenter votre trafic international en mettant à niveau votre GTranslate.

En savoir plusPeut-être plus tardNe plus afficher
Modifier les thèmes
Astra: Pied de page du thème (footer.php)
Sélectionnez le thème à modifier : 
Astra
 

Fichiers du thème
Feuille de style
(style.css)
Fonctions du thème
(functions.php)
admindossier
assetsdossier
incdossier
Styles du thème et réglages des blocs
(theme.json)
toolset-config.json
Modèle pour l’erreur 404
(404.php)
Archives
(archive.php)
Commentaires
(comments.php)
Pied de page du thème
(footer.php)
En-tête du thème
(header.php)
Modèle pour la page d’accueil
(index.php)
Page individuelle
(page.php)
Résultats de recherche
(search.php)
Formulaire de recherche
(searchform.php)
Colonne latérale
(sidebar.php)
Publication seule
(single.php)
template-partsdossier
changelog.txt
readme.txt
wpml-config.xml
Contenu du fichier sélectionné :
1
<?php
2
/**
3
 * The template for displaying the footer.
4
 *
5
 * Contains the closing of the #content div and all content after.
6
 *
7
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
8
 *
9
 * @package Astra
10
 * @since 1.0.0
11
 */
12
​
13
if ( ! defined( 'ABSPATH' ) ) {
14
    exit; // Exit if accessed directly.
15
}
16
​
17
?>
18
<?php astra_content_bottom(); ?>
19
    </div> <!-- ast-container -->
20
    </div><!-- #content -->
21
<?php 
22
    astra_content_after();
23
        
24
    astra_footer_before();
25
        
26
    astra_footer();
27
        
28
    astra_footer_after(); 
29
?>
30
    </div><!-- #page -->
31
<?php 
Documentation : 
Nom de la fonction…
 
 


Merci de faire de WordPress votre outil de création de contenu.Version 6.2.2

