<?php
namespace App\Features\Pages;



class SendNewsletter
{
    /**
     * Initialisation de la page.
     *
     * @return void
     */

    public static function send_newsletter()
    {
        // Nous récupérons les données envoyé par le formulaire qui se retrouve dans la variable $_POST
        $email = $_POST['emailNew'];
        $header = 'Content-Type: text/html; charset=UTF-8';


        // on à remplacé notre pavé par un helper qui le contient et on le stock dans une variable qu'on passe à notre wp_mail.
        $mail = mail_template('pages/template-newsletter');

        // Nous allons également sauvegarder en base de donnée les mails que nous avons envoyé.
        global $wpdb;
        // Nous utilisons une fonction pour insérer dans la db. https://developer.wordpress.org/reference/classes/wpdb/insert/
        $wpdb->insert(
            $wpdb->prefix . 'rat_newsletter', // premier argument est le nom de la table 
            [ // Deuxième paramêtre est un tableau dont la clé est le nom de la colonne dans la table et la valeur est la valeur à mettre dans la colonne
                // Colonne => Valeur
                'userid' => get_current_user_id(),
                'email' => $email,
                'created_at' => current_time('mysql')
            ]
        );

        wp_mail($email, '', $mail, $header);
        // la fonction wp_safe_redirect redirige vers une url. La fonction wp_get_referer renvoi vers la page d'ou la requête a été envoyé.
        wp_safe_redirect(wp_get_referer());
    }
}
