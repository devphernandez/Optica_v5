<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		$title = 'Login';
		require 'Application/View/login/index.php';
	}else{
		header('location: ?view=index');
	}
?>