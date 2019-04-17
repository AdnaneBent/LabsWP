<?php

namespace App\Features\PostTypes;

class ServicePostType
{

  public static $slug = 'service';
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
          'name' => __('Services'),
          'singular_name' => __('Service'),
          'add_new' => __('Ajouter'),
          'add_new_item' => __('Ajouter un service'),
          'edit_item' => __('Modifier le service'),
          'new_item' => __('Nouveau service'),
          'view_item' => __('Voir le service'),
          'view_items' => __('Voir les services'),
          'search_items' => __('Rechercher des services'),
          'not_found' => __('Pas de service trouvées.'),
          'not_found_in_trash' => ('Pas de services dans la corbeille.'),
          'all_items' => __('Toutes les services'),
          'archives' => __('services archivées'),
          'filter_items_list' => __('Filtre de service'),
          'items_list_navigation' => __('Navigation de service'),
          'items_list' => __('Liste des service'),
          'item_published' => __('service publiée.'),
          'item_published_privately' => __('service publiée en privé.'),
          'item_reverted_to_draft' => __('Le service est retournée au brouillon.'),
          'item_scheduled' => __('service planifiée.'),
          'item_updated' => __('service mise à jours.'),

        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => [
          'slug' => 'services',
        ],
        // Rajout d'un icon à coté de notre lien 'service' dans notre menu, par défaut on à une epingle, je l'ai changée pour un bouquin. La liste des icones peut être retrouvé sur :
        // https://developer.wordpress.org/resource/dashicons/#admin-tools
        'menu_icon' => 'dashicons-clipboard',

      ]
    );
  }
}
