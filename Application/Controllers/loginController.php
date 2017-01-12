<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		$title = 'Login';
		require 'Application/View/inventario/index.php';
	}else{
		header('location: ?view=index');
	}
?>