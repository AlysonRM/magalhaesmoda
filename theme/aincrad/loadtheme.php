<?php

define('THEMEACTIVE', 'magalhaesmoda/');


function loadTheme($pPHP) {
	if ($pPHP == "header") {
		require_once(ABSPATH . THEME . THEMEACTIVE . 'header.php');
	}elseif ($pPHP == "footer") {
		require_once(ABSPATH . THEME . THEMEACTIVE . 'footer.php');
	}elseif ($pPHP == 'home') {
		include_once(ABSPATH . THEME . THEMEACTIVE . $pPHP . '.php');
	} elseif ($pPHP == 'login') {
		login();
	}else {
		echo "Error: Not load theme for system";
	}

}
