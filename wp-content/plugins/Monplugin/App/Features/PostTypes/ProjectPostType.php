<?php

namespace App\Features\PostTypes;

class ProjectPostType
{

    public static $slug = 'project';
    /**
     * Enregistrement du type de contenu recipe
     *
     * @return void
     */
    public static function register()
    {
        register_post_type(
            self::$slug,
            [

                'labels' => [
                    'name' => __('Projects'),
                    'singular_name' => __('Project'),
                    'add_new' => __('Ajouter'),
                    'add_new_item' => __('Ajouter un projet'),
                    'edit_item' => __('Modifier le projet'),
                    'new_item' => __('Nouveau projet'),
                    'view_item' => __('Voir le projet'),
                    'view_items' => __('Voir les projets'),
                    'search_items' => __('Rechercher des projets'),
                    'not_found' => __('Pas de projet trouvés.'),
                    'not_found_in_trash' => ('Pas de projets dans la corbeille.'),
                    'all_items' => __('Tous les projets'),
                    'archives' => __('projets archivées'),
                    'filter_items_list' => __('Filtre de projet'),
                    'items_list_navigation' => __('Navigation de projet'),
                    'items_list' => __('Liste des projet'),
                    'item_published' => __('projet publiée.'),
                    'item_published_privately' => __('projet publiée en privé.'),
                    'item_reverted_to_draft' => __('Le projet est retournée au brouillon.'),
                    'item_scheduled' => __('projet planifiée.'),
                    'item_updated' => __('projet mise à jours.'),

                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'projects',
                ],
                // Rajout d'un icon à coté de notre lien 'projet' dans notre menu, par défaut on à une epingle, je l'ai changée pour un bouquin. La liste des icones peut être retrouvé sur :
                // https://developer.wordpress.org/resource/dashicons/#admin-tools
                'menu_icon' => 'dashicons-portfolio',
                'supports' =>  ['title', 'editor', 'thumbnail'],

            ]
        );
    }
}
