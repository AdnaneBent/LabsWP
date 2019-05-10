<?php


namespace App\Http\Models;

class Mail
{
    // les propriétés de l'objet model. Les propriété de l'objet qui sont représentative de la structure de la table dans la base de donnée.
    public $id;
    public $userid;
    public $lastname;
    public $subject;
    public $email;
    public $content;
    public $created_at;
    protected static $table = 'LB_rat_mail';
    /**
     * Fonction qui est appelé lors de l'instance d'un objet.
     */
    public function __construct()
    {
        // on rempli déjà la date de création
        $this->created_at = current_time('mysql');
    }
    /**
     * fonction qui prend en charge la sauvegarde du mail dans la base de donnée.
     *
     * @return void
     */
    public function save()
    {
        global $wpdb;
        // nous utilisons à nous la méthode insert de l'objet $wpdb;
        return $wpdb->insert(
            $wpdb->prefix . 'rat_mail', // le nom de la table
            // ici nous affichons toutes les colonnes avec leur valeur sous forme d'objet.
            [
                'id' => $this->id,
                'userid' => $this->userid,
                'lastname' => $this->lastname,
                'subject' => $this->subject,
                'email' => $this->email,
                'content' => $this->content,
                'created_at' => $this->created_at
            ]
        );
    }
}