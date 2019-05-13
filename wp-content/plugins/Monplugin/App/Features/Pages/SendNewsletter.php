<?php
namespace App\Features\Pages;

use App\Http\Models\Newsletter;


class SendNewsletter
{

    public static function init()
    {
        //https: //developer.wordpress.org/reference/functions/add_menu_page/  
        add_menu_page(
            __('Affichage des mails de la newsletter'), // Le titre qui s'affichera sur la page
            __('Affichage Newsletter'), // le texte dans le menu
            'edit_private_pages', // la capacité qu'il faut posséder en tant qu'utilisateur pour avoir accès à cette page (les roles et capacité seront vue plus tard)
            'affichage-newsletter', // Le slug du menu
            [self::class, 'render'], // La méthode qui va afficher la page
            'dashicons-email-alt', // L'icon dans le menu
            26 // la position dans le menu (à comparer avec la valeur deposition des autres liens menu que l'on retrouve dans la doc).
        );
    }

    /**
     * Initialisation de la page.
     *
     * @return void
     */

    public static function send_newsletter()
    {

        // Nous récupérons les données envoyé par le formulaire qui se retrouve dans la variable $_POST
        $email = $_POST['emailNew'];

        $news = new Newsletter();
        $news->userid = get_current_user_id();
        $news->email = $email;


        if (
            wp_mail($email, ''  . '', 'Vous êtes bien inscris à la newsletter')
        ) {
            if (!$news->save()) {
                $_SESSION['notice2'] = [
                    'status' => 'danger',
                    'message' => 'Email déjà utilisé'
                ];
            } else {
                $_SESSION['notice2'] = [
                    'status' => 'success',
                    'message' => 'Vous êtes bien inscris à notre newsletter'
                ];
            }
        } else {
            $_SESSION['notice2'] = [
                'status' => 'errors',
                'message' => 'Veuillez entrez une adresse mail'
            ];
        }

        // la fonction wp_safe_redirect redirige vers une url. La fonction wp_get_referer renvoi vers la page d'ou la requête a été envoyé.
        wp_safe_redirect(wp_get_referer());
    }

    public static function render()
    {
        $news = array_reverse(Newsletter::all());
        view('pages/send-newsletter', compact('news'));
    }

    // function qui est lancé via le hook admin_action_mail-delete ligne 23 du fichier hooks.php.
    public static function delete()
    {
        // on récupère l'id envoyé via $_POST notre formulaire ligne 29 dans show-mail.html.php
        $id = $_POST['newsId'];
        // si notre function delete($id) est lancée alors on rempli SESSION avec un status et un message positif puis on redirect sur notre page mail-client
        if (Newsletter::delete($id)) {
            $_SESSION['notice'] = [
                'status' => 'success',
                'message' => 'Le mail a bien été supprimé'
            ];
            wp_safe_redirect(menu_page_url('affichage-newsletter'));
        }
        // Si le mail na pas été supprimé on renvoi sur la page avec une notification négative
        else {
            $_SESSION['notice'] = [
                'status' => 'error',
                'message' => 'un Problème est survenu, veuillez rééssayer'
            ];
            wp_safe_redirect(wp_get_referer());
        }
    }
}
