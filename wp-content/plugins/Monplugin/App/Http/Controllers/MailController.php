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
}
