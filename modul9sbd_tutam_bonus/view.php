<title>Data Mahasiswa - View</title>
<?php
	require_once('views/header.php'); 
	require_once('dbconnect/connect.php');
	$npm = $_GET['npm'];
	$query = "SELECT * FROM mahasiswa WHERE npm=$npm";
	$sql = mysqli_query($con,$query);
	$legend = "Data Mahasiswa Dengan NPM ".$npm;
    require_once('views/content.php');
    require_once('views/footer.php');
?>