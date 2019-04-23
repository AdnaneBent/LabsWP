<?php
namespace App\Features\MetaBoxes;

use App\Features\PostTypes\ServicePostType;

class ServiceIconesMetabox
{
    public static $slug = 'service_icones_metabox';
    /**
     * Ajout d'une méta box au type de contenu qui sont passer dans le tableau $screens
     * https://developer.wordpress.org/plugins/metadata/custom-meta-boxes/
     *
     * @return void
     */
    public static function add_meta_box()
    {
        $screen = [ServicePostType::$slug];
        add_meta_box(
            self::$slug,           // Unique ID
            __("Icones pour le service"),  // Box title
            [self::class, 'render'],  // Content callback, must be of type callable
            $screen                   // Post type
        );
    }
    /**
     * Fonction pour rendre le code html dans la metabox
     *
     * @return void
     */
    public static function render()
    {
        // Récupération de toutes les metadata du post
        // https://developer.wordpress.org/reference/functions/get_post_meta/
        $data = get_post_meta(get_the_ID());

        // Etant donné que $data est un tableau de donné contenant toutes les metadatas possible on doit préciser qu'on veut celle dont l'index est 0, nous avons qu'une seule metadata de stocké mais la récupération ce fait quand même via un tableau.
        $icone = extract_data_attr('icone_choic', $data);

        //$test = get_post_meta(get_the_ID(), 'icone_choic', true);

        // Pour le moment nous ne faisons rien de la donnée que nous avons récupérée,vous pouvez analyser les variables $data et $time avec votre débuguer,nous verrons comment envoyé cette donné dans la page pour la voir être affichée au prochain commit.

        view('metaboxes/service-icone', compact('icone'));
    }

    /**
     * sauvegarde des données de la metabox
     *
     * @param [type] $post_id reçu par le do_action
     * @return void
     */

    //$post_id est remplie par l'id du post contenu dans l'url de la page
    public static function save($post_id)
    {

        if (count($_POST) != 0) {
            // On stock dans une variable la valeur de l'input dont le name est 'rat_icone_register'
            $icone_register = $_POST['icone_choic'];
            // https://developer.wordpress.org/reference/functions/update_post_meta/
            update_post_meta($post_id, 'icone_choic', $icone_register);
        }
    }
}
