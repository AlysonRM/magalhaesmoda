<?php
include_once();
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS);
if ($conn->connect_error) {

}else { 

}


function login() {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST['email'];
		$passw = md5($POST['password']);
		echo "<br/>";
		// echo "http://" . $_SERVER['HTTP_HOST'];
		echo URL;
		echo "<br/>";
		echo "Nome: $passw";
	} else {
		echo "Sem dados para encaminas login";
		echo ABS;
	}

}

function homePage(){

}