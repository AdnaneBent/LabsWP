<?php
use App\Features\PostTypes\ServicePostType;
use App\Features\Taxonomies\ServiceTaxonomy;
use App\Features\MetaBoxes\ServiceIconesMetabox;



add_action('init', [ServicePostType::class, 'register']);

add_action('init', [ServiceTaxonomy::class, 'register']);

add_action('add_meta_boxes_service', [ServiceIconesMetabox::class, 'add_meta_box']);

add_action('save_post_' . ServicePostType::$slug, [ServiceIconesMetabox::class, 'save']);
