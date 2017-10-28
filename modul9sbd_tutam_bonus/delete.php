<?php
	require_once('dbconnect/connect.php');
	$npm = $_GET['npm'];
	$query = "DELETE FROM mahasiswa WHERE npm='$npm'";
	$sql = mysqli_query($con,$query);
	header('Location: index.php');	
?>