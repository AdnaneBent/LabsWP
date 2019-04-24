<?php

namespace App\Features\PostTypes;

class TestimonialPostType
{

    public static $slug = 'testimonial';
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
                    'name' => __('Testimonials'),
                    'singular_name' => __('Testimonial'),
                    'add_new' => __('Ajouter'),
                    'add_new_item' => __('Ajouter un testimonial'),
                    'edit_item' => __('Modifier le testimonial'),
                    'new_item' => __('Nouveau testimonial'),
                    'view_item' => __('Voir le testimonial'),
                    'view_items' => __('Voir les testimonials'),
                    'search_items' => __('Rechercher des testimonials'),
                    'not_found' => __('Pas de testimonial trouvées.'),
                    'not_found_in_trash' => ('Pas de testimonials dans la corbeille.'),
                    'all_items' => __('Toutes les testimonials'),
                    'archives' => __('testimonials archivées'),
                    'filter_items_list' => __('Filtre de testimonial'),
                    'items_list_navigation' => __('Navigation de testimonial'),
                    'items_list' => __('Liste des testimonial'),
                    'item_published' => __('testimonial publiée.'),
                    'item_published_privately' => __('testimonial publiée en privé.'),
                    'item_reverted_to_draft' => __('Le testimonial est retournée au brouillon.'),
                    'item_scheduled' => __('testimonial planifiée.'),
                    'item_updated' => __('testimonial mise à jours.'),

                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'testimonials',
                ],
                // Rajout d'un icon à coté de notre lien 'testimonial' dans notre menu, par défaut on à une epingle, je l'ai changée pour un bouquin. La liste des icones peut être retrouvé sur :
                // https://developer.wordpress.org/resource/dashicons/#admin-tools
                'menu_icon' => 'dashicons-format-quote',
                'supports' =>  ['title', 'editor', 'thumbnail'],

            ]
        );
    }
}
