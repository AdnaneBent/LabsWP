<?php
namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Http\Models\Mail;

class MailController
{
    public static function send()
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

        $mail = mail_template('pages/template-mail', compact('name', 'subject', 'message'));

        // Nous allons également sauvegarder en base de donnée les mails que nous avons envoyé.
        $mail = new Mail();
        $mail->userid = get_current_user_id();
        $mail->lastname = $name;
        $mail->subject = $subject;
        $mail->email = $email;
        $mail->content = $message;
        // Sauvegarde du mail dans la base de donnée
        $mail->save();

        if (wp_mail($email, 'Pour ' . $name . ' ', $message, $header)) {
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

    public static function index()
    {
        $mails = array_reverse(Mail::all());
        view('pages/send-mail', compact('mails'));
    }

    public static function show()
    {
        // Maintenant qu'on est ici on à besoin de savoir quel mail est demandé on va donc dans notre url voir que vaut id= ?? et on le stock dans une variable $id
        $id = $_GET['id'];
        // on fait appel à notre function find et dans passe en paramètre l'id pour que notre function sache l'émail à aller chercher dans notre BDD
        $mail = Mail::find($id);
        // on retourn une vue avec le contenu de Mail, cette vue n'est pas encore crée nous allons la crée au prochain commit. Pour l'instant si vous cliquez il essaie d'affiche un fichier qu'il ne trouve pas et vous vous retrouvez donc avec un fond gris.
        view('pages/show-mail', compact('mail'));
    }

    public static function delete()
    {
        // on récupère l'id envoyé via $_POST notre formulaire ligne 29 dans show-mail.html.php
        $id = $_POST['mail-delete'];
        // si notre function delete($id) est lancée alors on rempli SESSION avec un status et un message positif puis on redirect sur notre page mail-client
        if (Mail::delete($id)) {
            $_SESSION['notice'] = [
                'status' => 'success',
                'message' => 'Le mail a bien été supprimé'
            ];
            wp_safe_redirect(menu_page_url('affichage-mail'));
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
