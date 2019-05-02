<?php


/**
 * Fonction qui ajoute la possibilité de customiser la partie personnalisation du thème
 * //https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @param [type] $wp_customize
 * @return void
 */
function ajout_personnalisation_logo($wp_customize)
{
    // customize logo
    // panel pour logo
    $wp_customize->add_panel('labs-panel-header', [
        'title' => __('Section Header'),
        'Description' => __('Personnalisation du logo')
    ]);
    // fin panel logo


    $wp_customize->add_section('labs-logo-section', [
        'panel' => 'labs-panel-header',
        'title' => __('Personnalisation des logo'),
        'description' => __('Personnalisez les logo')
    ]);


    $wp_customize->add_setting('labs-logo-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_file_name'
    ]);

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'labs-image-logo-control', [
        'section' => 'labs-logo-section',
        'settings' => 'labs-logo-setting',
        'label' => __('logo'),
        'description' => __('Personnalisez le logo'),
        'mime_type' => 'image'
    ]));

    // fin customize logo

    // customize logo header


    $wp_customize->add_setting('labs-biglogo-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_file_name'
    ]);

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'labs-image-biglogo-control', [
        'section' => 'labs-logo-section',
        'settings' => 'labs-biglogo-setting',
        'label' => __('Le logo dans le header'),
        'description' => __('Personnalisez le logo dans le header'),
        'mime_type' => 'image'
    ]));

    // Fin customize logo header

    // Image carousel


    $wp_customize->add_section('labs-carousel-section', [
        'panel' => 'labs-panel-header',
        'title' => __('Personnalisation du carousel'),
        'description' => __('Changer les images du carousel')
    ]);

    // image 1

    $wp_customize->add_setting('labs-carousel-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_file_name'
    ]);

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'labs-image-carousel-control', [
        'section' => 'labs-carousel-section',
        'settings' => 'labs-carousel-setting',
        'label' => __('Le carousel dans le header'),
        'description' => __("image 1"),
        'mime_type' => 'image'
    ]));

    // Fin image 1

    // Image 2

    $wp_customize->add_setting('labs-carousel2-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_file_name'
    ]);

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'labs-image-carousel2-control', [
        'section' => 'labs-carousel-section',
        'settings' => 'labs-carousel2-setting',
        'label' => __(''),
        'description' => __("Image 2"),
        'mime_type' => 'image'
    ]));

    // Fin image 2

    // image 3

    $wp_customize->add_setting('labs-carousel3-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_file_name'
    ]);

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'labs-image-carousel3-control', [
        'section' => 'labs-carousel-section',
        'settings' => 'labs-carousel3-setting',
        'label' => __(''),
        'description' => __("Image 3"),
        'mime_type' => 'image'
    ]));

    // Fin image 3

    // Fin image carousel
}

function ajout_personnalisation_about($wp_customize)
{
    // customize section about

    // panel pour la section about
    $wp_customize->add_panel('labs-panel-about', [
        'title' => __('Section About'),
        'Description' => __('Personnalisation de la section About')
    ]);
    // fin panel about

    // Les SECTIONS //

    // section titre

    $wp_customize->add_section('labs-about-titre', [
        'panel' => 'labs-panel-about',
        'title' => __('Personnalisation du titre'),
        'description' => __('Personnalisez le titre de la section about')
    ]);

    // Fin section titre


    // section des textes

    $wp_customize->add_section('labs-about-section', [
        'panel' => 'labs-panel-about',
        'title' => __('Section des deux textes'),
        'description' => __('Personnalisez les éléments de la section')
    ]);

    // $wp_customize->add_section('labs-about-section-right', [
    //     'panel' => 'labs-panel-about',
    //     'title' => __('Personnalisation de la section de droite'),
    //     'description' => __('Personnalisez les éléments de la section')
    // ]);

    // Fin section des textes

    // section bouton

    $wp_customize->add_section('labs-about-bouton', [
        'panel' => 'labs-panel-about',
        'title' => __('Personnalisation du bouton'),
        'description' => __('Personnalisez le bouton')
    ]);

    // Fin section bouton

    // Section video

    $wp_customize->add_section('labs-about-video', [
        'panel' => 'labs-panel-about',
        'title' => __('Personnalisation de la vidéo'),
        'description' => __('Personnalisez la vidéo')
    ]);

    // Fin section video

    // FIN des SECTIONS //

    // Les SETTINGS //

    // Setting du titre

    $wp_customize->add_setting('labs-about-titre-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    // Fin setting du titre

    // Setting des textes

    $wp_customize->add_setting('labs-about-left[text]', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    $wp_customize->add_setting('labs-about-right[text]', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    // Fin setting textes

    // Setting bouton

    $wp_customize->add_setting('labs-about-bouton-setting[text]', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_setting('labs-about-bouton-setting[url]', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    // Fin setting bouton

    // Setting vidéo

    $wp_customize->add_setting('labs-about-video-setting[img]', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_file_name',
    ]);

    $wp_customize->add_setting('labs-about-video-setting[url]', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    // Fin setting vidéo

    // FIN des SETTINGS //

    // Les CONTROLS //

    // Control du titre

    $wp_customize->add_control('labs-about-titre-control', [
        'section' => 'labs-about-titre',
        'settings' => 'labs-about-titre-setting',
        'label' => __('Le titre'),
        'description' => __('Personnalisez le titre'),
        'type' => 'input'
    ]);

    // Fin control du titre

    // Control des textes

    $wp_customize->add_control('labs-about-text-left-control', [
        'section' => 'labs-about-section',
        'settings' => 'labs-about-left[text]',
        'label' => __('Texte colonne gauche'),
        'description' => __('Personnalisez le texte de la colonne gauche'),
        'type' => 'textarea'
    ]);

    $wp_customize->add_control('labs-about-text-right-control', [
        'section' => 'labs-about-section',
        'settings' => 'labs-about-right[text]',
        'label' => __('Texte colonne droite'),
        'description' => __('Personnalisez le texte de la colonne droite'),
        'type' => 'textarea'
    ]);

    // Fin control textes

    // Control bouton

    $wp_customize->add_control('labs-about-bouton-control', [
        'section' => 'labs-about-bouton',
        'settings' => 'labs-about-bouton-setting[text]',
        'label' => __('Texte du bouton'),
        'description' => __('Personnalisez le texte de votre bouton'),
        'type' => 'input'
    ]);

    $wp_customize->add_control('labs-about-bouton-url-control', [
        'section' => 'labs-about-bouton',
        'settings' => 'labs-about-bouton-setting[url]',
        'label' => __("l'url de votre bouton"),
        'description' => __('Le lien'),
        'type' => 'input'
    ]);

    // Fin control bouton

    // Control vidéo

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'labs-image-video-control', [
        'section' => 'labs-about-video',
        'settings' => 'labs-about-video-setting[img]',
        'label' => __("Ceci est l'image de votre vidéo"),
        'description' => __("Image de la vidéo"),
        'mime_type' => 'image'
    ]));

    $wp_customize->add_control('labs-about-video-url-control', [
        'section' => 'labs-about-video',
        'settings' => 'labs-about-video-setting[url]',
        'label' => __("l'url de votre vidéo"),
        'description' => __('Le lien de la vidéo'),
        'type' => 'input'
    ]);

    // Fin control vidéo

    // FIN CONTROLS //

    // fin customize texte

}


function ajout_personnalisation_titre($wp_customize)
{
    // customize section about

    // panel pour la section about
    $wp_customize->add_panel('labs-panel-titre', [
        'title' => __('Les titres'),
        'Description' => __('Personnalisation des titres')
    ]);
    // fin panel about

    // panel page service

    $wp_customize->add_panel('labs-panel-titre-pService', [
        'title' => __('Les titres page service'),
        'Description' => __('Personnalisation des titres de la page service')
    ]);

    // FIn panel pour page service

    // Les SECTIONS //

    // section testimonial titre

    $wp_customize->add_section('labs-testimonial-titre', [
        'panel' => 'labs-panel-titre',
        'title' => __('Titre section testimonial'),
        'description' => __('Personnalisez le titre de la section testimonial')
    ]);

    // Fin testimonial titre


    // section service titre

    $wp_customize->add_section('labs-service-titre', [
        'panel' => 'labs-panel-titre',
        'title' => __('Titre section service'),
        'description' => __('Personnalisez le titre de la section service')
    ]);

    // Fin service titre

    // section team titre

    $wp_customize->add_section('labs-team-titre', [
        'panel' => 'labs-panel-titre',
        'title' => __('Titre section team'),
        'description' => __('Personnalisez le titre de la section service')
    ]);

    // fin section team titre

    // Section Stand Out Titre et texte

    $wp_customize->add_section('labs-stand', [
        'panel' => 'labs-panel-titre',
        'title' => __('Section Stand Out'),
        'description' => __('Personnalisez la section Stand Out')
    ]);

    // Fin section Stand Out

    // Section titre page service

    $wp_customize->add_section('labs-service-titre-pService', [
        'panel' => 'labs-panel-titre-pService',
        'title' => __('Les titres'),
        'description' => __('Personnalisez les titres de la page service')
    ]);

    // Fin section titre page service

    // FIN des SECTIONS //

    // Les SETTINGS //

    // Setting testimonial du titre

    $wp_customize->add_setting('labs-testimonial-titre-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    // Fin setting testimonial du titre

    // Setting service du titre

    $wp_customize->add_setting('labs-service-titre-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    // Fin setting service du titre

    // Setting team du titre

    $wp_customize->add_setting('labs-team-titre-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    // Fin setting team

    // Setting Stand Out du titre et du texte

    $wp_customize->add_setting('labs-stand-titre-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_setting('labs-stand-text-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_setting('labs-stand-bouton-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    // Fin Setting Stand Out

    // Settings titre page service

    $wp_customize->add_setting('labs-titre-pService-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    // Fin setting titre page service

    // Settings titre page service (projet phone)

    $wp_customize->add_setting('labs-titre-pService-phone-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);


    // Fin settings titre page service (projet phone)

    // Settings 

    // FIN des SETTINGS //

    // Les CONTROLS //

    // Control du titre testimonial

    $wp_customize->add_control('labs-testimonial-titre-control', [
        'section' => 'labs-testimonial-titre',
        'settings' => 'labs-testimonial-titre-setting',
        'label' => __('Titre Testimonial'),
        'description' => __('Personnalisez le titre'),
        'type' => 'input'
    ]);

    // Fin control du titre testimonial

    // Control du titre service

    $wp_customize->add_control('labs-service-titre-control', [
        'section' => 'labs-service-titre',
        'settings' => 'labs-service-titre-setting',
        'label' => __('Titre Service'),
        'description' => __('Personnalisez le titre'),
        'type' => 'input'
    ]);

    // Fin control titre service

    // Control team service

    $wp_customize->add_control('labs-team-titre-control', [
        'section' => 'labs-team-titre',
        'settings' => 'labs-team-titre-setting',
        'label' => __('Titre Service'),
        'description' => __('Personnalisez le titre'),
        'type' => 'input'
    ]);

    // Fin control team service

    // Control Stand Out

    $wp_customize->add_control('labs-stand-titre-control', [
        'section' => 'labs-stand',
        'settings' => 'labs-stand-titre-setting',
        'label' => __('Titre Service'),
        'description' => __('Personnalisez le titre'),
        'type' => 'input'
    ]);


    $wp_customize->add_control('labs-stand-text-control', [
        'section' => 'labs-stand',
        'settings' => 'labs-stand-text-setting',
        'label' => __('texte Stand Out'),
        'description' => __('Personnalisez du texte'),
        'type' => 'textarea'
    ]);

    $wp_customize->add_control('labs-stand-bouton-control', [
        'section' => 'labs-stand',
        'settings' => 'labs-stand-bouton-setting',
        'label' => __('texte du bouton Stand Out'),
        'description' => __('Personnalisez du texte du bouton'),
        'type' => 'input'
    ]);

    // Fin control Stand Out

    // Control titre page service (service)

    $wp_customize->add_control('labs-titre-pService-control', [
        'section' => 'labs-service-titre-pService',
        'settings' => 'labs-titre-pService-setting',
        'label' => __('Titre des services'),
        'description' => __('Personnalisez le titre'),
        'type' => 'input'
    ]);

    // Fin control titre page service (service)

    // Control titre page service (projetphone)

    $wp_customize->add_control('labs-titre-pService-phone-control', [
        'section' => 'labs-service-titre-pService',
        'settings' => 'labs-titre-pService-phone-setting',
        'label' => __('Titre des projets'),
        'description' => __('Personnalisez le titre'),
        'type' => 'input'
    ]);

    // Fin control titre page service (projetphone)

    // FIN CONTROLS //


}

function ajout_personnalisation_contact($wp_customize)
{
    // customize section about

    // panel pour la section about
    $wp_customize->add_panel('labs-panel-contact', [
        'title' => __('Section Contact'),
        'Description' => __('Personnalisation de la partie contact')
    ]);
    // fin panel about

    // Les SECTIONS //

    // section contact titre

    $wp_customize->add_section('labs-contact-titre', [
        'panel' => 'labs-panel-contact',
        'title' => __('Titre section contact'),
        'description' => __('Personnalisez le titre de la section contact')
    ]);

    // Fin contact titre


    // section texte contact

    $wp_customize->add_section('labs-contact-text', [
        'panel' => 'labs-panel-contact',
        'title' => __('Texte section contact'),
        'description' => __('Personnalisez le texte de la section contact')
    ]);

    // Fin texte contact

    // section coordonnée contact

    $wp_customize->add_section('labs-contact-data', [
        'panel' => 'labs-panel-contact',
        'title' => __('Coordonnée'),
        'description' => __('Personnalisez les coordonnées de la section contact')
    ]);

    // Fin coordonnées contact

    // FIN des SECTIONS //

    // Les SETTINGS //

    // Setting contact titre

    $wp_customize->add_setting('labs-contact-titre-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    // Fin setting contact titre

    // Setting contact texte

    $wp_customize->add_setting('labs-contact-text-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    // Fin setting contact texte

    // Setting contact coordonnées

    $wp_customize->add_setting('labs-contact-soust-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);


    $wp_customize->add_setting('labs-contact-adress-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_setting('labs-contact-postal-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_setting('labs-contact-tel-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_setting('labs-contact-mail-setting', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    // Fin setting contact coordonnées


    // FIN des SETTINGS //

    // Les CONTROLS //

    // Control du titre contact

    $wp_customize->add_control('labs-contact-titre-control', [
        'section' => 'labs-contact-titre',
        'settings' => 'labs-contact-titre-setting',
        'label' => __('Titre Contact'),
        'description' => __('Personnalisez le titre'),
        'type' => 'input'
    ]);

    // Fin control du titre contact

    // Control du texte contact

    $wp_customize->add_control('labs-contact-text-control', [
        'section' => 'labs-contact-text',
        'settings' => 'labs-contact-text-setting',
        'label' => __('Texte Contact'),
        'description' => __('Personnalisez le texte'),
        'type' => 'textarea'
    ]);

    // Fin control texte contact

    // Control coordonnées service

    $wp_customize->add_control('labs-contact-data-control', [
        'section' => 'labs-contact-data',
        'settings' => 'labs-contact-soust-setting',
        'label' => __('Sous titre contact'),
        'description' => __('Personnalisez le titre'),
        'type' => 'input'
    ]);

    $wp_customize->add_control('labs-contact-adress-control', [
        'section' => 'labs-contact-data',
        'settings' => 'labs-contact-adress-setting',
        'label' => __('Adresse'),
        'description' => __('Personnalisez'),
        'type' => 'input'
    ]);


    $wp_customize->add_control('labs-contact-postal-control', [
        'section' => 'labs-contact-data',
        'settings' => 'labs-contact-postal-setting',
        'label' => __('Code Postal'),
        'description' => __('Personnalisez du texte'),
        'type' => 'input'
    ]);

    $wp_customize->add_control('labs-contact-tel-control', [
        'section' => 'labs-contact-data',
        'settings' => 'labs-contact-tel-setting',
        'label' => __('Numéro de téléphone'),
        'description' => __('Personnalisez le numéro'),
        'type' => 'input'
    ]);

    $wp_customize->add_control('labs-contact-mail-control', [
        'section' => 'labs-contact-data',
        'settings' => 'labs-contact-mail-setting',
        'label' => __('Adresse mail'),
        'description' => __("Personnalisez l'adresse mail'"),
        'type' => 'input'
    ]);

    // Fin control contact

    // FIN CONTROLS //


}
add_action('customize_register', 'ajout_personnalisation_logo');
add_action('customize_register', 'ajout_personnalisation_about');
add_action('customize_register', 'ajout_personnalisation_titre');
add_action('customize_register', 'ajout_personnalisation_contact');
