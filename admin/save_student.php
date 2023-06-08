<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$stud_no = $_POST['stud_no'];
		$firstname = $_POST['firstname'];
		$password = md5($_POST['password']);
		$jejeje = 'password';
		
		mysqli_query($conn, "INSERT INTO student (stud_no, firstname, $jejeje) VALUES('$stud_no', '$firstname', '$password');") or die(mysqli_error());
		
		header('location: student.php');
	}
?>