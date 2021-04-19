<?php
session_start();
function permissionValid() {
	if(isset($_SESSION['user'])) {
		return true;
	}else {
		return false;
	}
}
