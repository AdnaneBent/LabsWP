<?php
use App\Features\PostTypes\ServicePostType;
use App\Features\PostTypes\TestimonialPostType;
use App\Features\PostTypes\TeamPostType;
use App\Features\Taxonomies\ServiceTaxonomy;
use App\Features\Taxonomies\TestimonialTaxonomy;
use App\Features\Taxonomies\TeamTaxonomy;
use App\Features\MetaBoxes\ServiceIconesMetabox;



add_action('init', [ServicePostType::class, 'register']);

add_action('init', [ServiceTaxonomy::class, 'register']);

add_action('init', [TestimonialPostType::class, 'register']);

add_action('init', [TestimonialTaxonomy::class, 'register']);

add_action('init', [TeamPostType::class, 'register']);

add_action('init', [TeamTaxonomy::class, 'register']);

add_action('add_meta_boxes_service', [ServiceIconesMetabox::class, 'add_meta_box']);

add_action('save_post_' . ServicePostType::$slug, [ServiceIconesMetabox::class, 'save']);
