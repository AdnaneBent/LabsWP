<?php


// nous utilisons le fonction define() de php pour nous facilité l'écriture et pouvoir utiliser un Constante global
define('INCLUDE_DIR', get_template_directory() . "/includes");
require_once(INCLUDE_DIR . '/enqueue-script.php');

require_once(INCLUDE_DIR . '/customizer.php');

require_once(INCLUDE_DIR . '/menu.php');

require_once(INCLUDE_DIR . '/theme-setup.php');
