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
add_action('customize_register', 'ajout_personnalisation_logo');
add_action('customize_register', 'ajout_personnalisation_about');
