<?php
	session_start();

	if(isset($_SESSION['usuario'])){
		
	}else{
		header('location: ?view=login');
	}
?>