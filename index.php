<?php
require_once __DIR__ . '/_config.php';
include_once(ABSPATH . INC . 'db.php');
include_once(ABSPATH . INC . 'routes.php');
include_once(ABSPATH . INC . 'permissions.php');
include_once(ABSPATH . INC . 'plugins.php');
include_once(ABSPATH . THEME . 'loadtheme.php');
// include_once()

/*Cabeçalho padrão do sistema*/
loadTheme('header');

// echo ABSPATH . INC . 'permissions.php';
loadTheme(routes());

//PLUGINS JS
loadPlugins('js');

/*Rodapé padrão do sistema*/
loadTheme('footer');

