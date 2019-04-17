<?php
/**
 * Plugin Name:     Testimonials and Services
 * Description:     Ceci est un plugin pour pouvoir crée des Testimoniaux et des services
 * Author:          Adnane Bent Mohamed
 * Author URI:      AdnaneB
 * Version:         0.1.0
 *
 * @package         Monplugin
 */

// Your code starts here.

use App\Features\PostTypes\ServicePostType;
use App\Features\Taxonomies\ServiceTaxonomy;
use App\Features\MetaBoxes\ServiceIconesMetabox;

require_once('autoload.php');

// J'inclus le fichier env
require_once('env.php');

// J'inclus le fichier helpers.php
require_once('helpers.php');

add_action('init', [ServicePostType::class, 'register']);

add_action('init', [ServiceTaxonomy::class, 'register']);

add_action('add_meta_boxes_service', [ServiceIconesMetabox::class, 'add_meta_box']);

add_action('save_post_' . ServicePostType::$slug, [ServiceIconesMetabox::class, 'save']);
