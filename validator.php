<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	if(!ISSET($_SESSION['student'])){
		header('location:index.php');
	}
?>