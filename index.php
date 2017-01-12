<?php
	
	//variable de la vista, se define por url.
	$view = isset($_GET['view']) ? $_GET['view'] : 'index';

	if(file_exists('Application/Controllers/'.$view.'Controller.php')){
		include 'Application/Controllers/'.$view.'Controller.php';
	}else{
		include 'Application/Controllers/errorController.php';
	}
	
?>