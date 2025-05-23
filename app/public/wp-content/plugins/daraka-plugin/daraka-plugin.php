<?php
/**
* Plugin Name: daraka-plugin
* Description: Ajoutez une citation aléatoire à chaque rechargement de votre site WordPress.
* Version:     1.0.0
* Author:      Team Daraka
*/


function citationDev(){
    // creation d'une liste pour les citations
    $listCitation = [
    "Le succès d'une équipe ne vient pas du code parfait, mais de la communication ouverte et sincère qui transforme les idées en solutions. »",
    "« Partagez vos connaissances, car un développeur qui apprend à ses paires construit une équipe plus forte que n'importe quel algorithme. »",
    "« L'entraide est le meilleur débogueur : ensemble, aucun bug n'est insurmontable. »",
    "« Une équipe unie n'écrit pas seulement des lignes de code, elle tisse des liens de confiance et de collaboration. »",
    "« Communiquer, c'est coder à plusieurs voix : chaque idée compte pour faire briller le projet. »",
    "« Dans une équipe, chaque erreur est une leçon partagée, et chaque succès est une victoire collective. »",
    "« Le code est temporaire, mais l'esprit d'équipe et le partage construisent des compétences qui durent toute une vie. »",
    "« Un bon développeur écrit du code, un grand développeur aide son équipe à en écrire un meilleur. »",
    "« L'écoute et le respect dans une équipe transforment un groupe de codeurs en une communauté d'innovateurs. »",
    "« Ensemble, vous ne construisez pas seulement des sites web, vous bâtissez un avenir où chaque défi est une opportunité d'apprendre et de grandir.»",];

    // choisir l'index d'une citation de façon aléatoire
    return wptexturize($listCitation[mt_rand(0, count($listCitation) - 1)]); 

}
// cette fonction fait appel à la precedente et verifie la langue de l'utilisateur
function choixCitation (){
    // creation d'une variable pour stocker la citation choisie
    $choix = citationDev();
    $lang = '';

    // on verifie si la langue est français pour les navigateur et le SEO
    if ( 'fr_' !== substr(get_user_locale(), 0, 3) ) {
        $lang = 'lang="fr"';
    }

    // affichage de la citation
    echo '<div class= "ma-citation">'.esc_html($choix).'</div>';
}

// cette fonction appel l'affachage de la citation suite à une action de l'admin
add_action('wp_footer', 'choixCitation');

add_action('admin_notices', 'choixCitation');

// code css pourbien afficher la citation sur la page
function citation_css() {
	echo "
	<style type='text/css'>
	.ma-citation {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
	}
	.rtl .ma-citation {
		float: left;
	}
	.block-editor-page .ma-citation {
		display: none;
	}
	@media screen and (max-width: 782px) {
		.ma-citation,
		.rtl .ma-citation {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action('wp_head', 'citation_css');
add_action('admin_head', 'citation_css');
