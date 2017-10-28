<?php
	require_once('dbconnect/connect.php');
	$nama = $_POST['nama'];
	$ang = $_POST['ang'];
	$fak = $_POST['fak'];
	$jur = $_POST['jur'];
	$npm = $_POST['npm'];
	$query = "UPDATE mahasiswa SET nama='$nama', angkatan='$ang', fakultas='$fak', prodi='$jur' WHERE npm='$npm'";
	$sql = mysqli_query($con,$query);
	header('Location: index.php');	
?>