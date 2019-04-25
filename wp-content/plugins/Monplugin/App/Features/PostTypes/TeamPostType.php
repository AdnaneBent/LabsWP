<?php

namespace App\Features\PostTypes;

class TeamPostType
{

    public static $slug = 'team';
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
                    'name' => __('Teams'),
                    'singular_name' => __('Team'),
                    'add_new' => __('Ajouter'),
                    'add_new_item' => __('Ajouter un membre de la team'),
                    'edit_item' => __('Modifier la team'),
                    'new_item' => __('Nouveau team'),
                    'view_item' => __('Voir la team'),
                    'view_items' => __('Voir les membre de la team'),
                    'search_items' => __('Rechercher les membres de la team'),
                    'not_found' => __('Pas de membre de la team trouvées.'),
                    'not_found_in_trash' => ('Pas de membre de la team dans la corbeille.'),
                    'all_items' => __('Tout les membres de la teams'),
                    'archives' => __('teams archivées'),
                    'filter_items_list' => __('Filtre des membres'),
                    'items_list_navigation' => __('Navigation team'),
                    'items_list' => __('Liste des team'),
                    'item_published' => __('team publiée.'),
                    'item_published_privately' => __('team publiée en privé.'),
                    'item_reverted_to_draft' => __('La team est retournée au brouillon.'),
                    'item_scheduled' => __('team planifiée.'),
                    'item_updated' => __('team mise à jours.'),

                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'team',
                ],
                // Rajout d'un icon à coté de notre lien 'team' dans notre menu, par défaut on à une epingle, je l'ai changée pour un bouquin. La liste des icones peut être retrouvé sur :
                // https://developer.wordpress.org/resource/dashicons/#admin-tools
                'menu_icon' => 'dashicons-universal-access',
                'supports' =>  ['title', 'editor', 'thumbnail'],

            ]
        );
    }
}
