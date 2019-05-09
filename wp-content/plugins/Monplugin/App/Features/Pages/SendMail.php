<?php
namespace App\Features\Pages;

use App\Http\Requests\Request;


class SendMail
{
    /**
     * Initialisation de la page.
     *
     * @return void
     * 
     * 
     */



    public static function send_mail()
    {

        Request::validation([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'email',
            'message' => 'required'
        ]);

        $email = sanitize_email($_POST['email']);
        $name = sanitize_text_field($_POST['name']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);
        $header = 'Content-Type: text/html; charset=UTF-8';


        // on à remplacé notre pavé par un helper qui le contient et on le stock dans une variable qu'on passe à notre wp_mail.
        $mail = mail_template('pages/template-mail', compact('name', 'subject', 'message'));
        // Nous allons également sauvegarder en base de donnée les mails que nous avons envoyé.
        global $wpdb;
        // Création nouvelle table
        $wpdb->insert(
            $wpdb->prefix . 'rat_mail', // premier argument est le nom de la table 
            [ // Deuxième paramêtre est un tableau dont la clé est le nom de la colonne dans la table et la valeur est la valeur à mettre dans la colonne
                // Colonne => Valeur
                'userid' => get_current_user_id(),
                'lastname' => $name,
                'subject' => $subject,
                'email' => $email,
                'content' => $message,
                'created_at' => current_time('mysql')
            ]
        );

        if (wp_mail($email, 'Pour ' . $name . ' ', $mail, $header)) {
            $_SESSION['notice'] = [
                'status' => 'success',
                'message' => 'votre e-mail a bien été envoyé'
            ];
        } else {
            $_SESSION['notice'] = [
                'status' => 'danger',
                'message' => 'Une erreur est survenu, veuillez réessayer plus tard'
            ];
        }

        // la fonction wp_safe_redirect redirige vers une url. La fonction wp_get_referer renvoi vers la page d'ou la requête a été envoyé.
        wp_safe_redirect(wp_get_referer());
    }
}
