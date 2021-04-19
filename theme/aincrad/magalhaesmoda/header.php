<!DOCTYPE html>
<html lang="pt-br">
	<head>
	  <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel=icon href="uploads/logo.png" sizes="16x16" type="image/png">
	  <title><?php echo COMPANY . ' ' . ucfirst(routes()); ?></title>
	  <!-- Bootstrap CSS -->
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

		<!-- Style for Theme -->
		<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
		</style>
  		<link rel="stylesheet" href="<?php echo URLHTTP . THEME . THEMEACTIVE . 'css/login.css'; ?>" />

<?php
loadPlugins('css');
?>
	</head>
	<body>