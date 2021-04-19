<?php
if (!permissionValid()) {
	include_once(ABSPATH . THEME . THEMEACTIVE . 'login.php');
}else {
	echo 'home normal';
}