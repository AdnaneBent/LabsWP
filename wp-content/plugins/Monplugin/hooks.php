<?php
use App\Features\PostTypes\ServicePostType;
use App\Features\Taxonomies\ServiceTaxonomy;
use App\Features\MetaBoxes\ServiceIconesMetabox;
use App\Features\PostTypes\TestimonialPostType;
use App\Features\Taxonomies\TestimonialTaxonomy;
use App\Features\PostTypes\TeamPostType;
use App\Features\Taxonomies\TeamTaxonomy;
use App\Features\PostTypes\ProjectPostType;
use App\Features\Taxonomies\ProjectTaxonomy;
use App\Features\MetaBoxes\ProjectIconesMetabox;
use App\Http\Controllers\MailController;
use App\Features\Pages\SendNewsletter;
use App\Features\Pages\Page;
use App\Setup;
use App\Databases\Database;

add_action('init', [ServicePostType::class, 'register']);

add_action('init', [ServiceTaxonomy::class, 'register']);

add_action('init', [TestimonialPostType::class, 'register']);

add_action('init', [TestimonialTaxonomy::class, 'register']);

add_action('init', [TeamPostType::class, 'register']);

add_action('init', [TeamTaxonomy::class, 'register']);

add_action('init', [ProjectPostType::class, 'register']);

add_action('init', [ProjectTaxonomy::class, 'register']);

add_action('add_meta_boxes_project', [ProjectIconesMetabox::class, 'add_meta_box']);

add_action('add_meta_boxes_service', [ServiceIconesMetabox::class, 'add_meta_box']);

add_action('save_post_' . ServicePostType::$slug, [ServiceIconesMetabox::class, 'save']);

add_action('save_post_' . ProjectPostType::$slug, [ProjectIconesMetabox::class, 'save']);

add_action('admin_post_send-mail', [MailController::class, 'send']);

add_action('admin_post_nopriv_send-mail', [MailController::class, 'send']);

add_action('admin_action_mail-delete', [MailController::class, 'delete']);

add_action('admin_post_send-newsletter', [SendNewsletter::class, 'send_newsletter']);

add_action('admin_action_new-delete', [SendNewsletter::class, 'delete']);

add_action('admin_post_nopriv_send-newsletter', [SendNewsletter::class, 'send_newsletter']);

add_action('init', [Setup::class, 'start_session']);

register_activation_hook(__DIR__ . '/Monplugin.php', [Database::class, 'init']);

add_action('admin_menu', [Page::class, 'init']);
