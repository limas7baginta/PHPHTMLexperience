<title>Data Mahasiswa - Search</title>
<?php
	require_once('views/header.php'); 
	require_once('dbconnect/connect.php');
	$nama = $_POST['nama'];
	$query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$nama%'";
	$sql = mysqli_query($con,$query);
	$legend = "Hasil Search dengan keyword '".$nama."'";
    require_once('views/content.php');
    require_once('views/footer.php');
?>