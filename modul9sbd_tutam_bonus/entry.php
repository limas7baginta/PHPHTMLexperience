<?php
	require_once('dbconnect/connect.php');
	$nama = $_POST['nama'];
	$ang = $_POST['ang'];
	$fak = $_POST['fak'];
	$jur = $_POST['jur'];
	$npm = $_POST['npm'];
	$query = "INSERT INTO mahasiswa values('$nama', '$ang', '$fak', '$jur', $npm)";
	$sql = mysqli_query($con,$query);
	header('Location:index.php');
?>
