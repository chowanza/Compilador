<?php
require_once 'admin/conn.php';

if(ISSET($_POST['save'])){
	$stud_no = $_POST['stud_no'];
	$firstname = $_POST['firstname'];
	$password = md5($_POST['password']);
	$jejeje = 'password';
	
	// Check if the username or email already exists in the database
	$query = mysqli_query($conn, "SELECT * FROM student WHERE stud_no='$stud_no' OR firstname='$firstname'");
	if(mysqli_num_rows($query) > 0){
		// Username or email already exists
		// Display an error message and prevent the form from being submitted
		echo "<script>alert('Usuario o Email esta en USO');</script>";
	} else {
		// Username and email are unique
		echo "<script>alert('Usuario Registrado Exitosamente');</script>";
		// Insert the new record into the database
		mysqli_query($conn, "INSERT INTO student (stud_no, firstname, $jejeje) VALUES('$stud_no', '$firstname', '$password')") or die(mysqli_error());
		// Redirect to index.php
		header('location: index.php');

	}
}
?>
