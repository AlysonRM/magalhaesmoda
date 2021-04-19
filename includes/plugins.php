<?php
// foreach ($listPlugins as $listPlugin) { 
// 	include_once( ABSPATH . INC . PLUGIN . "$listPlugin/index.php");
// }
function loadPlugins($type) {
	$listPlugins = array('toastr');

	if ($type == 'css') { 
		foreach ($listPlugins as $listPlugin) { 
		include_once( ABSPATH . INC . PLUGIN . "$listPlugin/index.php");?>
		<link href="<?php echo URLHTTP . INC . PLUGIN . $listPlugin . $toastrDIR ;?>.css" rel="stylesheet" />

	<?php
		}
	} elseif ($type == 'js') {

		foreach ($listPlugins as $listPlugin) { 
			echo "\n"; //Quebrar linha
			include_once( ABSPATH . INC . PLUGIN . "$listPlugin/index.php");
		?>
		<script src="<?php echo INC . PLUGIN . $listPlugin ;?>js"></script>
		<?php
			include_once(ABSPATH . INC . PLUGIN . "$listPlugin/config.php");
		};
	}
}