<?php
namespace App\Features\Pages;

use App\Http\Requests\Request;
use App\Http\Models\Newsletter;


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


        if (wp_mail($email, ''  . '', 'Vous êtes bien inscris à la newsletter')) {
            $_SESSION['notice2'] = [
                'status' => 'success',
                'message' => 'Vous êtes bien inscris à notre newsletter'
            ];
            $news = new Newsletter();
            $news->userid = get_current_user_id();
            $news->email = $email;

            $news->save();
        } else {
            $_SESSION['notice2'] = [
                'status' => 'errors',
                'message' => 'Veuillez entrez une adresse mail'
            ];
        }
        // la fonction wp_safe_redirect redirige vers une url. La fonction wp_get_referer renvoi vers la page d'ou la requête a été envoyé.
        wp_safe_redirect(wp_get_referer());
    }
}
