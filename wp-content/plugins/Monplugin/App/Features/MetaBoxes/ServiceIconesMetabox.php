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
        view('metaboxes/service-icone');
    }
}
