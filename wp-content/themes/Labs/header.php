<!DOCTYPE html>
<html lang="en">

<head>
    <title>Labs - Design Studio</title>
    <meta charset="UTF-8">
    <meta name="description" content="Labs - Design Studio">
    <meta name="keywords" content="lab, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">


    <?php
    $logoLabs = get_theme_mod('labs-logo-setting');
    ?>

    <?php
    // Ajout des css de manière dynamique grâce à functions.php
    wp_head();
    ?>

    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
            <h2>Loading.....</h2>
        </div>
    </div>


    <!-- Header section -->
    <header class="header-section">
        <a href="<?php echo get_site_url(); ?>" class="logo">
            <?= wp_get_attachment_image(
                $logoLabs,
                '',
                [
                    'class' => 'img-fluid'
                ]
            ); ?>
            <!-- Logo -->
        </a>
        <!-- Navigation -->
        <div class="responsive"><i class="fa fa-bars"></i></div>
        <nav>
            <?php
            wp_nav_menu([
                // 'menu' => 'main-menu',
                'menu_class' => 'menu-list',
                'theme-location' => 'main-menu',
                'container' => ''
            ]);
            ?>
        </nav>
    </header>
    <!-- Header section end -->