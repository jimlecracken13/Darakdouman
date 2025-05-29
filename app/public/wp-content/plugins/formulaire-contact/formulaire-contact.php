<?php 
    /**
* Plugin Name: Formulaire de Contact Simple
* Description: Un plugin simple pour afficher un formulaire de contact sur une page.
* Version:     1.0.0
* Author:      Team Daraka
*/


// Empêche l'accès direct au fichier
if (!defined('ABSPATH')) exit;

// Enregistre le CSS
function mfcs_enqueue_styles() {
    wp_enqueue_style('mfcs-style', plugin_dir_url(__FILE__) . 'css/style.css');
}
add_action('wp_enqueue_scripts', 'mfcs_enqueue_styles');

// Shortcode pour afficher le formulaire
function mfcs_formulaire_contact() {
    ob_start(); ?>

    <form method="post" action="" class="mfcs-form">
        <p>
            <label for="mfcs_nom">Nom</label><br>
            <input type="text" name="mfcs_nom" required>
        </p>
        <p>
            <label for="mfcs_email">Email</label><br>
            <input type="email" name="mfcs_email" required>
        </p>
        <p>
            <label for="mfcs_message">Message</label><br>
            <textarea name="mfcs_message" rows="5" required></textarea>
        </p>
        <p>
            <input type="submit" name="mfcs_envoyer" value="Soumettre">
        </p>
    </form>

    <?php
    if (isset($_POST['mfcs_envoyer'])) {
        $nom = sanitize_text_field($_POST['mfcs_nom']);
        $email = sanitize_email($_POST['mfcs_email']);
        $message = sanitize_textarea_field($_POST['mfcs_message']);

        $to = get_option('admin_email');
        $sujet = "Nouveau message de contact de $nom";
        $contenu = "Nom : $nom\nEmail : $email\nMessage :\n$message";

        wp_mail($to, $sujet, $contenu);

        echo "<p class='mfcs-confirmation'>Merci pour votre message !</p>";
    }

    return ob_get_clean();
}
add_shortcode('formulaire_contact', 'mfcs_formulaire_contact');