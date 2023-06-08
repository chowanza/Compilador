<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$status = $_POST['status'];
		$jejeje = 'password';
		$si = 'status';

		mysqli_query($conn, "INSERT INTO user (firstname, lastname, username, $jejeje, $si) VALUES( '$firstname', '$lastname', '$username', '$password', '$status');") or die(mysqli_error());
		
		header('location: user.php');
	}
?>