<?php

namespace App\Http\Requests;

class Request
{

    private static $errors = array();
    /**
     * Vérification des data du formulaire
     *
     * @param array $data
     * @return void
     */
    public static function validation(array $data)
    {
        // pour chaque entré on vérifie que la vérification (qui est une méthode) est appliqué.
        foreach ($data as $input => $verification) {
            call_user_func([self::class, $verification], $input);
            // On prépare un tableau pour pouvoir renvoyer les valeurs précédente afin de ne pas devoir les réécrire.

        }
        if (count(self::$errors) != 0) {
            $message = "";
            foreach (self::$errors as $key => $value) {
                $message .= $value . '<br>';
            }
            $_SESSION['notice'] = [
                'status' => 'danger',
                'message' => $message
            ];

            foreach ($data as $input => $validation) {
                $_SESSION['old'][$input] = $_POST[$input];
            }

            wp_safe_redirect(wp_get_referer());
            exit;
        }
    }


    /**
     * Vérification que l'input est bien défini
     *
     * @param string $input
     * @return void
     */
    public static function required(string $input)
    {
        if ($_POST[$input] == "") {
            self::$errors[$input] = sprintf(__('Le champ %s est obligatoire'), $input);
        }
    }

    /**
     * Vérification que l'input est bien du format email
     *
     * @param string $input
     * @return void
     */
    public static function email(string $input)
    {
        if (!is_email($_POST[$input])) {
            self::$errors[$input] = sprintf(__('Le champ %s doit être un format email'), $input);
        }
    }
}
