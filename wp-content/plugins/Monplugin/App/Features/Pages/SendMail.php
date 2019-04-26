<?php
namespace App\Features\Pages;



class SendMail
{
    /**
     * Initialisation de la page.
     *
     * @return void
     */

    public static function send_mail()
    {
        // Nous récupérons les données envoyé par le formulaire qui se retrouve dans la variable $_POST
        $email = $_POST['email'];
        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $message = $_POST['message'];
        $header = 'Content-Type: text/html; charset=UTF-8';


        // on à remplacé notre pavé par un helper qui le contient et on le stock dans une variable qu'on passe à notre wp_mail.
        $mail = mail_template('pages/template-mail', compact('name', 'firstname', 'message'));

        // Nous allons également sauvegarder en base de donnée les mails que nous avons envoyé.
        global $wpdb;
        // Nous utilisons une fonction pour insérer dans la db. https://developer.wordpress.org/reference/classes/wpdb/insert/
        $wpdb->insert(
            $wpdb->prefix . 'rat_mail', // premier argument est le nom de la table. c'est la deuxième fois que l'on écrit ce nom. Il serait bon de faire un refactoring et d'utiliser une constante à la place. Nous le ferons plus tard.
            [ // Deuxième paramêtre est un tableau dont la clé est le nom de la colonne dans la table et la valeur est la valeur à mettre dans la colonne
                // Colonne => Valeur
                'userid' => get_current_user_id(),
                'lastname' => $name,
                'firstname' => $firstname,
                'email' => $email,
                'content' => $message,
                'created_at' => current_time('mysql')
            ]
        );

        // on change $message par $mail cela veut dire qu'on envoi plus message dans le contenu du mail mais ce qui est retourné par $mail c'est à dire le contenu de notre page template-mail.html.php
        wp_mail($email, 'Pour ' . $name . ' ' . $firstname, $mail, $header);
        // la fonction wp_safe_redirect redirige vers une url. La fonction wp_get_referer renvoi vers la page d'ou la requête a été envoyé.
        wp_safe_redirect(wp_get_referer());
    }
}
