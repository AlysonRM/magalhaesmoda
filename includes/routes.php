<?php

function routes() {
	if(isset($_REQUEST['page_id'])) {
		$page = $_REQUEST['page_id'];
	}else {
		$page = 'home';
	}
	return $page;
}


